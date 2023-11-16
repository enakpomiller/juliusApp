<!DOCTYPE html>
<html lang="en">

    
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?=$title?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?=base_url()?>assets_sellers/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets_sellers/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets_sellers/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?=base_url()?>assets_sellers/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?=base_url()?>assets_sellers/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets_sellers/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets_sellers/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets_sellers/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets_sellers/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?=base_url('sellers')?>"> Merchant Registration </a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Put some text or
							</span> 
							<a href="#"><strong>links</strong></a> 
							<span class="li-text">
								here, or some icons: 
							</span> 
							<span class="li-social">
								<a href="https://www.facebook.com/pages/Azmindcom/196582707093191" target="_blank"><i class="fa fa-facebook"></i></a> 
								<a href="https://twitter.com/anli_zaimi" target="_blank"><i class="fa fa-twitter"></i></a> 
								<a href="https://plus.google.com/+AnliZaimi_azmind" target="_blank"><i class="fa fa-google-plus"></i></a> 
								<a href="https://github.com/AZMIND" target="_blank"><i class="fa fa-github"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1>Merchant  <strong> Login  </strong></h1>
                        <div class="description">
               
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" class="f1">
                            <?php if($this->session->flashdata('msg_error')){?>
                                 <div class="alert alert-danger pt-2 pb-2"> <?=$this->session->flashdata('msg_error')?> </div>
                                 <?=$this->session->unset_userdata('msg_error')?>
                            <?php } ?>
                    		<h3> Login to your dashboard </h3>
                    		<fieldset style="position:relative;top:50px;bottom:20px;">
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-last-name">Email</label>
                                        <input type="text" name="username" id="username" placeholder="Username..." class="f1-last-name form-control" id="f1-last-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="f1-about-yourself">Password</label>
                                        <input type="password" name="password" id="password" placeholder="Password..." class="f1-email form-control" id="f1-email">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" id="loginseller" style="background:#f35b3f;width:100%;">Login</button>
                                    </div>
                                    <a href="<?=base_url('sellers')?>"> Don't have an account </a>
                             </fieldset>
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- Javascript -->
        <script src="<?=base_url()?>assets_sellers/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?=base_url()?>assets_sellers/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets_sellers/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?=base_url()?>assets_sellers/assets/js/retina-1.1.0.min.js"></script>
        <script src="<?=base_url()?>assets_sellers/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>


<!-- Mirrored from azmind.com/demo/bootzard-bootstrap-wizard-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Sep 2018 15:51:59 GMT -->
</html>





<script>
 $(document).ready(function() {
	$('#loginseller').on('click', function(e){
        e.preventDefault();
        var user  = $('#username').val();
        console.log(user);
        var pass = $('#password').val();

		if(user!=""  && pass!=""){
                $("#butsave").attr("disabled", "disabled");
                    $.ajax({
                        url: "<?php echo base_url("seller_login/loginseller");?>",
                        type: "POST",
                        data: {
                            user,
                            pass,
                        
                        },
                        cache: false,
                        success: function(res){ 
                            if(res==true){
                                window.location = "<?=base_url('admin2')?>";
                            }
                            else if(res==false){
                                //location.reload();
                                alert(" Wrong Username Or Password!");

                            }

                        }
                    });


		}else{
            $('#error').html('please fill all entries !');
		}
	});



});
</script>