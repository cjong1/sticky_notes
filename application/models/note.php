<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model {

     public function get_all()
     {
         return $this->db->query("SELECT * FROM notes")->result_array();
     }

     public function create($new_note) {
     	$query = "INSERT INTO notes (title, created_at) VALUES(?, NOW())";
     	$values = array($new_note['titles']);
     	return $this->db->query($query, $values);
     }

     public function destroy($id)
     {
		$query = "DELETE FROM notes where id = ?";
		$values = array($id);
		return $this->db->query($query, $values);
	}

     public function update($id)
     {
          // if($this->input->post('titles'))
          // {
               $query='UPDATE notes SET description=? WHERE id=?';
               $values = array($id['description'], $id['id']);
               $this->db->query($query, $values);
          // }
     }

}