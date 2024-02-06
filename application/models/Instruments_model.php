<?php

class Instruments_model extends CI_Model{

	//contrutor para acessar o banco de dados
	public function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->table    = 'tb_instruments';
		$this->prefixo  = 'inst_';
		$this->modulo   = 'plataforma';
		$this->pk       = 'id';
	}

	public function listAll() {
        return $this->db->order_by($this->prefixo . $this->pk, "DESC")->get($this->table)->result();
    }

	public function insert($data){
		$this->db->insert("tb_instruments",$data);
	}

	public function update($id, $data){
		$this->db->where("inst_id",$id);
		$this->db->update("tb_instruments", $data);
	}

	public function delete($id){
		$this->db->where("inst_id",$id);
		$this->db->delete("tb_instruments");
	}

	public function is_duplicated($field, $value, $id = NULL){
		if (!empty($id)){
			$this->db->where("inst_id <>", $id);
		}
		$this->db->from("tb_instruments");
		$this->db->where($field, $value);
		return $this->db->get()->num_rows() > 0;
	}
}

?>
