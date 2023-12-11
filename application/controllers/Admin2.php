<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<?php 
 class Admin2 extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','text','url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('home_model');
   
       }


      public function index(){
          if($this->session->logged_in){
              $this->data['title'] = " Dashboard ";
              $this->data['page_name'] = "dashboard";
              $this->load->view('layout/index_admin2',$this->data);
          }else{
            return redirect(base_url('seller_login'));
          }
       
       }
   
 
}