
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
			parent::__construct();
			$this->load->helper(array('form','text','url','cookie'));
			$this->load->library('form_validation');
			$this->load->library(array('session'));
            $this->load->library('cart');
            $this->load->helper('cookie');
          //$this->load->library(array('cookie'));
			$this->load->database();
			$this->load->model('home_model');


		}


    	public function index(){
              // set_cookie('cookie_name','cookie_value','3600');
              //set_cookie('cookie_name','firstname','3600');
          $this->data['title'] = " Landing Page";
		      $this->data['allprod'] = $this->home_model->gellproduct();
          $this->data['page_title'] = "home";
    	    $this->load->view('layout/index',$this->data);
    	}

      public function about(){
            $data = array(
                  'id'      => 'sku_123ABC',
                  'qty'     => 2,
                  'price'   => 39.95,
                  'name'    => 'T-Shirt',
                  'options' => array('Size' => 'L', 'Color' => 'Red')
           );
           $cart_data[] = $data;
           $item_data = json_encode($cart_data);
           setcookie('shopping_cart',$item_data, time() + (86400 * 30));
          //$dim =   $this->cart->insert($data);

    	  $this->data['title'] = " About Us";
    	  $this->data['page_title'] = "about";
    	  $this->load->view('layout/index2',$this->data);
    	}

      public function display_cookie(){
        // $this->data['title'] = " About Us";
        // $this->data['displaycookie'] = get_cookie('cookie_name');
        $this->data['page_title'] = "about";
        $this->load->view('layout/index2',$this->data);
      }

      public function delete_cookie(){
        $this->data['getcookie'] = delete_cookie('cookie_name');
        return redirect(base_url('home/about'));
      }


	public function signup(){
		if($_POST){
		    $this->form_validation->set_rules('firstname','FirstName','required');
			$this->form_validation->set_rules('othernames','Othernames','required');
			$this->form_validation->set_rules('email','Email','required|valid_email|callback_check_email_exists');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
			if($this->form_validation->run()===TRUE){
			   $data =[
				'firstname'=>$this->input->post('firstname'),
				'othernames'=>$this->input->post('othernames'),
				'email'=>$this->input->post('email'),
				'password'=>$this->myhash($this->input->post('password'))
			   ];

			   $email = $this->input->post('email');

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

	public function createcart(){
		if($this->session->logged_in){
			$userid = $this->session->userdata('userid');
				$data = [
					'user_id'=>$userid,
					'prod_id'=>$this->input->post('prod_id'),
					'size'=>$this->input->post('size'),
					'color'=>$this->input->post('color'),
					'prod_name'=>$this->input->post('prod_name'),
					'prod_price'=>$this->input->post('prod_price'),
					'qty'=>$this->input->post('quantity'),
					'prod_image'=>$this->input->post('prod_image'),
					'date'=>date("Y-M-Y")
				];
	       $create = $this->home_model->createcart($data);
			if($create){
				 $amt_arr = [
					'cart_id'=>$create,
					'user_id'=>$userid,
					 'total_sum'=>$data['prod_price'] * $data['qty']
				 ];
				 $this->db->insert('tbl_sum_total',$amt_arr);
				 echo true;
				//$this->session->set_flashdata('success',' Item Added To Cart');
			    //return redirect(base_url('home/buyprod/'.$data['prod_id']));
			}else{
				echo false;
			   //echo " cannot create cart ";
			return redirect(site_url('home/custlogin'));
			}
		}else{
			echo 400;
		}



	}

	public function custlogin(){
		if($_POST){
		    $this->form_validation->set_rules('email','Email','required');
		    $this->form_validation->set_rules('password'.'Password','required');
		    if($this->form_validation->run()===TRUE){
				$email = $this->input->post('email');
				$pass  = $this->myhash($this->input->post('password'));
				$checkuser = $this->home_model->loginuser($email,$pass);
					if($checkuser){
						echo true;
						$data =[
							'userid'=>$checkuser->userid,
							'firstname'=>$checkuser->firstname,
							'othernames'=>$checkuser->othernames,
							'email'=>$checkuser->email,
							'logged_in'=>TRUE
						];
						$this->session->set_userdata($data);
					}else{
						echo false;
					}
		   }else{
				$this->data['title'] = " Login";
				$this->data['page_title'] = "custlogin";
				$this->load->view('layout/index2',$this->data);
		   }
		}else{
			$this->data['title'] = " Login";
			$this->data['page_title'] = "custlogin";
			$this->load->view('layout/index2',$this->data);
		}

	 }

	public function store(){
		if($this->session->userdata('logged_in')){
			$this->data['title'] = " Store front";
			$this->data['allprod'] = $this->home_model->gellproduct();
			$this->data['page_title'] = "store";
			$this->load->view('layout/index2',$this->data);
		}else{
		$this->session->set_flashdata('error',' Please Login in order to access the store front ');
		return redirect(base_url('home/custlogin'));
		}

	}

   public function viewcart(){
	  $customerid = $this->session->userid;;
	  $this->data['title'] = " View Your Cart";
		   //$this->data['sumprice'] = $this->home_model->sumprod($customerid);
		$this->data['getcart'] = $this->home_model->getcustomercart($customerid);
		$this->data['sum_total'] = $this->home_model->getsum_total('tbl_sum_total', $customerid);
		$this->data['page_title'] = "viewcart";
		$this->load->view('layout/index2',$this->data);
   }

   public function delete_item($id){
	  $this->data['delete_item'] = $this->home_model->DeleteItem($id);
	  if($this->data['delete_item']){
	     $this->session->set_flashdata('success',' Item deleted successfully');
		return redirect(base_url('home/viewcart/'.$id));
	   }else{
		return redirect(base_url('home/viewcart'));
	  }
   }

    public function checkout(){
        $customerid = $this->session->userid;;
		$this->data['getprod'] = $this->home_model->getproddetails($customerid);
		$this->data['sum_total'] = $this->home_model->getsum_total('tbl_sum_total', $customerid);
		$_SESSION['amount'] = $this->data['sum_total']->sum;
         //echo "<pre>"; print_r($this->data['getprod']);die;
		$this->data['title'] = " Checkout";
		$this->data['page_title'] = "checkout";
		$this->load->view('layout/index2',$this->data);
	}
 
	public function make_payment(){
		$this->data['title'] = " Make Payment";
		$this->data['page_title'] = "make_payment";
		$this->load->view('layout/index2',$this->data);
	}

	public function payment_status(){
		$this->data['title'] = " Payment Status";
		$this->data['page_title'] = "payment_status";
		$this->load->view('layout/index2',$this->data);
	}

	public function create_shipment(){
		$data = [
			'user_id'=> $this->session->userid,
			'fname'=>$this->input->post('fname'),
			'lname'=>$this->input->post('lname'),
			'email'=>$this->input->post('email'),
			'address'=>$this->input->post('address'),
			'country'=>$this->input->post('country'),
			'date_created'=>date("i:sa")
		];
	
		 $_SESSION['timer'] = $data['date_created'];
		 $_SESSION['recipient_email'] = $this->input->post('email');
		 $_SESSION['customer_names'] = $data['fname']." ".$data['lname'];
		$insert_shiping = $this->home_model->createshipping($data);
		if($insert_shiping){
		  echo true;
		}else{
		  echo false;
		}

	  }


	 public function print_invoice(){
		if($this->session->logged_in){
			$user_id = $this->session->userid;
			$this->data['title'] = " Customer's Invoice ";
			$this->data['get_user'] = $this->home_model->get_single_customer($user_id);
			$this->data['cart_details'] = $this->home_model->get_cart_details($user_id);
			
			$this->data['sum_total'] = $this->home_model->getsum_total('tbl_sum_total', $user_id);
			$this->data['getshippings'] = $this->home_model->get_shipping_details($_SESSION['timer']);
			$this->data['page_title'] = "print_invoice";
			$this->load->view('layout/index3',$this->data);
		}else{
		 return redirect(base_url('home/custlogin'));
		}

	  }

	public function contact(){
		$this->data['title'] = " Contact Us";
		$this->data['page_title'] = "contact";
		$this->load->view('layout/index2',$this->data);
	  }


	public function check_email_exists($email){
		$this->form_validation->set_message('check_email_exists','This email  '.$email.'already exist');
		if($this->home_model->callback_check_email_exists($email)){
		   return true;
		}else{
		 return false;
		}
	}

	public function buyprod($id){
		$this->data['title'] = " Buy Product ";
		$this->data['page_title'] = "buyprod";
		$this->data['getsingleprod'] = $this->home_model->GetSingleProd($id);
		$this->load->view('layout/index2',$this->data);
	}


	public function search_product(){
		$query = $this->input->post('search');
		$this->db->like('category',$query);
		$this->data['loadmore'] = $this->db->get('product')->result();
		if($this->data['loadmore']){
			$this->load->view('layout/pages/loadmore',$this->data);
		}else{
			$this->data['error'] = $query ;
			$this->load->view('layout/pages/loadmore',$this->data);
		}
		//echo json_encode($data);
	}

  public function get_search_product($urldata){
        $this->data['title'] = " view product ";
		$this->data['page_title'] = "view_search";
		$this->db->like('category',$urldata);
		$this->data['viewload'] =  $this->db->get('product')->result();
		$this->load->view('layout/index2',$this->data);

      }

   public function logout(){
      session_destroy();
	  redirect(base_url('home'));
    }

	public function myhash($string){
		return hash("sha512", $string . config_item("encryption_key"));
		}



}
