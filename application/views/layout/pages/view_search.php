



          <div class="container">
                 <div class="row">
                    <?php  foreach ($viewload as $prod) {?>
                            <section class="col-lg-3 col-md-6 py-4" style="margin:auto;">
                                <div class="card" id="prod-cover">
                                    <div class="card-body">
                                    <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img   src="<?='http://localhost/tutorial_class/assets/uploads/'.$prod->prod_image?>" class="w-100" style="height:300px;"></a>
                                    </div>
                                    <h5 class="text-center"> <?=$prod->prod_name?>  </h5>
                                    <h5 class="text-center"> <?="&#x20A6;".number_format(($prod->prod_price),2)?>  </h5>
                                    <a href="<?=base_url('home/buyprod/'.$prod->id)?>" class="text-center  pt-2 pb-2  text-light" style="text-decoration:none;background:#ef5f21;"> Buy Item </a>
                                </div>
                            </section>
                            
                    <?php }?>
                </div>
         </div>



