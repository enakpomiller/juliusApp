
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
}
