<?php 

class Page_model extends CI_Model {
    
    private $table = 'usulan';

    // public $id;
    // public $tahun;
    // public $nama;
    // public $rt;
    // public $rw;
    // public $jumlah;
    // public $satuan;
    // public $pagu;
    // public $realisasi;
    // public $sisa;

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
        // $post = $this->input->post();
        // $this->tahun        = $post["tahun"];
        // $this->nama         = $post["nama"];
        // $this->rt           = $post["rt"];
        // $this->rw           = $post["rw"];
        // $this->jumlah       = $post["jumlah"];
        // $this->satuan       = $post["satuan"];
        // $this->pagu         = $post["pagu"];
        // $this->realisasi    = $post["realisasi"];
        // $this->sisa         = $post["sisa"];
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
}

?>