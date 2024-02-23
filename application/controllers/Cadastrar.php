
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->library("session");
		$this->load->model("Instruments_model"				, "instruments");
		$this->load->model("Users_model"							, "users");

	}

	public function index()
	{
		$data = [];
		$data['row'] = $this->instruments->listAll();

		$this->template->show('cadastrar',$data);
	}

	public function save_user(){

		$json 									= array();
		$json['status'] 				= 1;
		$json['error_list'] 		= array();
		$data["user_id"]						 = [];
		$data['user_img'] 					 = $this->input->post("user_img");
		$data['user_name']  				 = $this->input->post("user_name");
		$data['user_email']  				 = $this->input->post("user_email");
		$password  								   = $this->input->post("user_password");
		$data['user_bio']  					 = $this->input->post("user_bio");
		$data['inst_id']  					 = $this->input->post("inst_id");
		$data['user_password_hash']  = password_hash($password, PASSWORD_DEFAULT);//password_verify(senha,senha_comparar) depois pra comparar esses hash


		if ($this->users->is_duplicated("user_email", $data['user_email'])) {
				$json['error_list']["#user_email"] = "Email de usuario ja cadastrado !!!";
				/*Mensagem De Alerta*/
				$teste 														 = $this->users->get_user_data($data['user_email']);
				$data["user_id"] 									 = $teste->user_id;
		}
		if (!empty($json["error_list"])) {
			$return['status']                   = 'warning';
			$return['title']                    = 'ERRO';
			$return['msg']                      = 'Cadastro falhou tente novamente';
			$return['url']                      = 'home';
		} else {
			if (!empty($data["user_img"])) {

				$file_name = basename($data["user_img"]);
				$old_path = getcwd() . "/tmp/" . $file_name;
				$new_path = getcwd() . "/public/images/users/" . $file_name;
				rename($old_path, $new_path);

				$data["user_img"] = "/public/images/users/" . $file_name;

			} else {
				unset($data["user_img"]);
			}

			if (empty($data["user_id"])) {
				$this->users->insert($data);
			} else {
				$user_id = $data["user_id"];
				unset($data["user_id"]);
				$this->users->update($user_id, $data);
			}

			$return['status']                   = 'success';
			$return['title']                    = 'Sucesso';
			$return['msg']                      = 'Usuario cadastrado com sucesso';
			$return['url']                      = 'home';
		}

		echo json_encode($return);
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
			if($this->upload->data()["file_size"] <= 2000){
				$file_name = $this->upload->data()["file_name"];
				$json["img_path"] = base_url() . "tmp/" . $file_name;
				$json["status"] = 'sucess';
			}else{
				$json["status"] = 0;
				$json["error"] = "O arquivo nao deve ser maior q 1mb";
			}

		}
		echo json_encode($json);
	}
}
