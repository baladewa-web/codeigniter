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

        //config pagination
        $config['base_url']     = site_url('page/list/');
        $config['total_rows']   = $this->page_model->countAll('usulan');
        $config['per_page']     = 5;
        $data['start']  = $this->uri->segment(3);

        //style pagination
        // $config['first_link']       = 'First';
        // $config['last_link']        = 'Last';
        // $config['next_link']        = 'Next';
        // $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<nav> <ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav>';

        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link']       = 'First';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open']   = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open']   = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        
        $this->pagination->initialize($config);

        $data['usulan'] = $this->page_model->getAllusulan($config['per_page'], $data['start']);

        $this->load->view('page/list', $data);

        // $this->pagination->initialize($config);
        // $data['pagep'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // $data['usulan'] = $this->page_model->getAll($config["per_page"], $data['pagep']);

        // $data['usulan'] = $this->page_model->getAll();
        // $data['pagination'] = $this->pagination->create_links();
        // $this->load->view('page/list', $data);

        // $data['usulan'] = $this->page_model->getAll();
        // $this->load->view('page/list', $data);
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