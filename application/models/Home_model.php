<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php 

class Home_model extends CI_model{

    public function creatcustomer($data){
       $this->db->insert('users',$data);
       $lastid = $this->db->insert_id();
       return $lastid;
    }


}



?>