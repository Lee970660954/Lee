<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
    /*杨修平*/
    public function get_by_name($uname){
        $sql = "select * from t_user where username = '$uname'";
        return $this -> db -> query($sql) -> row();
    }

    public function check_login($uname,$pass){
        $sql = "select * from t_user where username = '$uname' and password = '$pass'";
        return $this -> db -> query($sql) -> row();
    }

    public function get_by_login_name($uname){
        $sql = "select * from t_user where username = '$uname'";
        return $this -> db -> query($sql) -> row();
    }
    public function add_user($username,$pass,$num,$email){
        /*$sql = "insert into t_user (username,password,email,mobile) values ('$username','$pass','$email','$num')";*/
        $this -> db -> insert('t_user',array(
            'username'=>$username,
            'password'=>$pass,
            'mobile'=>$num,
            'email'=>$email
        ));
        return $this -> db -> affected_rows();

    }

    public function update_personal($username,$pass,$email,$mobile){
        /*$sql = "update t_user set password = '$pass',email = '$email',mobile = '$moblie' where username = '$username'";*/
        // return $this -> db ->query($sql) -> affected_rows();
        $data = array(
            'username' => $username,
            'password' => $pass,
            'email' => $email,
            'mobile' => $mobile
        );
        $this -> db -> where('username',$username);
        $this -> db -> update('t_user',$data);
        $this -> db -> affected_rows();

    }
    public function get_session($username){
        $sql = "select * from t_user where username = '$username'";
        return $this -> db -> query($sql) -> row();
    }
    public function get_history($user_id){
        $sql = "select * from (t_product p,t_product_img i) join (select * from t_order where user_id = '$user_id')as M on p.prod_id = M.prod_id and i.prod_id = M.prod_id";
        return $this -> db -> query($sql) -> result();
    }
}