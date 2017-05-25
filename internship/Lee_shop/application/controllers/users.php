<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct(){//加载users_model模块；
        parent::__construct();
        $this -> load -> model('users_model');
        $this -> load -> model('order_model');

    }
    public function regist(){
        $this->load->view('regist');
    }
    public function check_name(){
        $uname = $this -> input -> get('uname');//ajax里的name或者是form里的name
        $row = $this -> users_model -> get_by_name($uname);//传值
        if($row){
            echo "false";
        }else{
            echo "true";
        }
    }
    public function login(){
        $uname = $this -> input -> get('uname');
        $pass = $this -> input -> get('pass');
        $result = $this -> users_model -> check_login($uname,$pass);
        if($result){
            echo "true";
            $this -> session -> set_userdata('loginedUser',$result);
        }else{
            echo "false";
        }

    }

    public function check_login_name(){
        $uname = $this-> input ->get('username');
        $row = $this-> users_model ->get_by_login_name($uname);
        if($row){
            echo "true";
        }else{
            echo "false";
        }
    }
    public function do_reg(){
        $username = $this -> input ->post('username');
        $pass = $this -> input ->post('pass');
        $num = $this -> input ->post('num');
        $email = $this -> input ->post('email');
        $row = $this -> users_model -> add_user($username,$pass,$num,$email);
        if($row > 0){
            redirect('product/index');
        }else{
            echo "false";
        }
        /*如果想改可以用ajax提交表单在弹出弹框成功或者失败，在location.href跳转走，设置setTimeout*/
    }
    public function check_session(){
        $loginedUser = $this -> session -> userdata('loginedUser');
        if($loginedUser){
            echo "true";
        }else{
            echo "false";
        }
    }
    public function clear_session(){
        $this->session->unset_userdata('loginedUser');
        redirect('product/index');
    }
    public function personal(){
        $loginedUser =  $this ->session -> userdata('loginedUser');
        $username = $loginedUser -> username;
        $user_id = $loginedUser -> user_id;
        $result = $this -> users_model -> get_session($username);
        $this->session->unset_userdata('loginedUser');
        $this -> session -> set_userdata('loginedUser',$result);
        $result = $this -> users_model -> get_history($user_id);
        $this -> load ->view('personal',array(
            'results' => $result
        ));
    }
    public function update_personal(){
        $loginedUser = $this ->session -> userdata('loginedUser');
        $username = $loginedUser -> username;
        $email = $this -> input ->post('email');
        $pass = $this -> input ->post('pass');
        $mobile = $this -> input ->post('mobile');
        /*验证*/
        if(empty($email)){
            $email = $loginedUser -> email;
        }
        if(empty($mobile)){
            $mobile = $loginedUser -> mobile;
        }
        if(empty($pass)){
            $pass = $loginedUser -> password;
        }
        $rows = $this -> users_model -> update_personal($username,$pass,$email,$mobile);
        redirect('users/personal');
    }
    /*实现了重定向的同时改变session 记得改变session 的时候需要清除掉，应该做下面的订单详情*/



//    leiwei
    public function confirm(){
        $prod_id=$this->uri->segment(3);
        $row=$this->order_model->get_order_by_id($prod_id);
        if($row){
            $this->load->view('history',array(
                'rows' => $row
            ));
        }else{
            echo 'fail';
        }
    }
    public function delete_order(){
        $order_id = $this->input->get('order_id');
        $row = $this->order_model->delete_order($order_id);
        if($row > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
    public  function  insert_comment(){
        $comment=$this->input->get('comment');
        $prod_id=$this->input->get('prod_id');
        $loginedUser = $this->session->userdata('loginedUser');

        $row = $this->order_model->insert_comment($prod_id,$loginedUser->user_id,$comment);
        if($row>0){
            echo 'success';
        }else{
            echo 'false';
        }
    }
}