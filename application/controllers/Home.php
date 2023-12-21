
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
					$userfile = $_FILES['userfile']['name'];
	
				}
		   //close image upload ---------------------------
			   $data =[
				'firstname'=>$this->input->post('firstname'),
				'othernames'=>$this->input->post('othernames'),
				'email'=>$this->input->post('email'),
				'userfile'=>$userfile,
				'password'=>$this->myhash($this->input->post('password'))
			   ];
               
			   $email = $this->input->post('email');
                 //echo "<pre>"; print_r($data);die;
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
		if($_POST){
			if($this->session->looged_in){ 
				$userid = $this->session->userdata('userid');
					$data = array(
						'user_id'=>$userid,
						'prod_id'=>$this->input->post('prod_id'),
						'size'=>$this->input->post('size'),
						'color'=>$this->input->post('color'),
						'prod_name'=>$this->input->post('prod_name'),
						'prod_price'=>$this->input->post('prod_price'),
						'qty'=>$this->input->post('quantity'),
						'prod_image'=>$this->input->post('prod_image'),
						'date'=>date("Y-M-Y")
					);

					// set cookie 
							// $arrayData=array(
							// 	'user_id'=>$userid,
							// 	'prod_id'=>$this->input->post('prod_id'),
							// 	'size'=>$this->input->post('size'),
							// 	'color'=>$this->input->post('color'),
							// 	'prod_name'=>$this->input->post('prod_name'),
							// 	'prod_price'=>$this->input->post('prod_price'),
							// 	'qty'=>$this->input->post('quantity'),
							// 	'prod_image'=>$this->input->post('prod_image'),
							// 	'date'=>date("Y-M-Y")  
							// );
							// setcookie('cookieData', json_encode($arrayData), time()+3600);// set time for 1 hour [1 hour=3600 seconds]
							// $arrayData = json_decode($_COOKIE['cookieData']);
					// end cookie

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
			
				 $is_timer_id_exist = $this->db->get_where('customer_cart_copy1',array('user_id'=>$_SESSION['get_time_as_id'] ))->row();
				 $exist_prod  = $this->db->get_where('customer_cart_copy1',array('prod_id'=>$this->input->post('prod_id') ))->row();

				 if($exist_prod){
					echo "400";
				    //return redirect(base_url('home/buyprod/'.$this->input->post('prod_id')));
				  }else{
					if($is_timer_id_exist){
					    $data = array(
							'user_id'=>$_SESSION['get_time_as_id'],
							'prod_id'=>$this->input->post('prod_id'),
							'size'=>$this->input->post('size'),
							'color'=>$this->input->post('color'),
							'prod_name'=>$this->input->post('prod_name'),
							'prod_price'=>$this->input->post('prod_price'),
							'qty'=>$this->input->post('quantity'),
							'prod_image'=>$this->input->post('prod_image'),
							'date'=>date("Y-M-Y")
					    );
					   $insert_temp_cart = $this->home_model->create_temporal_cart($data);
					      if($insert_temp_cart){
								$amt_arr = [
									'cart_id'=>$insert_temp_cart,
									'user_id'=>$is_timer_id_exist->user_id,
									'total_sum'=>$data['prod_price'] * $data['qty']
								];
								$this->db->insert('tbl_sum_total_copy1',$amt_arr);
								echo true;
					        }
				
				   }else{
						$data = array(
							'user_id'=>date('sa'),
							'prod_id'=>$this->input->post('prod_id'),
							'size'=>$this->input->post('size'),
							'color'=>$this->input->post('color'),
							'prod_name'=>$this->input->post('prod_name'),
							'prod_price'=>$this->input->post('prod_price'),
							'qty'=>$this->input->post('quantity'),
							'prod_image'=>$this->input->post('prod_image'),
							'date'=>date("Y-M-Y")
						);
				       $last_cart_id =  $this->home_model->create_temporal_cart($data);
				      if($last_cart_id){
						$amt_arr = [
							'cart_id'=>$insert_temp_cart,
							'user_id'=>$is_timer_id_exist->user_id,
							'total_sum'=>$data['prod_price'] * $data['qty']
						];
						$this->db->insert('tbl_sum_total_copy1',$amt_arr);
						echo true;
				       }
				      $time_id = $this->db->get_where('customer_cart_copy1',array('id'=>$last_cart_id ))->row()->user_id;
				      $_SESSION['get_time_as_id']=$time_id;
				      echo true;
				  }
				   }

		
				   
			
		    }

		}else{
			echo 400;
		}

	}
    

	public function buy_from_seller(){
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
					'date'=>date("Y-M-Y"),
					'seller_id'=>$this->input->post('seller_id')
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


	 public function seller_buy(){
		$userid = $this->session->userid;
		$seller_id = $this->session->seller_id;
		
				// $cookie_name = $this->session->firstname;
				// $cookie_value = "John Doe";
				// setcookie($cookie_name, $cookie_value, time() + (5 * 5), "/"); // for 20 miniuts
				// if(!isset($_COOKIE[$cookie_name])) {
				// 	echo "Cookie named '" . $cookie_name . "' is not set!";
				//   } else {
				// 	echo "Cookie '" . $cookie_name . "' is set!<br>";
				// 	echo "Value is: " . $_COOKIE[$cookie_name];
				//   }

		
		$this->data['getchart'] = $this->home_model->getchars($userid,$seller_id);
	//  echo "<pre>"; print_r($this->data['getchart']);die;
		$prod_id  = $this->uri->segment(3);
		$this->data['title'] = " Buy Product ";
		$this->data['page_title'] = "seller_buy";
		$this->data['getsingleprod'] = $this->home_model->GetSinglesellersProd($prod_id);
		//$id  = $this->data['getsingleprod']->prod_id;

		$this->load->view('layout/index2',$this->data);
	}

   public function chart_with_seller(){
	   if($_POST){
			$data_chart = [
				'seller_id'=>$this->input->post('seller_id'),
				'buyer_id' => $this->input->post('user_id'),
				'prod_id' => $this->input->post('prod_id'),
				'coment' => $this->input->post('comment'),
				'date_time'=>date('H:I:SA')
			];
			$insert_chart =  $this->home_model->chart_toseller($data_chart);
			if($insert_chart){
			  echo true;
			}else{
			  echo false;
			}

	    }else{
			$prod_id  = $this->uri->segment(3);
			$userid = $this->session->userid;
			$seller_id = $this->session->seller_id;
			$this->data['getchart'] = $this->home_model->getchars($userid,$seller_id);

	    }

    }


	public function seller_buy_login($id){
		if($_POST){
		    $this->form_validation->set_rules('email','Email','required');
		    $this->form_validation->set_rules('password'.'Password','required');
		    if($this->form_validation->run()===TRUE){
				$email = $this->input->post('email');
				$pass  = $this->myhash($this->input->post('password'));
				$checkuser = $this->home_model->loginuser($email,$pass);
					if($checkuser){
						$data =[
							'userid'=>$checkuser->userid,
							'firstname'=>$checkuser->firstname,
							'othernames'=>$checkuser->othernames,
							'email'=>$checkuser->email,
							'logged_in'=>TRUE
						 ];
						 $this->session->set_userdata($data);
						 $this->session->set_userdata('fname',$data['firstname']);
				
						 return redirect(base_url('home/seller_buy/'.$id ));
					}else{
					   $this->session->set_flashdata('msg_error','Incorrect Username or Password ');
					   return redirect(base_url('home/seller_buy_login/'.$id));
					}
		   }else{
				$this->data['title'] = " Login";
				$this->data['page_title'] = "seller_buy_login";
				$this->load->view('layout/index2',$this->data);
		   }
		}else{
			$this->data['msg_notice'] = " Please login or create an account to start with seller on a product ";
			$this->data['title'] = " Login";
			$this->data['page_title'] = "seller_buy_login";
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

		   // set cookie 
					// if(array_key_exists('cartitems',$_COOKIE)){
					// $cookie_get = get_cookie('cartitems');
					// $cookieres = unserialize($cookie_get);
					// $productids = implode("','",$cookieres);
					// 	//get product details 
					// 		$where = "id ('$productids')";
					// 		$resentcartvies = $this->home_model->productlistwithID($where);
					
					// 		echo " cookie is set ".$res ;
					// }else{
					// echo " NOT SET  ";
					// }
		  // end cooki

		  if(!$this->session->logged_in){
			 $this->data['title'] = " View Your Cart";
			 //$this->data['sumprice'] = $this->home_model->sumprod($customerid);
			 $this->data['getcart'] = $this->home_model->get_temp_customercart($_SESSION['get_time_as_id']);
			 $this->data['sum_total'] = $this->home_model->get_tempt_sum_total('tbl_sum_total_copy1',$_SESSION['get_time_as_id']);
			 $this->data['page_title'] = "viewcart";
			 $this->load->view('layout/index2',$this->data);
		   }else{
			$customerid = $this->session->userid;;
			$this->data['title'] = " View Your Cart";
	
			//$this->data['sumprice'] = $this->home_model->sumprod($customerid);
			$this->data['getcart'] = $this->home_model->getcustomercart($customerid);
			// echo "<pre>"; print_r($this->data['getcart']);die;
			$this->data['sum_total'] = $this->home_model->getsum_total('tbl_sum_total', $customerid);
	
			$this->data['page_title'] = "viewcart";
			$this->load->view('layout/index2',$this->data);
		 
		   }
	  
	
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

   public function delete_tempt_item($id){
	$this->data['delete_item'] = $this->home_model->Delete_tempt_Item($id);
	if($this->data['delete_item']){
	   $this->session->set_flashdata('msg_delete',' Item deleted successfully');
	  return redirect(base_url('home/viewcart/'.$id));
	 }else{
	  return redirect(base_url('home/viewcart'));
	}
 }

    public function checkout(){
		if(!$this->session->logged_in){
		  return redirect(base_url('home/custlogin'));
		}else{
			$customerid = $this->session->userid;;
			$this->data['getprod'] = $this->home_model->getproddetails($customerid);
			$this->data['sum_total'] = $this->home_model->getsum_total('tbl_sum_total', $customerid);
			$_SESSION['amount'] = $this->data['sum_total']->sum;
			 //echo "<pre>"; print_r($this->data['getprod']);die;
			$this->data['title'] = " Checkout";
			$this->data['page_title'] = "checkout";
			$this->load->view('layout/index2',$this->data);
		}
  
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

    public function get_location(){
        $location = $this->input->post('get_location');
         $find_location =  $this->db->get_where('tbl_products',array('location'=>$location))->row()->location;
         if($find_location){
            echo true;
         }else{
          echo false;
        }

     }

   public function search_location($location){
		$this->data['title'] = " Contact Us";
		$this->data['get_prodby_location'] = $this->home_model->get_prod_by_location($location);
		$this->data['page_title'] = "load_location";
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
		 if(isset($id)){
	         $counter =1;
				$insert_views =[
					'count_views'=>$counter++,
					'prod_id'=>$prod_id = $this->home_model->GetSingleProd($id)->id
				];
				$getviews = $this->db->get_where('tbl_number_of_views',array('prod_id'=>$id))->row()->count_views;
		     if($getviews){
				  $place_count = 1 + $getviews;
			      $this->home_model->update_count_views($place_count,$id);
			  }else{
				$this->home_model->insert_number_of_views('tbl_number_of_views',$insert_views);
			  }
			 
		}

    if($this->session->logged_in){
		$userid = $this->session->userid;
	      $data_recent =[
			'prod_id' =>$id,
			'user_id'=>$userid
		   ];
		   $prod_id_exist = $this->db->get_where('tbl_recent_views',array('prod_id'=>$id,'user_id'=>$userid))->row();

		   if($prod_id_exist ){
			    $this->home_model->update_recent_views($id,$userid);
			     // delete products with zero id
				$this->home_model->delete_prod_with_zeros($id);
		     }else{
			    $this->db->insert('tbl_recent_views',$data_recent);
			 }

			$this->data['title'] = " Buy Product ";
		    $this->data['page_title'] = "buyprod";
			// search similar products by category
			$getcategory = $this->home_model->search_similar_products($id);
			$this->db->like('category',$getcategory);
			$this->data['getsimilar_prod'] = $this->db->get('product')->result();
			
		    $this->data['num_views']  = $this->db->get_where('tbl_number_of_views',array('prod_id'=>$id))->row()->count_views;

			$this->data['recent_views']  = $this->home_model->get_recent_views($userid,$id);
			   //echo "<pre>"; print_r($this->data['recent_views'] );die;
		    $this->data['getsingleprod'] = $this->home_model->GetSingleProd($id);
		    $this->load->view('layout/index2',$this->data);
			
	 }elseif(!$this->session->logged_in){
		// update the cookie
				// if(array_key_exists('cartitems',$_COOKIE)){
				// // already set then get cookie 
				// $cookie_get = get_cookie('cartitems');
				// $cookieres = unserialize($cookie_get);
				// // check if product already present
				// 	if(in_array($id,$cookieres)){
				// 		$cookieres[] = $id;
				// 		}
				// 		delete_cookie('cartitems');
				// 		// again set cookie 
				// 		$cookievalue = serialize($cookieres);
				// 			$cookiearr = array( 
				// 				'name'=>'cartitems',
				// 				'value'=>$cookievalue,
				// 				'expire'=>'86400'
				// 			);
				// 			$this->input->set_cookie($cookiearr);

				// }else{ 
				// // set cookie
				// 	$cookie_data[] = $id;
				// 	$cookievalue = serialize($cookie_data);
				// 		$cookiearr = array( 
				// 			'name'=>'cartitems',
				// 			'value'=>$cookievalue,
				// 			'expire'=>'6400'
				// 		);
				// 		$this->input->set_cookie($cookiearr);
				// 		print_r($_COOKIE);exit;
				// }

		$this->data['title'] = " Buy Product ";
		$this->data['page_title'] = "buyprod";
		$this->data['num_views']  = $this->db->get_where('tbl_number_of_views',array('prod_id'=>$id))->row()->count_views;

		$this->data['getsingleprod'] = $this->home_model->GetSingleProd($id);
		$this->load->view('layout/index2',$this->data);
	}
	
	}

   
    public function like_product(){
		 $data_likes = [
			'prod_id'=> $this->input->post('prod_id'),
			'number_like'=> $this->input->post('countlike')
		   ];
		 
		 $getprod_id = $this->db->get_where('tbl_likes',array('prod_id'=>$this->input->post('prod_id')))->row();
		 if($getprod_id){
			 $place_likes = 1 + $getprod_id->number_like;
		     $this->home_model->updatelikes($getprod_id->prod_id,$place_likes);
			 echo true;
		  }else{
		    $create_like =  $this->db->insert('tbl_likes',$data_likes);
			echo true;
		  }

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


  public function chartseller($id){
  	 if(!$this->session->logged_in){
  	      redirect(base_url('home/seller_buy_login/'.$id));
  	 }else{
  		$this->data['title'] = " chart with seller ";
  		$this->data['page_title'] = "chartseller";
  		$this->load->view('layout/index2',$this->data);
  	 }


  }






   public function logout(){
      session_destroy();
	  redirect(base_url('home'));
    }


	public function myhash($string){
		return hash("sha512", $string . config_item("encryption_key"));
		}



}
