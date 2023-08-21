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


    public function createproduct($prodname,$prodprice,$userfile){
       $insert_arr =[
         'prod_name'=>$prodname,
         'prod_image'=>$userfile,
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






}
?>
