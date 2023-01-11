<?php 

Class Page Extends CI_Controller{
    function __construct(){
        parent::__construct();
        //$this->load->model('page_model');
    }

    public function list(){
        $this->load->view('page/list');
    }

    public function create(){
        $this->load->view('/page/create_form');
    }
}

?>