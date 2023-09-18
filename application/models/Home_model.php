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


    public function createproduct($prodname,$prodprice,$userfile,$prodDetails,$category){
       $insert_arr =[
         'prod_name'=>$prodname,
         'prod_image'=>$userfile,
         'prod_details'=>$prodDetails,
         'prod_price'=>$prodprice,
         'category'=>$category
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

  public function DeleteItem($data){
    $this->db->where('id',$data);
    return $this->db->delete('customer_cart');
  }
 public function createcart($data){
    return $this->db->insert('customer_cart',$data);
      // $lastid = $this->db->insert_id();
      // return $lastid;
 }

  
 public function GetAllProd($table){
   $query = $this->db->get($table);
   return $query->result();
 }

 public function deleteproduct($table,$urldata){
       $this->db->where('id',$urldata);
       return $this->db->delete($table);
 }
 
 public function getoneproduct($table,$urldata){
     $query = $this->db->get_where($table,array('id'=>$urldata));
     return $query->row();
 }

   public function updateproduct($table,$data,$urldata){
     $this->db->where('id',$urldata);
     return $this->db->update($table,$data);
   
   }
}
?>
