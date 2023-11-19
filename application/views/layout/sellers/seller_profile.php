


         <div class="app-main" id="main">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin row -->
                    <div class="row">
                        <div class="col-md-12 m-b-30">
                            <!-- begin page title -->
                            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                <h1 style="position:relative;left:40px;">  <?=$title?> </h1>
                                </div>
                                <div class="ml-auto d-flex align-items-center">
                                    <nav>
                                        <ol class="breadcrumb p-0 m-b-0">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="ti ti-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                Dashboard
                                            </li>
                                            <li class="breadcrumb-item active text-primary" aria-current="page">Real Estate</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- start real estate contant -->
       <style>
        .txt{
           font-size:10px;
        }
      </style>
                           <div class="row mt-4">
                              <div class="card col-md-5" style="position:relative;left:50px;">
                                 <div class="row pr-2 pl-2">
                                    <?php if($seller_profile) { ?> 
                                        <div class="row w-100 ml-4 mt-4">
                                             <div class="col-md-4">
                                                <h5> First Name </h5> 
                                              </div>   
                                            <div class="col-md-4">
                                               <p style="font-size:1rem;"><?=$seller_profile->firstname?></p> 
                                            </div> 
                                         </div>


                                         <div class="row w-100 ml-4">
                                             <div class="col-md-4">
                                                <h5> Last Name </h5> 
                                              </div>   
                                            <div class="col-md-4">
                                                <p> <?=$seller_profile->lastname?> </p> 
                                            </div> 
                                         </div>

                                         <div class="row w-100 ml-4">
                                             <div class="col-md-4">
                                                <h5> Email  </h5> 
                                              </div>   
                                            <div class="col-md-4">
                                                <p><?=$seller_profile->username?></p>
                                            </div> 
                                         </div>

                                         <div class="row w-100 ml-4">
                                             <div class="col-md-4">
                                                <h5> Category  </h5> 
                                              </div>   
                                            <div class="col-md-4">
                                                <p> <?=$seller_profile->type?></p> 
                                            </div> 
                                         </div>

                                         <div class="row w-100 ml-4">
                                             <div class="col-md-4">
                                                <h5> Location   </h5> 
                                              </div>   
                                            <div class="col-md-4">
                                                <p> <?=$seller_location?></p> 
                                            </div> 
                                         </div>

                                         <div class="row w-100 ml-4">
                                             <div class="col-md-4">
                                                <h5> Phone    </h5> 
                                              </div>   
                                            <div class="col-md-4">
                                                <p> <?="90989878987"?></p> 
                                            </div> 
                                         </div>

                                         <div class="row w-100 ml-4">
                                             <div class="col-md-4">
                                                <h5> Country    </h5> 
                                              </div>   
                                            <div class="col-md-4">
                                                <p> <?=$seller_location." / Nigeria"?></p> 
                                            </div> 
                                         </div>
                          
                                     <?php } ?>
                                  </div> 
                                </div> 
                              <div class="card col-md-6 ml-3" style="position:relative;left:50px;">
                              <?php if($seller_profile) { ?>
                                       <center> 
                                            <img src="<?=base_url('assets/sellers_uploads/'.$seller_profile->userfile)?>" style="width:35%;height:240px;padding:30px;border-radius:15px;"> 
                                        </center>
                                <?php }else{?>
                                    <h4 class="text-center mt-4"> No User Record  </h4>
                                    <?php } ?>
                              </div>

                  </div> 
                </div>
                </div>

          
            </div>
         </div>




