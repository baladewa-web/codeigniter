<?php 

class Page_model extends CI_Model {
    
    private $table = 'usulan';

    //validasi form
    public function rules(){
        return [
            [
                'field' => 'tahun',
                'label' => 'Tahun',
                'rules' => 'trim|required|numeric|exact_length[4]'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'rt',
                'label' => 'Rt',
                'rules' => 'trim|required|numeric|min_length[1]|max_length[6]'
            ],
            [
                'field' => 'rw',
                'label' => 'Rw',
                'rules' => 'trim|required|numeric|min_length[1]|max_length[6]'
            ],
            [
                'field' => 'jumlah',
                'label' => 'Jumlah',
                'rules' => 'trim|required|numeric'
            ],
            [
                'field' => 'satuan',
                'label' => 'Satuan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'pagu',
                'label' => 'Pagu',
                'rules' => 'trim|required|numeric'
            ],
            [
                'field' => 'realisasi',
                'label' => 'Realisasi',
                'rules' => 'trim|required|numeric'
            ],
            [
                'field' => 'sisa',
                'label' => 'Sisa',
                'rules' => 'trim|required|numeric'
            ]
        ];
    }


    public function getAll(){
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    public function save(){
        $data = array(
            'tahun'     => $this->input->post('tahun'),
            'nama'      => $this->input->post('nama'),
            'rt'        => $this->input->post('rt'),
            'rw'        => $this->input->post('rw'),
            'jumlah'    => $this->input->post('jumlah'),
            'satuan'    => $this->input->post('satuan'),
            'pagu'      => $this->input->post('pagu'),
            'realisai'  => $this->input->post('realisai'),
            'sisa'      => $this->input->post('sisa')
        );

        return $this->db->insert($this->table, $data);
    }
}

?>