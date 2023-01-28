<?php 

Class Page Extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('page_model'); 
        $this->load->library('form_validation'); 
        $this->load->library('pagination'); 

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login")); 
        }
    }

    public function list(){
        
        //get keyword
        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword'); 
            $this->session->set_userdata('keyword', $data['keyword']);
        }

        else{
            $data['keyword'] = $this->session->userdata('keyword');
        }


        //config pagination
        $this->db->like('tahun', $data['keyword']);
        $this->db->or_like('nama', $data['keyword']);
        // $this->db->form('usulan');
        $config['total_rows']   = $this->db->count_all_results('usulan');
        // $config['total_rows']   = $this->page_model->countAll('usulan');
        $data['total_rows']   =  $config['total_rows'];
        $config['per_page']     = 7; 
        $data['start']  = $this->uri->segment(3);
       
        $this->pagination->initialize($config);

        $data['usulan'] = $this->page_model->getAllusulan($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('page/list', $data);
    }

    public function create(){
        $usulan     = $this->page_model;
        $validation = $this->form_validation;
        $validation->set_rules($usulan->rules());

        if($validation->run()){
            $usulan->save();
            $this->session->set_flashdata('create_alert', 'Berhasil menambah data');
            redirect(base_url('page/list'));
        }

        $this->load->view('page/create_form');
    }

    public function view($id){
        $usulan     = $this->page_model;
        $data["usulan"] = $usulan->getById($id);
        $this->load->view('page/view_form', $data);
    }

    public function edit($id = null){
        if(!isset($id)) redirect('page/list');

        $usulan     = $this->page_model;
        $validation = $this->form_validation;
        $validation->set_rules($usulan->rules());

        if ($validation->run()){
            $usulan->update();
            $this->session->set_flashdata('edit_alert','Berhasil mengubah data!');
            redirect('page/list');
        }

        $data["usulan"] = $usulan->getById($id);
        if (!$data["usulan"]) show_404();

        $this->load->view('page/edit_form', $data);
    }

    public function delete($id = null){
        if (!isset($id)) show_404();

        if ($this->page_model->delete($id)){
            $this->session->set_flashdata('delete_alert','Berhasil menghapus data');
            redirect(site_url('page/list'));
        }
        
    }
}

?>