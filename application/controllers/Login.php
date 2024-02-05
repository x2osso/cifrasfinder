<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct(){
		parent:: __construct();
		$this->load->library("session");
	}

	 public function index(){

	 		if($this->session->userdata("user_id")){
	 			$data = array(

	 			"styles" => array(
	 				"dataTables.bootstrap.min.css",
	 				"bootstrap.min.css"
	 			),

				"scripts" => array(
					"sweetalert2.all.min.js",
					"dataTables.bootstrap.min.js",
					"datatables.min.js",
					"util.js",
					"restrict.js"
				),
				"user_id" => $this->session->userdata("user_id")
			);
	 			$this->template->show("login.php",$data);
	 		}else{

	 			$data = array(
					"scripts" => array(
						"util.js",
						"login.js"
					)
				);
				$this->template->show("login.php", $data);
	 		}
	 }


	public function logoff(){
		$this->session->sess_destroy();
		header("Location: " . base_url() . "login");
	}

	 //pra testar se usuario esta sendo pego corretamente e devolvendo a info em json pro js >>
	public function ajax_login() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if (empty($username)) {
			$json["status"] = 0;
			$json["error_list"]["#username"] = "Usuário não pode ser vazio!";
		} else {

			$this->load->model("user_model");
			$result = $this->user_model->get_user_data($username);
			if ($result) {
				$user_id = $result->user_id;
				$password_hash = $result->user_password_hash;
				if($password == $password_hash) {
					print_r("Password Correta");
					$this->session->set_userdata("user_id", $user_id);
				} else {
					print_r("Erro na senha");
					$json["status"] = 0;
				}
			} else {
				$json["status"] = 0;
			}
			if ($json["status"] == 0) {
				$json["error_list"]["#btn-login"] = "Usuário e/ou senha incorretos!";
			}
		}

		echo json_encode($json);

	}

	public function ajax_import_img() {
		//configurações do ajax pra importar img
		$config["upload_path"] = "./tmp/";
		$config["allowed_types"] = "gif|png|jpg";
		$config["overwrite"] = TRUE;

		//blibliteca do php pra utilizar essa img
		$this->load->library("upload", $config);


		$json = array();
		$json["status"] = 1;

		//checa se o arquivo foi pego corretamente
		if(!$this->upload->do_upload("image_file")){
			$json["status"] = 0;
			$json["error"] = $this->load->display_errors("","");
		}else{
			//se pegar o arquivo correto
			if($this->upload->data()["file_size"] <= 1024){
				$file_name = $this->upload->data()["file_name"];
				$json["img_path"] = base_url() . "tmp/" . $file_name;
			}else{
				$json["status"] = 0;
				$json["error"] = "O arquivo nao deve ser maior q 1mb";
			}

		}
		echo json_encode($json);
	}

	public function ajax_save_curso() {

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$this->load->model("curso_model");

		$data = $this->input->post();

		if ($this->curso_model->is_duplicated("curso_nome",$data["curso_nome"], $data["curso_id"])) {
			$json["error_list"]["#curso_nome"] = "nome de curso ja existente !!!";
		}

		if (!empty($json["error_list"])) {
			$json["status"] = 0;
		} else {
			if (!empty($data["curso_img"])) {

				$file_name = basename($data["curso_img"]);
				$old_path = getcwd() . "/tmp/" . $file_name;
				$new_path = getcwd() . "/public/images/cursos/" . $file_name;
				rename($old_path, $new_path);

				$data["curso_img"] = "/public/images/cursos/" . $file_name;

			} else {
				unset($data["curso_img"]);
			}

			if (empty($data["curso_id"])) {
				$this->curso_model->insert($data);
			} else {
				$course_id = $data["curso_id"];
				unset($data["curso_id"]);
				$this->curso_model->update($course_id, $data);
			}
		}
		echo json_encode($json);
	}

	public function ajax_save_membro() {

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$this->load->model("team_model");

		$data = $this->input->post();

		if ($this->team_model->is_duplicated("membro_nome",$data["membro_nome"], $data["id_membro"])) {
			$json["error_list"]["#membro_nome"] = "nome de curso ja existente !!!";
		}

		if (!empty($json["error_list"])) {
			$json["status"] = 0;
		} else {
			if (!empty($data["membro_img"])) {

				$file_name = basename($data["membro_img"]);
				$old_path = getcwd() . "/tmp/" . $file_name;
				$new_path = getcwd() . "/public/images/membros/" . $file_name;
				rename($old_path, $new_path);

				$data["membro_img"] = "/public/images/membros/" . $file_name;

			} else {
				unset($data["membro_img"]);
			}

			if (empty($data["id_membro"])) {
				$this->team_model->insert($data);
			} else {
				$course_id = $data["id_membro"];
				unset($data["id_membro"]);
				$this->team_model->update($course_id, $data);
			}
		}
		echo json_encode($json);
	}

	public function ajax_save_user() {

		$json 							= array();
		$json["status"] 		= 1;
		$json["error_list"] = array();

		$this->load->model("user_model");

		$data = $this->input->post();

		//checa se ja tem esse user cadastrado
		if ($this->user_model->is_duplicated("user_login",$data["user_login"], $data["user_id"])) {
			$json["error_list"]["#user_login"] = "Login ja existente !!!";
		}

		if ($this->user_model->is_duplicated("user_email",$data["user_email"], $data["user_id"])) {
			$json["error_list"]["#user_email"] = "Email ja existente !!!";
		}else{
			if($data["user_email"] != $data["user_email_confirmar"]){
				$json["error_list"]["#user_email"] = "!!!";
				$json["error_list"]["#user_email_confirmar"] = "Emails nao conferem !!!";
			}
		}

		if($data["user_password"] != $data["user_senha_confirmar"]){
			$json["error_list"]["#user_password"] = "!!!";
			$json["error_list"]["#user_senha_confirmar"] = "Senhas nao conferem !!!";
		}

		if (!empty($json["error_list"])) {
			$json["status"] = 0;
		} else {

			//pra mandar a password ja criptografada
			$data["user_password_hash"] = $data["user_password"];

			unset($data["user_password"]);
			unset($data["user_email_confirmar"]);
			unset($data["user_senha_confirmar"]);

			if (empty($data["user_id"])) {
				$this->user_model->insert($data);
			} else {
				$user_id = $data["user_id"];
				unset($data["user_id"]);
				$this->user_model->update($user_id, $data);
			}
		}
		echo json_encode($json);
	}

	public function ajax_get_user_data() {

		$json 				= array();
		$json["status"] 	= 1;
		$json["input"] 		= array();

		$this->load->model("user_model");
		$user_id = $this->input->post("user_id");

		//retorna o usuario por inteiro da função la do modal de usuario e transformando em um array as info trazidas
		$data = $this->user_model->get_data($user_id)->result_array()[0];

		$json["input"]["user_id"] 									= $data["user_id"];
		$json["input"]["user_login"] 								= $data["user_login"];
		$json["input"]["user_full_name"] 						= $data["user_full_name"];
		$json["input"]["user_email"] 								= $data["user_email"];
		$json["input"]["user_email_confirmar"] 		 	= $data["user_email"];
		$json["input"]["user_password"] 						= $data["user_password_hash"];
		$json["input"]["user_senha_confirmar"]  		= $data["user_password_hash"];

		echo json_encode($json);
	}

	public function ajax_list_course()
	{
		$this->load->model("curso_model");
		$cursos 		= $this->curso_model->get_datatable();

		$data 			= array();

		foreach ($cursos as $curso) {
			$row[] 		= array();
			$row[] 		= $curso->curso_nome;

			if($curso->curso_img){
				 $row[] = '<img src="'.base_url().$curso->curso_img.'" style="max-height: 100px;
						  max-widht:100px;">';
			}else{
				$row[]  = "";
			}
			$row[]    = $curso->curso_duracao;
			$row[]    = '<div class="description">'.$curso->curso_desc.'</div>';

			$row[] 		= '<div style="display: inline-block;" >
											<button class="btn btn-primary btn-edit-curso"  curso_id="'.$curso->curso_id.'" <i class= "fa fa-edit"></i> </button>
											<button class="btn btn-danger  btn-del-curso"   curso_id="'.$curso->curso_id.'" <i class= "fa fa-edit"></i> </button>
					       	  </div>';
			$data[]		= $row;
		}

		$json = array(
			"draw" 		  	 	 => $this->input->pont("draw"),
			"recordTotal" 	 => $this->curso_model->record_total(),
			"recordFiltered" => $this->curso_model->record_filtered(),
			"data" => $data
		);

		echo json_encode($json);


	}
}
