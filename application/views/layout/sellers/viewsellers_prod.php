
         <div class="app-main" id="main">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin row -->
                    <div class="row">
                        <div class="col-md-12 m-b-30">
                            <!-- begin page title -->
                            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                    <h1 style="position:relative;left:40px;"> <?=$title?> </h1>
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
       
                           <div class="row mt-4">
                              <div class="card col-md-5" style="position:relative;left:50px;">
                                 <div class="row pr-2 pl-2">
                                    <?php $counter =1; foreach($prod_images as $img){ ?>
                                      <div class="col-md-4 border-light mt-5 pr-2 pl-2">
                                        <center> 
                                            <img src="<?=base_url('assets/sellers_uploads/'.json_decode($img->file_name))?>" style="width:90%;height:100px;"> 
                                             <p> <?=$counter++?> </p> 
                                        </center>
                                      </div>     
                                     <?php } ?>
                                  </div> 
                                </div> 
                              <div class="card col-md-6 ml-3" style="position:relative;left:50px;">
                              <?php if($allsellersprod) { ?>
                                    <table class="table table-striped mt-4 ml-2" style="position:relative;padding-left:10px;top:20px;">
                                        <thead>
                                            <tr>
                                            <th scope="col">s/n</th>
                                            <th scope="col">Product Name </th>
                                            <th scope="col"> Product Price  </th>
                                            <th scope="col" class="text-center"> Action   </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter=1; foreach($allsellersprod as $sellersprod){  ?>
                                            <tr>
                                            <th scope="row"><?=$counter++?></th>
                                            <td> <?=$sellersprod->prod_name?> </td>
                                            <td> <?="&#8358;".number_format(($sellersprod->prod_price),2)?> </td>
                                            <td align="center"> 
                                            <a href="<?=base_url('sellers/deletesellersprod/'.$sellersprod->sell_prod_id)?>" class="btn btn-danger pt-2 pb-2" onclick="return confirm(' Are you sure you want to delete?')">  <i class="fa fa-book"></i> Delete </a>
                                               <a href="<?=base_url('sellers/editproduct/'.$sellersprod->sell_prod_id)?>" class="btn btn-primary pt-2 pb-2">  <i class="fa fa-book"></i> Edit </a>
                                            </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                        </table>
                                        <?php }else{?>
                                         <h1 class="text-center"> No data </h1>
                                         <?php } ?>
                              </div>

                  </div> 
                </div>
                </div>

          
            </div>
         </div>




