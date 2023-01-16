<?php 

class Page_model extends CI_Model {
    
    public function getAll(){
        $query = $this->db->get('usulan');
        return $query->result();
    }
}

?>