<?php defined('BASEPATH') OR exit('No direct script access allowed');?>



<?php 
class Admin extends CI_Controller {

    public function __construct(){
     parent::__construct();
     $this->load->helper(array('form','text','url'));
    }
    
    public function index(){
         $this->data['title'] = "dashboard";
         //$this->data['page_title'] ="dashboard";
         $this->load->view('layout/index_admin');
    }

    public function dashboard(){
        $this->data['title'] = "dashboard";
        $this->data['page_title'] ="dashboard";
        $this->load->view('layout/index_admin',$this->data);
    }

    public function create(){
       $this->data['title'] = " Create Product ";
       $this->data['page_title'] = "create_prod";
       $this->load->view('layout/index_admin',$this->data); 
     }
    

}