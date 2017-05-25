<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {
    public function get_total_count(){
        $sql = "select prod.*,img.img_src as prod_img from t_product prod,t_product_img img where prod.prod_id = img.prod_id";
        return $this->db->query($sql)->num_rows();
    }
    public function get_products($limit, $offset,$search){
        $sql = "select prod.*,img.img_src as prod_img from t_product prod,t_product_img img where prod.prod_id = img.prod_id limit $offset,$limit";
        if(isset($search['cate_id'])){
            $cateId = $search['cate_id'];
            $sql = "select prod.*,img.img_src as prod_img from t_product prod,t_product_img img where prod.prod_id = img.prod_id and prod.cate_id = $cateId";
        }else if(isset($search['hit'])){
            $hitId = $search['hit'];
            $sql = "select prod.*,img.img_src as prod_img from t_product prod,t_product_img img where prod.prod_id = img.prod_id and prod.hit = $hitId";
        }
        return $this->db->query($sql)->result();
    }

    public function add_cart($productInfo){
        $prod_id = $productInfo['id'];
        $loginedUser = $this -> session -> userdata('loginedUser');
        $user_id =  $loginedUser -> user_id;
        $quantity = $productInfo['quantity'];
        $sql = "select t_cart.quantity from t_cart where t_cart.prod_id = $prod_id and t_cart.user_id = $user_id";
//        $query = $this->db->get_where('t_cart', array('prod_id' => $prod_id, 'user_id' => $user_id));
        $query = $this->db->query($sql)->result();
        if($query){
            return null;
        }else{
            $this ->db ->insert('t_cart',array(
                'prod_id' => $prod_id ,
                'user_id' => $user_id ,
                'quantity' => $quantity
            ));
            return $this->db->affected_rows();
        }
    }

    public function get_cart($user_id){
        $sql = "select prod.*,cart.quantity,img.img_src as prod_img from t_cart cart,t_product_img img,t_product prod where cart.prod_id = prod.prod_id and img.prod_id = prod.prod_id and cart.user_id = $user_id";
        return $this->db->query($sql)->result();
    }


    public function get_products_by_user($user_id){
        $sql = "select prod.*,cart.quantity,img.img_src as prod_img from t_cart cart,t_product_img img,t_product prod where cart.prod_id = prod.prod_id and img.prod_id = prod.prod_id and cart.user_id = $user_id";
        return $this->db->query($sql)->result();
    }
    public function get_detail($id){
        $sql = " select u.*,p.*,i.*,c.* from t_product p,t_comment c,t_product_img i,t_user u where
 p.prod_id = '$id' and  p.prod_id = i.prod_id and  p.prod_id =  c.prod_id and u.user_id = c.user_id";
        return $this -> db ->query($sql) -> result();
    }
    public function  get_this_detail($id){
        $sql = "select p.* ,i.img_src from t_product p,t_product_img i where p.prod_id = '$id' and i.prod_id = '$id'";
        return $this -> db -> query($sql) -> row();
    }
}