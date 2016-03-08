<?php
class Tangankita extends CI_Model{
	public function lihat_editor(){
		$sql = "SELECT editor.id,editor.id_edit,edit.fitur,editor.editor FROM editor LEFT JOIN edit ON edit.id = editor.id_edit";
		return $this->db->query($sql)->result();
	}
	public function lihat_user(){
		$sql = "select id,first_name,email,last_name from users";
		return $this->db->query($sql)->result();
	}
	public function lihat_slider(){
		$sql="SELECT * FROM slider";
		return $this->db->query($sql)->result();
	}
	public function lihat_event(){
		$sql="SELECT * FROM event";
		return $this->db->query($sql)->result();
	}
}
?>