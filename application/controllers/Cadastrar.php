
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

	public function ajax_save_user(){

		$json = array();
		$json['status'] = 1;
		$json['error_list'] = array();

		$data = $this->input->post();

		dd($data);
		die();


		if ($this->users->is_duplicated("user_email", $data["user_email"], $data['user_id'])) {
				$json['error_list']["#user_email"] = "Email de usuario ja cadastrado !!!";
		}
		if (!empty($json["error_list"])) {
			$json["status"] = 0;
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
				$this->curso_model->insert($data);
			} else {
				$user_id = $data["user_id"];
				unset($data["user_id"]);
				$this->curso_model->update($user_id, $data);
			}
		}

		die();

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
			if($this->upload->data()["file_size"] <= 2000){
				$file_name = $this->upload->data()["file_name"];
				$json["img_path"] = base_url() . "tmp/" . $file_name;
				$json["status"] = 'sucess';
				$json["error"] = '';
			}else{
				$json["status"] = 0;
				$json["error"] = "O arquivo nao deve ser maior q 1mb";
			}

		}
		echo json_encode($json);
	}
}
