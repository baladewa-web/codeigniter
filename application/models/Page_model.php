<?php 

class Page_model extends CI_Model {
    
    public function getAll(){
        $query = $this->db->get('usulan');
        return $query->result();
    }

    public function add(){
        $data = array(
            'tahun'     => $this->input->post('tahun'),
            'usulan'    => $this->input->post('usulan'),
            'rt'        => $this->input->post('rt'),
            'rw'        => $this->input->post('rw'),
            'jumlah'    => $this->input->post('jumlah'),
            'satuan'    => $this->input->post('satuan'),
            'pagu'      => $this->input->post('pagu'),
            'realisai'  => $this->input->post('realisai'),
            'sisa'      => $this->input->post('sisa')
        );

        return $this->db->insert('usulan', $data);
    }
}

?>