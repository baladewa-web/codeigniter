<?php 

Class Page Extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('page_model'); 

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login")); 
        }
    }

    public function list(){
        $data['usulan'] = $this->page_model->getAll();
        $this->load->view('page/list', $data);
    }

    public function create(){
        $this->load->view('/page/create_form');
    }

    public function store(){
        $item = new page_model;
        $item = add();

        redirect(base_url('list'));
    }
}

?>