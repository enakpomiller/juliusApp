

<style> 

.x:hover{
  text-decoration:underline;
}
</style> 


<div class="container  text-center w-25" style="position:relative;left:20px;">
  <?php if($loadmore){  ?>
   <?php  foreach($loadmore as $load){ ?>
     <ul>
      <div class="row"> 
           <div class="col-md-2 mt-4">
          <a href="<?=base_url('home/buyprod/'.$load->id)?>"> <img   src="<?='http://localhost/tutorial_class/assets/uploads/'.$load->prod_image?>" class="w-100" style="height:50px;"></a>
      </div>
        <div class="col-lg-6 mt-4">
            <li><a href="<?=base_url('home/get_search_product/'.$load->category)?>" class='text-decoration-none pt-4 text-dark'> <?=$load->prod_name?> </a></li>
        </div>
        <div class="col-lg-4 mt-4">
            <li><a href="<?=base_url('home/get_search_product/'.$load->category)?>" class='text-decoration-none pt-4 text-dark'> <?="&#x20A6;".number_format($load->prod_price,2)?> </a></li>
         </div>
   </div>
   </ul>
   <?php } ?>
   <?php }else{ ?>
      <p class="mt-2 text-danger"> <?= "product search '".$error."' not found "?></p>
    <?php } ?>
</div>



