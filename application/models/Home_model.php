<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php

class Home_model extends CI_model{
    private $table = 'customer_cart';

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

  public function GetSinglesellersProd($id){
    $query = $this->db->get_where('tbl_products',array('prod_id'=>$id));
    return $query->row();
  }

  public function getcustomercart($customerid){
         $query = $this->db->get_where('customer_cart',array('user_id'=>$customerid));
         return $query->result();
  }

  public function get_temp_customercart($customerid){
    $query = $this->db->get_where('customer_cart_copy1',array('user_id'=>$customerid));
    return $query->result();
   }


  // public function sumprod ($customerid){
  //      $this->db->select('sum(prod_price) as price');
  //      $this->db->from('customer_cart');
  //      $this->db->where('user_id',$customerid);
  //      $query = $this->db->get();
  //      return $query->result();
  // }

 public function DeleteItem($data){
      $this->db->where('id',$data);
      $del =  $this->db->delete('customer_cart');
      if($del){
        $this->db->where('cart_id',$data);
        return $this->db->delete('tbl_sum_total');
      }
    }

   public function Delete_tempt_Item($data){
      $this->db->where('id',$data);
      $del =  $this->db->delete('customer_cart_copy1');
      if($del){
        $this->db->where('cart_id',$data);
        return $this->db->delete('tbl_sum_total_copy1');
      }
    }

  public function createcart($data){
        $this->db->insert('customer_cart',$data);
        $lastid = $this->db->insert_id();
        return $lastid;
  }
 
  public function create_temporal_cart($data){
    $this->db->insert('customer_cart_copy1',$data);
    $lastid = $this->db->insert_id();
    return $lastid;
  }

  public function GetAllProd($table){
    $query = $this->db->get($table);
    return $query->result();
  }

  public function getsum_total($table,$data){
    //$this->db->select_sum('total_sum');
    $this->db->select('id,user_id, SUM(total_sum) as sum');
    $this->db->from($table);
    $this->db->where('user_id',$data);
    $query = $this->db->get();
    return $query->row();
  }

  public function get_tempt_sum_total ($table,$data){
    //$this->db->select_sum('total_sum');
    $this->db->select('id,user_id, SUM(total_sum) as sum');
    $this->db->from($table);
    $this->db->where('user_id',$data);
    $query = $this->db->get();
    return $query->row();
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

   public function getproddetails($data){
    $query = $this->db->get_where($this->table,array('user_id'=>$data));
    return $query->result_array();
   }

  public function createshipping($data){
    return $this->db->insert('tbl_shipping',$data);
   }

  public function get_shipping_details($get_timer){
    $query  = $this->db->get_where('tbl_shipping',array('date_created'=>$get_timer));
    return $query->row();
  }
 
  public function get_single_customer($data){
   $query = $this->db->get_where('users',array('userid'=>$data));
   return $query->row();
  }

  public function get_cart_details($data){
     $query = $this->db->get_where('customer_cart',array('user_id'=>$data));
     return $query->result();

  }

  public function get_prod_by_location($data){
     $query = $this->db->get_where('tbl_products',array('location'=>$data));
     return $query->result();
  }

  public function insert_audit($audit){
    $this->db->insert('tbl_audit',$audit);
    $last_id = $this->db->insert_id();
    return $last_id;
   }

   public function chart_toseller($data_chart){
      return  $this->db->insert('tbl_chart',$data_chart);

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

   public function insert_number_of_views($table,$data){
      $this->db->insert($table,$data);
      $last_id = $this->db->insert_id();
      return $last_id;
   }

   public function update_count_views($place_count,$id){
        $this->db->where('prod_id',$id);
        $data =['count_views'=>$place_count];
        return $this->db->update('tbl_number_of_views',$data);
    }

  public function updatelikes($getprod_id,$place_likes){
      $data = ['number_like'=>$place_likes];
      $this->db->where('prod_id',$getprod_id);
      return $this->db->update('tbl_likes',$data);
  }

   public function get_recent_views($userid,$id){
      $this->db->select('id,prod_name,prod_image,prod_price,tbl_recent_views.prod_id as product_id ');
      $this->db->from('product');
      $this->db->join('tbl_recent_views','product.id = tbl_recent_views.prod_id','right');
      $this->db->where('tbl_recent_views.user_id',$userid);
       //$this->db->where('tbl_recent_views.prod_id',$id);
      $query = $this->db->get();
      return $query->result();
    }

    public function update_recent_views($id,$userid){
        $data1 =['prod_id'=>$id];
        $this->db->where('prod_id',$id);
        $this->db->where('user_id',$userid);
        return $this->db->update('tbl_recent_views',$data1);
    }

    public function delete_prod_with_zeros($id){
      $this->db->where('prod_id','0');
      return $this->db->delete('tbl_recent_views');
    }

    public function search_similar_products($data){
        $query = $this->db->get_where('product',array('id'=>$data));
        return $query->row()->category;
    }

      // public function productlistwithID($where){
      //   $this->db->select('*');
      //   $this->db->where($where);
      //   $qry = $this->db->get('product');
      //   return $qry->result();
      
      // }
}
?>
