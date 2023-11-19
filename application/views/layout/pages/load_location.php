
<style> 
    #prod-cover:hover{
              border: 1px solid sandybrown;
          }
</style>


        <div class="container mt-4" style="position:relative;top:50px;bottom:50px;">
             <h2 class="text-center"> <?=ucfirst($this->uri->segment(3)) ?>  Product Listing </h2>
                <div class="row justify-content-center">
                    <?php  foreach ($get_prodby_location as $prod) {?>
                            <section class="col-lg-3 col-md-6 py-3">
                                        <div class="card" id="prod-cover">
                                            <div class="card-body">
                                            <a href="<?=base_url('home/buyprod/'.$prod->prod_id)?>"> <img   src="<?=base_url('assets/sellers_uploads/'.json_decode($prod->file_name))?>" class="w-100" style="height:300px;"></a>
                                            <!-- <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img   src="<?='http://localhost/tutorial_class/assets/sellers_uploads/'.$prod->file_name?>" class="w-100" style="height:300px;"></a> -->
                                            </div>
                                            <h5 class="text-center"> <?=$this->db->get_where('tbl_sellers_products',array('sell_prod_id'=>$prod->prod_id))->row()->prod_name?>  </h5>
                                            <h5 class="text-center"> <?=number_format(($prod->prod_price),2)?>  </h5>
                                            <a href="" class="text-center  pt-2 pb-2  text-light" style="text-decoration:none;background:#ef5f21;"> Buy Item </a>
                                        </div>
                             </section>
                            
                    <?php }?>
               </div>
        </div>



