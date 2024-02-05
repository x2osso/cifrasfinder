<?php

class User_model extends CI_Model{

	//contrutor para acessar o banco de dados
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	//para pegar os dados do usuario de dentro do banco
	public function get_user_data($user_login){

		//query pra fazer o get do usuario
		$this->db
			->select("*")
			->from("tb_users")
			->where("user_login", $user_login);
		$result = $this->db->get();

		if($result->num_rows()>0){
			return $result->row();
		}else{
			return NULL;
		}
	}

	public function get_data($id, $select = NULL){
		if(!empty($select)){
			$this->db->select($select);
		}

		$this->db->from("tb_users");
		$this->db->where("user_id",$id);
		return $this->db->get();
	}

	public function insert($data){
		$this->db->insert("tb_users",$data);
	}

	public function update($id, $data){
		$this->db->where("user_id",$id);
		$this->db->update("tb_users", $data);
	}

	public function delete($id){
		$this->db->where("user_id",$id);
		$this->db->delete("tb_users");
	}

	public function is_duplicated($field, $value, $id = NULL){
		if (!empty($id)){
			$this->db->where("user_id <>", $id);
		}
		$this->db->from("tb_users");
		$this->db->where($field, $value);
		return $this->db->get()->num_rows() > 0;
	}

}

?>
