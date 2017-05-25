<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model{
    public function get_order_by_id($prod_id){
//        $sql="SELECT o.*,p.*,i.* FROM t_order o,t_product p,t_product_img i WHERE o.prod_id = $prod_id and o.prod_id=p.prod_id and o.prod_id=i.prod_id";
        $sql = "select o.*,p.prod_description,i.img_src from t_order o,t_product p,t_product_img i where o.prod_id = $prod_id and p.prod_id = o.prod_id and i.prod_id = o.prod_id";
        return $this->db->query($sql)->row();
    }
    public  function  delete_order($order_id){
        $this -> db -> delete('t_order',array(
            'order_id'=>$order_id
        ));
        return $this->db->affected_rows();
    }
    public  function  insert_comment($prod_id,$user_id,$comment){
        $data = array(
            'user_id'=>$user_id,
            'prod_id'=>$prod_id,
            'comm_content'=>$comment
        );
        $this->db->insert('t_comment',$data);
        return $this->db->affected_rows();
    }

}