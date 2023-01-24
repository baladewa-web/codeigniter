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

    public function search(){
        $keyword        = $this->input->post('keyword',);
        $data['usulan'] = $this->page_model->getKeyword($keyword);
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