
<style>

.font{
  font-familly:sanserif;
  font-size:13px;
  text-aling:center;
}
.x:hover{
   border: 5px solid white;
}
</style>
<style>
.image-container {
    //width: 200px; /* Adjust to your image size */
    height: 200px; /* Adjust to your image size */
    position: relative;
    animation: waggle 2s ease-in-out infinite;
}

@keyframes waggle {
    0%, 100% {
        transform: translateX(0); /* Start and end position */
    }
    25% {
        transform: translateX(-10px); /* Middle position - waggle left */
    }
    75% {
        transform: translateX(10px); /* Middle position - waggle right */
    }
}

</style>


<div class="container bg-#f8f8f8 mt-4 ">
 <form action="<?php echo base_url('home/createcart') ?>" method="POST">
      <div class="row">
             <section class="col-lg-6 col-md-6 py-3">
                        <div class="card w-100" style="height:500px;">
                            <div class="card-body">
                                <center class="image-container">
                                   <img class="" style="width:60%; height:400px;" src="<?='http://localhost/tutorial_class/assets/uploads/'.$getsingleprod->prod_image?>">
                                   <input type="hidden" id="prod_image" name="prod_image" value="<?=$getsingleprod->prod_image?>">
                                </center>
                            </div>
                            <?php if($num_views > 1){?>
                                <p class="text-success" style="position:relative;bottom:20px;left:25%;"> <?=$num_views?> views </p> 
                               <?php }else{?>
                                   <p class="text-success" style="position:relative;bottom:20px;left:25%;"> <?=$num_views?> view </p> 
                               <?php } ?>
                                <div>
                                <input type="hidden" name="countlike" id="countlike" value="<?="1"?>">   
                                <input type="hidden"  id="prod_id" value="<?=$getsingleprod->id?>">  
                                <?php $like_prod = $this->db->get_where('tbl_likes',array('prod_id'=>$getsingleprod->id))->row()->number_like ;?>
                                <?php  if($like_prod > 1){?>
                                    <button class="border-0 bg-light" id="likeproduct" style="position:relative;width:10%;bottom:60px;left:60%;"><?=$like_prod?>  likes </button>
                                  <?php }else{?>
                                    <button class="border-0 bg-light text-success" id="likeproduct" style="position:relative;width:10%;bottom:60px;left:60%;"><?=$like_prod?>  like </button>
                                  <?php } ?>
                                  
                               </div>
                        </div>
             </section>
             <section class="col-lg-6 col-md-6 py-3">
             <input type="hidden"  name="prod_id" id="id" value="<?=$getsingleprod->id?>">
              <div class="text-success text-center"> <?=$this->session->flashdata('success')?></div>
                 <?=$this->session->unset_userdata('success')?>

                        <div class="card" id="prod-cover">
                            <div class="card-body">
                            <h1 class="text-left text-dark  mb-4"> <?=(ucfirst($getsingleprod->prod_name))?></h1>
                            <h5 class="text-left text-succes"> <?="&#x20A6;".number_format(($getsingleprod->prod_price),2)?>  </h5>
                            <h5 class="text-left text-danger" style="text-decoration:line-through"> <?="&#x20A6;".number_format(($getsingleprod->prod_price+1000),2)?>  </h5>
                                <input type="hidden" id="prod_name" name="prod_name" value="<?=$getsingleprod->prod_name?>">
                                <input type="hidden" id="prod_price" name="prod_price" value="<?=$getsingleprod->prod_price?>">
                                <hr>
                                <p class="font"> <?=$getsingleprod->prod_details?>  </p>
                            </div>
                            <div class="row">
                               <div class="col-md-4" style="margin-left:50px;">
                                  Color
                                </div>
                                <div class="col-md-6">
                                   <select id="color" name="color" class="form-control">
                                     <option disabled>   Select Color </option>
                                     <option>   Red </option>
                                     <option>   Black </option>
                                     <option>   Blue </option>
                                    </select>
                                </div>
                            </div>
                            <p>
                            <div class="row">
                               <div class="col-md-4" style="margin-left:50px;">
                                  Size
                                </div>
                                <div class="col-md-6">
                                   <select id="size" name="size" class="form-control">
                                     <option disabled>   Select Size </option>
                                     <option>   Medium </option>
                                     <option>   Large</option>
                                     <option>   Etra Large </option>
                                    </select>
                                </div>
                                <p>
                            </div>
                            <div class="row">
                               <div class="col-md-4" style="margin-left:50px;">
                                  Quantity
                                </div>
                                <div class="col-md-6">
                                    <input type="number" id="quantity" name="quantity"  class="form-control" placeholder=" Select Quantity">
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="prod_id" value="<?=$getsingleprod->id?> " class="form-control" placeholder=" Select Quantity">
                                </div>
                                <p>
                            </div>
                               <button type="submit"  class="border-0 text-light pt-2 pb-2" id="btnsubmit" style="background:#8e54e9;"> Add To Cart </button>
                        </div>
                      <div class="row justify-content-center">
                            <div class="col-md-6">
                                    <button type="submit"  class="border-0 text-light pt-2 pb-2 w-100 mt-2"  style="background:#8e54e9;"><a href="<?=base_url('home')?>" class="text-light text-decoration-none"> Continue Shopping </a> </button>
                            </div>
                                <div class="col-md-6">
                                <a class="nav-link  text-light  mt-2 mb-2 text-center" style="background:#8e54e9;"  href="<?=site_url('home/viewcart')?>" tabindex="-1" aria-disabled="true"> View Cart </a>
                            </div>
                      </div>

             </section>

             <!-- display viewed products -->
             <?php if($recent_views){ ?>
             <p> Recently Viewed </p> 
                 <div class="row"> 
                     <?php foreach($recent_views as $recentviews){  ?>
                        <div class="col-md-4 w-25 shadow mt-2 pt-4" style="border:0px solid red;"> 
                        <center> 
                            <a href="<?=base_url('home/buyprod/'.$recentviews->product_id)?>" class="text-dark" style="text-decoration:none;">
                                <img class="w-50" src="<?=base_url('assets/uploads/'.$recentviews->prod_image)?>"> 
                                <p> <?=$recentviews->prod_name?>   </p> 
                                <p> <?=number_format($recentviews->prod_price)?>   </p> 
                            </a>
                        </center> 
                        </div>
                    <?php } ?>
              <?php } ?>
               </div>

            <?php if($getsimilar_prod){?>
               <p class="mt-4"> Related Products </p> 
                 <div class="row"> 
                     <?php foreach($getsimilar_prod as $similar_prod){  ?>
                        <div class="col-md-4 x shadow  w-25 card mt-2 pt-4" style="border:0px solid #8e54e9;"> 
                        <center> 
                            <a href="<?=base_url('home/buyprod/'.$similar_prod->id)?>" class="text-dark" style="text-decoration:none;">
                                <img class="w-50" src="<?=base_url('assets/uploads/'.$similar_prod->prod_image)?>"> 
                                <p> <?=$recentviews->prod_name?>   </p> 
                                <p> <?=number_format($recentviews->prod_price)?>   </p> 
                            </a>
                            </center> 
                        </div>
                    <?php } ?>
              <?php } ?>
            </div> 
         </div> 
              <!-- customers feedback  --> 
     


  </form>
</div>



<script>
 $(document).ready(function() {
	$('#btnsubmit').on('click', function(e) {
        e.preventDefault();
        var prod_id = $('#id').val();
		var prod_name = $('#prod_name').val();
		var prod_price = $('#prod_price').val();
        var quantity = $('#quantity').val();
        var color = $('#color').val();
        var size = $('#size').val();
        var prod_image = $('#prod_image').val();
		if(quantity!=""){
			$("#butsave").attr("disabled", "disabled");
			$.ajax({
				url: "<?php echo base_url("home/createcart");?>",
				type: "POST",
				data: {
					type: 1,
					prod_id,
					prod_name,
                    prod_price,
                    quantity,
                    color,
                    size,
                    prod_image
				},
				cache: false,
				success: function(res){
					if(res==true){
                        const x = confirm(' Item added cart! do wish to view cart?');
                        if(x){
                            window.location = "<?=base_url('home/viewcart/')?>";
                          }else{
                            window.location = "<?=base_url('home/buyprod/')?>"+prod_id;
                          }
					}else if(res==false){
                          location.reload();
					      alert(" Unable to insert into cart!");

					}else{
                        const z = confirm(' Item already  added to  cart! do wish to view cart?');
                        if(z){
                            window.location = "<?=base_url('home/viewcart/')?>";
                          }else{
                            window.location = "<?=base_url('home/buyprod/')?>"+prod_id;
                          }
                    }
                        // else{
                        //     alert(' Please login or create an  account to proceed');
                        //     window.location = "<?=base_url('home/custlogin')?>";
                        // }


				}
			});
		}else if(quantity==""){
			 alert('Please select the quantity of items !');
            //$('#error').html('please fill all entries !');
		}

	});


	$('#likeproduct').on('click', function(e) {
        e.preventDefault();
         var prod_id = $('#prod_id').val();
        var countlike = $('#countlike').val();

		if(countlike){
			$("#butsave").attr("disabled", "disabled");
			$.ajax({
				url: "<?php echo base_url("home/like_product");?>",
				type: "POST",
				data: {
					type: 1,
					countlike,
                    prod_id
				},
				cache: false,
				success: function(res){
					if(res==true){
                       //alert('inserted');
					}else{
                      alert(' error cannot insert');
                    }

				}
			});
		}else if(countlike==""){
			 alert('Please select the quantity of items !');
            //$('#error').html('please fill all entries !');
		}

	});



});
</script>
