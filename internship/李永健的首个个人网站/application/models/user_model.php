<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model
{
    public function get_by_name_pass($name,$pass){
        return $this->db->get_where('t_user',array(
            'username'=>$name,
            'password'=>$pass
        ))->row();
    }
    public function save($name,$pass,$email){
        $this -> db -> insert('t_user', array(
            'email' => $email,
            'username' => $name,
            'password' => $pass,
        ));
        return $this -> db -> affected_rows();
    }
    public function get_by_name($uname){
        return $this->db->get_where('t_user',array(
            'username'=>$uname
        ))->row();
    }
}