
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
			parent::__construct();
			$this->load->helper(array('form','text','url'));
		}


	public function index(){
      $this->data['title'] = " Landing Page";
      $this->data['page_title'] = "home";
	  $this->load->view('layout/index',$this->data);
	}


	public function signup(){
	  $this->data['title'] = "Signup";
	  $this->data['page_title'] = "signup";
	  $this->load->view('layout/index2',$this->data);
	}

	public function store(){
	  $this->data['title'] = " Store front";
	  $this->data['page_title'] = "store";
	  $this->load->view('layout/index2',$this->data);
	}

	public function about(){
	  $this->data['title'] = " About Us";
	  $this->data['page_title'] = "about";
	  $this->load->view('layout/index2',$this->data);
	}

	public function contact(){
		$this->data['title'] = " Contact Us";
		$this->data['page_title'] = "contact";
		$this->load->view('layout/index2',$this->data);
	  }




}
