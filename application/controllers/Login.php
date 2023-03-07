<?php 

Class Login extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    
    public function index(){
        $this->load->view('login/index');
    }

    public function register(){
        $this->load->view('login/register');
 
    }

    function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $where = array(
            'username' => $username,
            'password' => $password
       );
       
       $login_user = $this->login_model->cek_login("user", $where)->num_rows();
       if($login_user > 0){
            $data_session = array(
                'name'  => $username,
                'status'    => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("dashboard/index"));
       }else{
        $this->session->set_flashdata('error_login', 'username atau password salah !!');
        redirect(base_url('login'));
       }

    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}

?>