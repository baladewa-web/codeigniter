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
        // $config['total_rows']   = $this->db->count_all('usulan');
        $config['total_rows']   = $this->page_model->getCount();
        $config['per_page']     = 10;
        $config['uri_segment']  = 3;

        $this->pagination->initialize($config);

        // $page = ($this->uri->segment(3)) ?  $this->uri->segment(3) : 0;
        
        // $data["links"] = $this->pagination->create_links();

        $data['usulan'] = $this->page_model->getAll($config["per_page"], $config["uri_segment"]);

        $this->load->view('page/list', $data);

        //style pagination
        // $config['first_link']       = 'First';
        // $config['last_link']        = 'Last';
        // $config['next_link']        = 'Next';
        // $config['prev_link']        = 'Prev';
        // $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        // $config['full_tag_close']   = '</ul></nav></div>';
        // $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        // $config['num_tag_close']    = '</span></li>';
        // $config['cur_tag_close']    = '<li class="page-item" active><span class="page-link">';
        // $config['cur_tag_close']    = '</span></li>';
        // $config['next_tag_close']   = '<li class="page-item"><span class="page-link">';
        // $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        // $config['prev_tag_close']   = '<li class="page-item"><span class="page-link">';
        // $config['prev_tagl_close']  = '</span></li>';
        // $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        // $config['first_tagl_close'] = '</span></li>';
        // $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        // $config['last_tagl_close']  = '</span></li>';

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