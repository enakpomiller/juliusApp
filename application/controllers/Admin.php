<?php defined('BASEPATH') OR exit('No direct script access allowed');?>



<?php
class Admin extends CI_Controller {

    public function __construct(){
     parent::__construct();
     $this->load->database();
     $this->load->helper(array('form','text','url'));
     $this->load->library(array('form_validation','session'));
     $this->load->model('home_model');

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
      if($_POST){
        $prodname = $this->input->post('prodname');
        $prodprice = $this->input->post('prodprice');

        //image upload------------------------------------
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] ='gif|jpg|png|jpeg|GIF|JPEG|PNG|GIF|JPG';
            $config['max_size'] ='3048';
            $config['max_width'] = '80000';
            $config['max_height'] ='60000';
            $this->load->library('upload',$config);
              if(!$this->upload->do_upload()){
                 $errors = array('error'=>$this->upload->display_errors());
                 $userfile = 'noimage.jpg';
              }else{
                 $data = array('upload_data'=>$this->upload->data());
                 $userfile =  $_FILES['userfile']['name'];
                
              }
        // close image upload ---------------------------
        echo true;
        $this->session->set_flashdata('success',' product uploaded successfully');
        $insert = $this->home_model->createproduct($prodname,$prodprice,$userfile );
        return redirect(base_url('admin/create'));
      }else{
        echo false;
        $this->data['title'] = " Create Product ";
        $this->data['page_title'] = "create_prod";
        $this->load->view('layout/index_admin',$this->data);
      }

     }

     public function manage_prod(){
        $this->data['title'] = " Manage Product ";
        $this->data['page_title'] = "manage_prod";
        $this->load->view('layout/index_admin',$this->data);
      }







}
