<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comment_model extends CI_Model
{
    public function get_comment($user_id){
        $sql = "select a.*,u.username from t_message a,t_user u where a.sender = u.user_id and receiver = $user_id ";
        return $this->db->query($sql)->result();
    }
    public function save_comment($content,$receiver,$sender){
        $this ->db ->insert('t_message',array(
            'content'=>$content,
            'receiver'=>$receiver,
            'sender'=>$sender
        ));
        return $this->db->affected_rows();
    }
    public function delete_msg($msg_id){
        $this->db->delete('t_message',array(
            'msg_id'=>$msg_id
        ));
        return $this->db->affected_rows();
    }
    public function get_journal($user_id){
        $sql = "select * from t_article where user_id = $user_id";
        return $this->db->query($sql)->result();
    }
    public function delete_journal($article_id){
        $this->db->delete('t_article',array(
            'article_id'=>$article_id
        ));
        return $this->db->affected_rows();
    }
    public function save_journal($user_id,$title,$content,$type_id){
        $this ->db ->insert('t_article',array(
            'user_id'=>$user_id,
            'title'=>$title,
            'content'=>$content,
            'type_id'=>$type_id
        ));
        return $this->db->affected_rows();
    }
}