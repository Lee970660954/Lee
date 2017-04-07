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
    public function journal(){
        $this->load->view('journal');
    }
    public function album(){
        $this->load->view('album');
    }
    public function phrase(){
        $this->load->view('phrase');
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
        $this->session->unset_userdata('loginedUser');
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

    public function get_comment_to_me()
    {
        $user_id = $this->session->userdata('loginedUser')->user_id;
        $this ->load->model('comment_model');
        $results = $this->comment_model->get_comment($user_id);
        if ($results) {
            $this->load->view("phrase", array(
                'results' => $results
            ));
        }else{
            $this->load->view("phrase",array(
                'results'=> null
            ));
        }
    }

    public function save_msg(){
        $content = $this->input->post('content');
        $receiver = $this->input->post('receiver');
        $sender = $this->input->post('sender');
        $this->load->model('comment_model');
        $results = $this->comment_model->save_comment($content,$receiver,$sender);
        if($results){
            redirect('admin/get_comment_to_me');
        }
    }
    public function delete_msg(){
        $msg_id = $this -> input ->get('msg_id');
        $this->load->model('comment_model');
        $row = $this ->comment_model->delete_msg($msg_id);
        if($row > 0){
            redirect('admin/get_comment_to_me');
        }else{
            echo 'fail';
        }
    }

    public function my_journal(){
        $user_id = $this->session->userdata('loginedUser')->user_id;
        $this ->load->model('comment_model');
        $results = $this->comment_model->get_journal($user_id);
        if ($results) {
            $this->load->view("person_journal", array(
                'results' => $results
            ));
        }else{
            $this->load->view("person_journal",array(
                'results'=> null
            ));
        }
//        $this->load->view('person_journal');
    }
    public function delete_journal(){
        $article_id = $this -> input ->get('article_id');
        $this->load->model('comment_model');
        $row = $this ->comment_model->delete_journal($article_id);
        if($row > 0){
            redirect('admin/my_journal');
        }else{
            echo 'fail';
        }
    }
    public function save_journal(){
        $user_id = $this->session->userdata('loginedUser')->user_id;
        $type_id = 1;
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $this->load->model('comment_model');
        $results = $this->comment_model->save_journal($user_id,$title,$content,$type_id);
        if($results){
            redirect('admin/journal');
        }
    }
}
