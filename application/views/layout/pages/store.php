
<style> 
    #prod-cover:hover{
              border: 1px solid sandybrown;
          }
</style>



<div class="container mt-4" style="position:relative;top:50px;bottom:50px;">
        <h2 class="text-center">Product Listing </h2>
    <div class="row">
      <?php  foreach ($allprod as $prod) {?>
             <section class="col-lg-3 col-md-6 py-3">
                        <div class="card" id="prod-cover">
                            <div class="card-body">
                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img   src="<?='http://localhost/tutorial_class/assets/uploads/'.$prod->prod_image?>" class="w-100" style="height:300px;"></a>
                            </div>
                            <h5 class="text-center"> <?=$prod->prod_name?>  </h5>
                            <h5 class="text-center"> <?=number_format(($prod->prod_price),2)?>  </h5>
                            <a href="" class="text-center  pt-2 pb-2  text-light" style="text-decoration:none;background:#ef5f21;"> Buy Item </a>
                        </div>
             </section>
            
    <?php }?>
</div>

</div>



