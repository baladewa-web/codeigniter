<?php 

class Page_model extends CI_Model {
    
    private $table = 'usulan';

    //validasi form
    public function rules(){
        return [
            [
                'field' => 'tahun',
                'label' => ' ',
                'rules' => 'required|max_length[4]'
            ],
            [
                'field' => 'nama',
                'label' => ' ',
                'rules' => 'required'
            ],
            [
                'field' => 'rt',
                'label' => ' ',
                'rules' => 'required'
            ],
            [
                'field' => 'rw',
                'label' => ' ',
                'rules' => 'required'
            ],
            [
                'field' => 'jumlah',
                'label' => ' ',
                'rules' => 'required'
            ],
            [
                'field' => 'satuan',
                'label' => ' ',
                'rules' => 'required'
            ],
            [
                'field' => 'pagu',
                'label' => ' ',
                'rules' => 'required'
            ],
            [
                'field' => 'realisasi',
                'label' => ' ',
                'rules' => 'required'
            ],
            [
                'field' => 'sisa',
                'label' => ' ',
                'rules' => 'required'
            ],
        ];
    }


    public function getAll(){
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id){
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function save(){
        $data = array(
            "tahun"     => $this->input->post('tahun'),
            "nama"      => $this->input->post('nama'),
            "rt"        => $this->input->post('rt'),
            "rw"        => $this->input->post('rw'),
            "jumlah"    => $this->input->post('jumlah'),
            "satuan"    => $this->input->post('satuan'),
            "pagu"      => $this->input->post('pagu'),
            "realisasi"  => $this->input->post('realisasi'),
            "sisa"      => $this->input->post('sisa')
        );

        return $this->db->insert($this->table, $data);
    }

    public function update(){
        $data = array(
            //"id"        => $this->input->post('id'),
            "tahun"     => $this->input->post('tahun'),
            "nama"      => $this->input->post('nama'),
            "rt"        => $this->input->post('rt'),
            "rw"        => $this->input->post('rw'),
            "jumlah"    => $this->input->post('jumlah'),
            "satuan"    => $this->input->post('satuan'),
            "pagu"      => $this->input->post('pagu'),
            "realisasi"  => $this->input->post('realisasi'),
            "sisa"      => $this->input->post('sisa')
        );

        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }
    
    public function delete($id){
        return $this->db->delete($this->table, array("id" => $id));
    }
}

?>