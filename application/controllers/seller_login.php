<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>

<?php 

class Seller_login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','text','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('sellers_m');
      } 

    public function index(){
       $this->data['title'] = " Login As Seller ";
       $this->load->view('layout/sellers/sellers_login');
      
     }
    
     public function loginseller(){
          $user = $this->input->post('user');
          $pass = $this->myhash($this->input->post('pass'));
          $checkuserExist = $this->sellers_m->checkuserExist($user,$pass);
          if($checkuserExist){
            echo true;
             $data_arr =[
                'seller_id'=>$checkuserExist->id,
                'firstname'=>$checkuserExist->firstname,
                'lastname' =>$checkuserExist->lastname,
                'usertype'=>$checkuserExist->type." Seller",
                'logged_in'=>TRUE
             ];
             $this->session->set_userdata($data_arr);
           
           }else{
            echo false;
           }
      }



  public function logout (){
     session_destroy();
    return redirect(base_url('seller_login'));
    }


  public function myhash($string){
		return hash("sha512", $string . config_item("encryption_key"));
	 }

}