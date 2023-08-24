<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php

class Home_model extends CI_model{

    public function creatcustomer($data){
       $this->db->insert('users',$data);
       $lastid = $this->db->insert_id();
       return $lastid;
    }

    public function loginuser($email,$pass){
      $query = $this->db->get_where('users',array('email'=>$email,'password'=>$pass));
      return $query->row();
    }

    public function callback_check_email_exists($email){
      $query = $this->db->get_where('users',array('email'=>$email));
      if(empty($query->row_array())){
      return true;
      }else{
       return false;
      }
    }


    public function createproduct($prodname,$prodprice,$userfile,$prodDetails){
       $insert_arr =[
         'prod_name'=>$prodname,
         'prod_image'=>$userfile,
         'prod_details'=>$prodDetails,
         'prod_price'=>$prodprice
        ];
    
        $this->db->insert('product',$insert_arr);
        $insertid = $this->db->insert_id();
        return $insertid;
    }

    public function gellproduct(){
      $query = $this->db->get('product');
      return $query->result();
    }

  public function GetSingleProd($id){
    $query = $this->db->get_where('product',array('id'=>$id));
    return $query->row();
  }

  public function getcustomercart($customerid){
    $query = $this->db->get_where('customer_cart',array('user_id'=>$customerid));
    return $query->result();
  }
 public function createcart($data){
    return $this->db->insert('customer_cart',$data);
      // $lastid = $this->db->insert_id();
      // return $lastid;
 }


}
?>
