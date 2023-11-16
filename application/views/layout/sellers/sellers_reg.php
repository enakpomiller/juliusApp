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
                        <h1>Merchant  <strong>Registration </strong></h1>
                        <div class="description">
               
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="<?=base_url('sellers/register_sellers')?>" method="post" class="f1">

                            <?php if($this->session->flashdata('msg_error')){?>
                                 <div class="alert alert-danger pt-2 pb-2"> <?=$this->session->flashdata('msg_error')?> </div>
                                 <?=$this->session->unset_userdata('msg_error')?>
                            <?php } ?>
                    		<h3>Register To Sell Your Product</h3>
                    		<p>Fill in the form to get instant access</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>about you </p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>account</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-lock"></i></div>
                    				<p>Login</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    		    <h4>Tell us who you are:</h4>
                    			<div class="form-group">
                    			    <label class="sr-only" for="f1-first-name">First name</label>
                                    <input type="text" name="firstname" id="firstname" placeholder="First name..." class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Last name</label>
                                    <input type="text" name="lastname" id="lastname" placeholder="Last name..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">Username</label>
                                    <input type="text"  name="username" id="email" placeholder="username..." class="f1-email form-control" id="f1-email">
                                    <!-- <textarea name="f1-about-yourself" placeholder="About yourself..." 
                                    class="f1-about-yourself form-control" id="f1-about-yourself"></textarea> -->
                                </div>
                                <div class="f1-buttons">
                                   <a href="<?=base_url('seller_login')?>" class="" style="float:left;"> Old User </a>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                         
                            </fieldset>

                            <fieldset>
                                <h4>Set up your account:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">What do you wish to sell?</label>
                                    <input type="text" name="type" id="type" placeholder="What do wish to sell..." class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Password</label>
                                    <input type="password" name="password" placeholder="Password..." class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                                    <input type="password" id="confpassword" name="confpassword" placeholder="Repeat password..." 
                                     class="f1-repeat-password form-control" id="f1-repeat-password">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" id="createseller" class="btn btn-next">Nextxx</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Login to your dashboard:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Facebook</label>
                                    <input type="text"  autocomplete="off" name="username" id="email" placeholder="Username..." class="f1-twitter form-control pt-4 pb-4" id="f1-twitter">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-key">Twitter</label>
                                    <input type="password" id="password" name="password" placeholder="Password..." class="f1-twitter form-control" id="f1-twitter">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit" >Submit</button>
                                </div>
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
	$('#createseller').on('click', function(e) {
        e.preventDefault();
		var fname = $('#firstname').val();
		var lname = $('#lastname').val();
        var  email  = $('#email').val();
        var type = $('#type').val();
        var pass = $('#password').val();
        var cpass = $('#confpassword').val();

		if(fname!="" && lname!="" && email!="" && type!="" && pass!="" && cpass!=""){
            if(pass == cpass){
                $("#butsave").attr("disabled", "disabled");
                    $.ajax({
                        url: "<?php// echo base_url("sellers/register_sellers");?>",
                        type: "POST",
                        data: {
                            type: 1,
                            fname,
                            lname,
                            email,
                            type,
                            pass,
                            cpass
                        },
                        cache: false,
                        success: function(res){ 
                            if(res==true){
                                alert(" account created ");
                                window.location = "<?=base_url('admin2')?>";
                            }
                            else if(res==false){
                                location.reload();
                                alert(" Wrong Username Or Password!");

                            }

                        }
                    });

            }else{
              alert(" passwordword mismatch");
            }



		}else{
            $('#error').html('please fill all entries !');
		}
	});



});
</script>