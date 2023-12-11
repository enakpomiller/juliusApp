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

public function create_sellers($fname,$lname,$uname,$type,$pass,$userfile){
     $data_arr = [
        'firstname'=>$fname,
        'lastname'=>$lname,
        'username'=>$uname,
        'type'=>$type,
        'password'=>$pass,
        'userfile'=>$userfile
     ];
     return  $this->db->insert('tbl_sellers',$data_arr);
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

public function updatesellers_products($sell_prod_id ,$prodname,$prodprice,$userfile){
    $data_arr =[
        'prod_name'=>$prodname,
        'prod_price'=>$prodprice,
      ];
      $this->db->where('sell_prod_id',$sell_prod_id);
      $update =  $this->db->update($this->table,$data_arr);
      if($update){
         $data = array('file_name'=>json_encode($userfile));
        $this->db->where('prod_id',$sell_prod_id);
        return   $this->db->update('tbl_products',$data);
      }
 
}


 public function deletesellersProducts($data){
      $this->db->where('sell_prod_id',$data);
      $dle = $this->db->delete($this->table);
      if($dle){
        $this->db->where('prod_id',$data);
        return  $this->db->delete('tbl_products');
      }

 }

 public function getsellersprofile($userid){
     $query = $this->db->get_where('tbl_sellers',array('id'=>$userid));
     return $query->row();
  
}

 public function sellers_location($userid){
    $query = $this->db->get_where('tbl_products',array('seller_id'=>$userid));
    return $query->row();
 }

public function getsales($data){
    $this->db->select('userid,firstname,othernames, email');
    $this->db->select('id,user_id,prod_name,prod_price,size,color,qty,date,prod_image');
    $this->db->from('users');
    $this->db->join('customer_cart','customer_cart.user_id = users.userid');
    $this->db->where('customer_cart.seller_id',$data);
    $query = $this->db->get();
    return $query->result();


}

public function getproducttotal($data){
     $this->db->select('id,SUM(prod_price) as total_price');
     $this->db->select('id,SUM(qty) as quantity');
     $this->db->from('customer_cart');
     $this->db->where('seller_id',$data);
     $query = $this->db->get();
     return $query->result();
}

public function adminlogin($user,$pass){
   $query = $this->db->get_where('tbl_admin',array('username'=>$user,'password'=>$pass));
   return $query->row();

}

public function getchars($userid,$seller_id){
      //$this->db->limit(20);
      $this->db->order_by('chart_id','ASC');
      $this->db->where('buyer_id',$userid);
      $this->db->where('seller_id',$seller_id);
      //$this->db->where('prod_id >','0');
      $this->db->from('tbl_chart');
      $query = $this->db->get();
      return $query->result();
}

public function getfeedback($userid,$seller_id){
      $this->db->order_by('chart_id','ASC');
      $this->db->where('buyer_id',$userid);
      $this->db->where('seller_id',$seller_id);
      $this->db->where('prod_id','0');
      $this->db->from('tbl_chart');
      $query = $this->db->get();
      return $query->result();
 }

 }