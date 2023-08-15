
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
          <a class="navbar-brand" href="#">J-CLOTH </a>
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
            <form class="d-flex w-50" style="position:relative;right:10px;">
              <input class="form-control me-2" type="search" placeholder="Search products, brands and categories" aria-label="Search">
              <button class="btn btn-dark text-warning w-25" type="submit">Search </button>
            </form>
                <a class="nav-link  text-dark" href="#" tabindex="-1" aria-disabled="true" data-bs-toggle="modal" data-bs-target="#exampleModal"> Login </a>
                <a class="nav-link  text-dark" href="<?=site_url('home/signup')?>" tabindex="-1" aria-disabled="true"> Signup </a>
           
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
                  <input type="text"  name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label> Password  </label>
                  <input type="text"  name="password" id="password" class="form-control">
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



    <script src="<?=base_url()?>assets/js/jquery.js"></script>  
  

<script> 

 $(document).ready(function() {
 	$('#butsave').on('click', function() {
    const id=4;
 		var email = $('#email').val();
 		var password = $('#password').val();
 		if( email!="" && password!=""){
 			$("#butsave").attr("disabled", "disabled");
 			$.ajax({
 				url: "<?php echo base_url("home/custlogin");?>",
 				type: "POST",
          data: {
            email: email,
            password: password
          },
 				cache: false,
 				success: function(res){
          if(res==true){
            location.reload();
            $('#spinner-border').html('Data added successfully !'); 
            window.location = "<?=base_url('home/store/')?>";
          }else{
             location.reload();
             alert('Incorrect Username or Password ');
          }
        

 				 },
          error: function() { alert("Error posting feed or record already exist."); }

 			});
 		}
 		else{
 			alert('Please fill all the field !');
 		}
 	});
 });

</script>




