
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
<div class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light pt-4 pb-4 w-100 bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">J-CLOTH </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active b text-danger" aria-current="page" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link b text-danger" href="#">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link  b text-danger" href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex" style="position:relative;right:10px;">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-dark text-danger" type="submit">Search</button>
            </form>
                <a class="nav-link  b text-danger" href="#" tabindex="-1" aria-disabled="true" data-bs-toggle="modal" data-bs-target="#exampleModal"> Login </a>
                <a class="nav-link  b text-danger" href="<?=site_url('home/signup')?>" tabindex="-1" aria-disabled="true"> Signup </a>
           
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
        <form action="">
            <div class="form-group">
              <label> Username </label>
                <input type="text" required name="username" class="form-control">
            </div>
            <div class="form-group">
              <label> Password  </label>
                <input type="text" required name="password" class="form-control">
            </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-dark">Login</button>
      </div>         
    </form>
    </div>
  </div>
</div>

 <!-- <div class="header">
   <div class="logo">
      J-Venture
   </div>
    <div class="nav">
        <a href="" class="txt b active">  Home  </a>
        <a href="" class="txt b">  About Us </a>
        <a href="" class="txt b">  Contact Us  </a>
        <a href="" class="txt b">  Gallery  </a>
   </div>

</div> -->
