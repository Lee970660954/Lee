<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
    public function index(){
        $this->load->view('index');
    }
    public function login(){
        $this->load->view('login');
    }
    public function regist(){
        $this->load->view('regist');
    }
    public function photowall1(){
        $this->load->view('photowall1');
    }
    public function photowall2(){
        $this->load->view('photowall2');
    }
    public function photowall3(){
        $this->load->view('photowall3');
    }
    public function more(){
        $this->load->view('more');
    }
    public function check_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('user_model');
        $result = $this->user_model->get_by_name_pass($username,$password);
        if($result){
            $this->session->set_userdata('loginedUser',$result);
            redirect('admin/index_logined');
        }else{
            redirect('admin/login');
        }
    }
    public function index_logined(){
        $this->load->view('index_logined');
    }
    public function logout(){
        redirect('admin/index');
    }
    public function do_regist(){
        $username =$this->input->post('username');
        $password =$this->input->post('password');
        $repassword =$this->input->post('repassword');
        $email =$this->input->post('email');
        $this->load->model('user_model');
        $row = $this->user_model->save($username,$password,$repassword,$email);
        if($row){
            redirect('admin/index');
        }else{
            redirect('admin/regist');
        }
    }
    public function check_name(){
        $uname = $this->input->get('uname');
        $this -> load -> model('user_model');
        $result = $this -> user_model -> get_by_name($uname);
        if($result){
            echo 'false';
        }else{
            echo 'true';
        }
    }
}
