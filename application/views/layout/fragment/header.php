
<!DOCTYPE html>
<html>


  <style>
  .b:hover{
    color: #000000;
    text-align: center;
    cursor: pointer;
    text-decoration:underline;
  }

</style>


<head>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?=base_url()?>assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>


<!-- start nav -->

<div class="header"  id="scrollspyHeading2">
      <nav class="navbar navbar-expand-lg navbar-light bg-light pt-4 pb-4 w-100 bg-light">
        <div class="container-fluid">
          <a class="navbar-brand  text-light" href="" style="padding-left:10px; padding-right:10px;background:#ef5f21;">J-CLOTH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active  text-drk" aria-current="page" href="<?=base_url('home')?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="<?=base_url('home/about')?>">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link  text-dark" href="<?=site_url('home/contact')?>" tabindex="-1" aria-disabled="true">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark" href="<?=base_url('home/store')?>" tabindex="-1" aria-disabled="true"> Store </a>
              </li>
            </ul>
            <?php if($this->session->firstname){  ?>
            <form class="d-flex w-50" style="position:relative;right:100px;">
              <input class="form-control me-2" type="search" placeholder="Search products, brands and categories" aria-label="Search">
              <button class=" text-light w-25 border-0" type="submit" style="background:#ef5f21;">Search </button>
            </form>
                   <?php
                      $user_id = $this->session->userid;
                      $this->db->limit(5);
                      $this->db->order_by('id','DESC');
                      $cart =  $this->db->get_where('customer_cart',array('user_id'=>$user_id))->result();

                    ?>

                  <div class="dropdown" style="position:relative;right:50px;">
                      <div class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">   <?= "Hi ".$this->session->firstname." ".$this->session->othernames?>
                      </div>
                    <ul class="dropdown-menu" style="margin-right:150px;width:195px;" aria-labelledby="dropdownMenuButton1">
                     <?php if(($cart)>0){ ?>
                        <?php  foreach($cart as $carts){?>
                           <li class="dropdown-item"> <center>  <img style="width:30%;" src="<?='http://localhost/tutorial_class/assets/uploads/'.$carts->prod_image?>">  <span style="position:relative;left:10px;"><br><?=$carts->prod_name?>  </span> </center>  </li>
                         <?php  }?>
                         <?php }else{?>
                          <p class="text-center">Cart Empty </p>
                         <?php }?>
                      <li>  <a class="nav-link  text-light bg-dark mt-2 mb-2 text-center"  href="<?=site_url('home/viewcart')?>" tabindex="-1" aria-disabled="true"> View Cart </a>  </li>
                      <li>  <a class="nav-link  text-light text-center" onclick="return confirm(' you wish to logout?')" href="<?=site_url('home/logout')?>" tabindex="-1" aria-disabled="true" style="background:#ef5f21;"> Logout </a>  </li>
                    </ul>
                  </div>
            <?php }else{?>
              <form class="d-flex w-50" style="position:relative;right:100px;">
              <input class="form-control me-2" type="search" placeholder="Search products, brands and categories" aria-label="Search">
              <button class=" text-light w-25 border-0" type="submit" style="background:#ef5f21;">Search </button>
            </form>
               <a class="nav-link  text-dark" href="<?=base_url('home/custlogin')?>" tabindex="-1" aria-disabled="true" > Login </a>
               <!-- <a class="nav-link  text-dark" href="#" tabindex="-1" aria-disabled="true" data-bs-toggle="modal" data-bs-target="#exampleModal"> Login </a>  -->
                <a class="nav-link  text-dark" href="<?=site_url('home/signup')?>" tabindex="-1" aria-disabled="true"> Signup </a>
            <?php }?>

          </div>
        </div>
      </nav>
 </div>
<!-- end nav -->

<body>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-light">
          <h5 class="modal-title" id="exampleModalLabel"> User Login </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body">
        <!-- <form  method="POST">  -->
              <div class="form-group">
                <label> Email  </label>
                  <input type="text"  name="email"  class="form-control">
              </div>
              <div class="form-group">
                <label> Password  </label>
                  <input type="text"  name="password"  class="form-control">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit"  id="butsave"  class="btn btn-dark text-warning">Login</button>
          </div>


    <!-- </form> -->
    </div>
  </div>
</div>



    <!-- <script src="<?=base_url()?>assets/js/jquery.js"></script>   -->


<script>

  // $(document).ready(function() {
  //   $('#butsave').on('click', function() {
  //     const id=4;
  //     var email = $('#email').val();
  //     var password = $('#password').val();
  //     if( email!="" && password!=""){
  //       $("#butsave").attr("disabled", "disabled");
  //       $.ajax({
  //         url: "<?php echo base_url("home/custlogin");?>",
  //         type: "POST",
  //           data: {
  //             email: email,
  //             password: password
  //           },
  //         cache: false,
  //         success: function(res){
  //           if(res==true){
  //             location.reload();
  //             $('#spinner-border').html('Data added successfully !');
  //             window.location = "<?=base_url('home/store/')?>";
  //           }else{
  //             location.reload();
  //             alert('Incorrect Username or Password ');
  //           }


  //         },
  //           error: function() { alert("Error posting feed or record already exist."); }

  //       });
  //     }
  //     else{
  //       alert('Please fill all the field !');
  //     }
  //   });
  // });

</script>
