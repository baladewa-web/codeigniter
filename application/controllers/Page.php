<?php 

Class Page Extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('page_model'); 
        $this->load->library('form_validation'); 

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login")); 
        }
    }

    public function list(){
        $data['usulan'] = $this->page_model->getAll();
        $this->load->view('page/list', $data);
    }

    public function create(){
        $usulan     = $this->page_model;
        $validation = $this->form_validation;
        $validation->set_rules($usulan->rules());

        if($validation->run()){
            $usulan->save();
            $this->session->set_flashdata('create_alert', 'Berhasil menambah data');
            redirect('page');
        }

        $this->load->view('page/create_form');
    }
}

?>