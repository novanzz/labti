<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Artikel extends CI_Model {

	public function getArtikel(){
		$query = $this->db->get('post');
		return $query->result();
	}

	public function postArtikel($data){
		return $this->db->insert('post',$data);
	}

	public function deleteArtikel($no){
		$this->db->where('no', $no);
		$this->db->delete('post');
		if($this->db->affected_rows() >=0){
		  return true; 
		}else{
		  return false; 
		}
	}

	public function updateArtikel($no,$data){
		$this->db->where('no', $no);
		$this->db->update('post',$data);
		if($this->db->affected_rows() >=0){
		  return true; 
		}else{
		  return false; 
		}
	}

		public function selectArtikelbyId($id){
		$this->db->where('no', $id);
		$query = $this->db->get('post');
		return $query->row();
	}
	

}