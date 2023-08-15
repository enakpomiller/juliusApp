
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
			parent::__construct();
			$this->load->helper(array('form','text','url'));
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('home_model');
		}


	public function index(){
      $this->data['title'] = " Landing Page";
      $this->data['page_title'] = "home";
	  $this->load->view('layout/index',$this->data);
	}


	public function signup(){
		if($_POST){
		    $this->form_validation->set_rules('firstname','FirstName','required');
			$this->form_validation->set_rules('othernames','Othernames','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
			if($this->form_validation->run()===TRUE){
			   $data =[
				'firstname'=>$this->input->post('firstname'),
				'othernames'=>$this->input->post('othernames'),
				'email'=>$this->input->post('email'),
				'password'=>$this->myhash($this->input->post('password'))
			   ];
			   $insert = $this->home_model->creatcustomer($data);
			   if($insert){
			      $this->session->set_flashdata('success','Customer created successfullly, please Login to start shopping');
				  return redirect(base_url('home/signup'));
			   }else{
			     var_dump("cannot");die;
			   }
			}else{
				$this->data['title'] = "Signup";
				$this->data['page_title'] = "signup";
				$this->load->view('layout/index2',$this->data);
			}
		}else{
			$this->data['title'] = "Signup";
			$this->data['page_title'] = "signup";
			$this->load->view('layout/index2',$this->data);
		}

	}

	public function custlogin(){
	    $this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password'.'Password','required');
		  if($this->form_validation->run()===TRUE){
				$email = $this->input->post('email');
				$pass  = $this->myhash($this->input->post('password'));
				$checkuser = $this->home_model->loginuser($email,$pass);
					if($checkuser){
						echo true;
					}else{
						echo false;
					}
		   }else{
		     return redirect(base_url('home/signup'));
		   }
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



	public function myhash($string){
		return hash("sha512", $string . config_item("encryption_key"));
		}



}
