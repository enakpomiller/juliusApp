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
            //login as an Admin
           $checkadlinexist = $this->sellers_m->adminlogin($user,$pass);
          if($checkuserExist){
            echo true;
              $data_arr =[
                  'seller_id'=>$checkuserExist->id,
                  'firstname'=>$checkuserExist->firstname,
                  'lastname' =>$checkuserExist->lastname,
                  'username' =>$checkuserExist->username,
                  'userfile' =>$checkuserExist->userfile,
                  'usertype'=>$checkuserExist->type." Seller",
                  'logged_in'=>TRUE
              ];
             $this->session->set_userdata($data_arr);
           
           }elseif($checkadlinexist){
                $data_arr =[
                  'admin_id'=>$checkadlinexist->admin_id,
                  'username'=>$checkadlinexist->username,
                  'usertype'=>$checkadlinexist->username,
                  'userfile'=>('admin_avatar.jpeg'),
                  'admin_logged_in'=>TRUE
                ];
     
             $this->session->set_userdata($data_arr);
            echo true;
           }else{
            echo false;
          }
      }



  public function logout (){
     //session_destroy();
     $this->session->unset_userdata('seller_id');
     $this->session->unset_userdata('firstname');
     $this->session->unset_userdata('lastname');
     $this->session->unset_userdata('username');
    // $this->session->unset_userdata('userfile');
    return redirect(base_url('seller_login'));
    }




  public function myhash($string){
		return hash("sha512", $string . config_item("encryption_key"));
	 }

}