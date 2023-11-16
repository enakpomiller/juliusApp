<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 
 
 class Sellers_m extends CI_model{

   private $table = "tbl_sellers_products";
  

   public function checkuserExist($user,$pass){
      $this->db->where('username',$user);
      $this->db->where('password',$pass);
      $this->db->from("tbl_sellers");
      $query = $this->db->get();
      return $query->row();
   }

   public function sellerdetails($data){
       $this->db->insert($this->table,$data);
       $last_id = $this->db->insert_id();
       return $last_id;
   }
  
   public function insert_multiple_files($data = array()){
    // $insert = $this->db->insert_batch('seller_prod',$data);
    $insert = $this->db->insert_batch('tbl_products',$data);
    return $insert?true:false;
}


// public function get_all_sellers_prod(){ 
//   $this->db->select('*');
//   $this->db->from('tbl_sellers_products');
//   $this->db->join('tbl_products','tbl_sellers_products.seller_id = tbl_products.seller_id','left');
//   $query = $this->db->get();
//   return $query->result();

// }

public function get_all_sellers_prod(){ 
  $this->db->select('*');
  $this->db->from('tbl_sellers_products');
  $this->db->where('seller_id',$this->session->seller_id);
  $query = $this->db->get();
  return $query->result();

}
public function get_prod_images(){ 
  $this->db->select('*');
  $this->db->from('tbl_products');
  $this->db->where('seller_id',$this->session->seller_id);
  $query = $this->db->get();
  return $query->result();

}

public function get_singlerec($data){
  $query = $this->db->get_where($this->table,array('sell_prod_id'=>$data));
  return $query->row();
 }




 }