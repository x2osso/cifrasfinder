
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->library("session");
		$this->load->model("Instruments_model", "instrumentos");
	}

	public function index()
	{
		$data = [];
		$data['row'] = $this->instrumentos->listAll();

		$this->template->show('cadastrar',$data);
	}

	public function cadUser(){
		$data = [];

		$data['user_name'] = $this->users->


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
}
