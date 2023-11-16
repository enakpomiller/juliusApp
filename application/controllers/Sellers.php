<?php defined('BASEPATH') OR exit('No direct script access allowed');?>



<?php 

class Sellers extends CI_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->helper(array('form','text','url'));
      $this->load->library(array('form_validation','session'));
      $this->load->model('sellers_m');
    } 

    public function index(){
      $this->data['title'] = " Sellers Registration ";
      $this-> load->view('layout/sellers/sellers_reg',$this->data);
    
    }

   public function register_sellers(){
     $user_exist  = $this->db->get_where('tbl_sellers',array('username'=>$this->input->post('username'),'password'=>$this->myhash($this->input->post('password')) ))->row();
      if($user_exist){
           $this->session->set_flashdata('msg_error',' Sorry! this user already have an account click on old user to login   ');
           return redirect(base_url('sellers'));
        }else if($this->input->post('confpassword') != $this->input->post('password')){
          $this->session->set_flashdata('msg_error',' Sorry! the password does not match the confirm password  ');
          return redirect(base_url('sellers'));
    
        }else{
          $data = [
            'firstname'=>$this->input->post('firstname'),
            'lastname'=>$this->input->post('lastname'),
            'username'=>$this->input->post('username'),
            'type'=>$this->input->post('type'),
            'password'=>$this->myhash($this->input->post('password'))

          ];
           $insert = $this->db->insert('tbl_sellers',$data);
           if($insert){
              $exist = $this->db->get_where('tbl_sellers',array('username'=>$data['email'],'password'=>$this->myhash($this->input->post('password')) ))->row();
               if($exist){
                   return redirect(base_url('admin2'));
                }else{
                 return redirect(base_url('admin2'));
                }
            }else{
              var_dump(" unable to insert ");die;
            }
      
      }

       
    }



     public function create_item(){
        if($_POST){
              $this->data['location'] = $this->input->post('location');
              $this->data['prod_name'] = $this->input->post('prod_name');
              $this->data['prod_price'] = $this->input->post('prod_price');
              $post = $this->input->post();
                  for($i =0; $i < count($post['prod_name']); $i++)
                  {
                      $data = array(
                      'prod_name' =>$post['prod_name'][$i],
                      'prod_price' =>$post['prod_price'][$i],
                      'seller_id' => $this->session->seller_id,
                      );
                      $seller_lastid = $this->sellers_m->sellerdetails($data);
                  }

          // start multiple file upload
             $data = array();
             $errorUploadType = $statusMsg = '';
             // If file upload form submitted
             if($this->input->post('fileSubmit')){
                 // If files are selected to upload
                 if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){
                     $filesCount = count($_FILES['files']['name']);
                     for($i = 0; $i < $filesCount; $i++){
                         $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                         $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                         $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                         $_FILES['file']['error']    = $_FILES['files']['error'][$i];
                         $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                         // File upload configuration

                         // $uploadPath = './uploads';
                         $config['upload_path'] = './assets/sellers_uploads/';
                        //  $config['upload_path'] = './assets/uploads/';
                         $config['allowed_types'] = 'jpg|jpeg|png|gif';
                         // Load and initialize upload library
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                         // Upload file to server
                         if($this->upload->do_upload('file')){
                                //Uploaded file data
                             $fileData = $this->upload->data();
                             $uploadData[$i]['prod_id'] =  $seller_lastid;
                             $uploadData[$i]['seller_id'] = $this->session->seller_id;
                                  //$uploadData[$i]['prod_id'] =  $seller_lastid;
                             $uploadData[$i]['file_name'] = json_encode($fileData['file_name']);
                             $uploadData[$i]['location'] = $this->data['location'];
                                  //$uploadData[$i]['created_at'] = date("Y-M-D H:i:s");
                         }else{
                             $errorUploadType .= $_FILES['file']['name'].' | ';
                         }
                     }
                     $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):'';
                     if($uploadData){
                        $insert = $this->sellers_m->insert_multiple_files($uploadData);
                            // $this->data['title'] = "Create Item";
                            // $this->data['page_name'] = "create_item";
                            // $this->load->view('layout/index_seller',$this->data);
                       $this->session->set_flashdata('msg_createprod',' Sellers Product Created Successfully');
                       return redirect(base_url('sellers/create_item'));
                     }else{
                         $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType;
                     }
                 }else{
                    $this->data['title'] = " Create Item";
                    $this->data['page_name'] = "create_item";
                    $this->load->view('layout/index_seller',$this->data);
                 }
              }
        // end multiple upload

        }else{
          $this->data['title'] = " Create Item";
          $this->data['page_name'] = "create_item";
          $this->load->view('layout/index_seller',$this->data);
        }
     
      }

   public function viewproducts(){
      $this->data['title'] = " Sellers Products ";
      $this->data['page_name'] = "viewsellers_prod";
      $this->data['allsellersprod'] = $this->sellers_m->get_all_sellers_prod();
      $this->data['prod_images'] = $this->sellers_m->get_prod_images();
      $this->load->view('layout/index_seller',$this->data);

    }

  public function editproduct($id){
    $this->data['title'] = " Update Product";
    $this->data['get_img'] = $this->db->get_where('tbl_products',array('prod_id'=>$id))->row()->file_name;
    $this->data['getsinglerec'] = $this->sellers_m->get_singlerec($id);
    $this->data['page_name'] = "editproduct";
    $this->load->view('layout/index_seller',$this->data);
  }



    public function myhash($string){
	    return hash("sha512", $string . config_item("encryption_key"));
	  }

}