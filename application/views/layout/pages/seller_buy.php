
  

<style>

.font{
  font-familly:sanserif;
  font-size:13px;
  text-aling:center;
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

  <?php 
      $id = $this->uri->segment(2);
      $_SESSION['prod_id'] =$id;
    
    ?>



<div class="container bg-#f8f8f8 mt-4 ">
 <form action="<?php echo base_url('home/createcart') ?>" method="POST">
      <div class="row">
             <section class="col-lg-6 col-md-6 py-3">
                        <div class="card w-100" style="height:500px;">
                            <div class="card-body">
                                <center class="image-container">
                                   <img class="" style="width:60%; height:400px;" src="<?='http://localhost/tutorial_class/assets/sellers_uploads/'.json_decode($getsingleprod->file_name)?>">
                                   <input type="hidden" id="prod_image" name="prod_image" value="<?=json_decode($getsingleprod->file_name)?>">
                                </center>
                                
                            </div>
                        </div>
             </section>
             <section class="col-lg-6 col-md-6 py-3">
             <input type="hidden"  name="prod_id" id="id" value="<?=$getsingleprod->id?>">
              <div class="text-success text-center"> <?=$this->session->flashdata('success')?></div>
                 <?=$this->session->unset_userdata('success')?>

                        <div class="card" id="prod-cover">
                            <div class="card-body">
                            <?php $prodprice = $this->db->get_where('tbl_sellers_products',array('sell_prod_id'=>$getsingleprod->prod_id))->row(); ?>
                            <h5 class="text-left text-dark  mb-4"> <?=$prodprice->prod_name?></h5>
                            <h5 class="text-left text-succes"> <?="&#x20A6;".number_format(($prodprice->prod_price ),2)?>  </h5>
                            <h5 class="text-left text-danger" style="text-decoration:line-through"> <?="&#x20A6;".number_format(($getsingleprod->prod_price+1000),2)?>  </h5>
                                <input type="hidden" id="prod_name" name="prod_name" value="<?=$prodprice->prod_name?>">
                                <input type="hidden" id="prod_price" name="prod_price" value="<?=$prodprice->prod_price?>">
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
                          <button type="submit"  class="border-0 text-light pt-2 pb-2 w-100 mt-2"  style="background:#8e54e9;"><a href="<?=base_url('home')?>" class="text-light text-decoration-none"> Continue Shopping </a> </button>
                        <div class="row justify-content-center"> 
                            <p class="text-center mt-4 mb-4">  OR  </p> 
                           
                            <div class="col-md-2"> 
                            <?php $user_details = $this->db->get_where('tbl_sellers',array('id'=>$getsingleprod->seller_id))->row(); ?>
                             <input type="hidden" id="seller_id" value="<?=$getsingleprod->seller_id?>">
                                 <img class="" style="width:70%; height:60px;border-radius:150%;" src="<?='http://localhost/tutorial_class/assets/sellers_uploads/'.$user_details->userfile?>">
                                </div>
                            <div class="col-md-6 mt-3">  <?=(ucfirst($user_details->firstname))."  ".(ucfirst($user_details->lastname))." ( "." Seller )"?> </div>
                                <?php if($this->session->logged_in) {  ?>
                               <div class="row w-70 mt-4">
                                 <form action="<?=base_url('home/chart_with_seller')?>" method="POST">
                                    <input type="hidden" name="seller_id" id="seller_id" value="<?=$getsingleprod->seller_id?>">
                                    <input type="hidden" name="prod_id" id="prod_id" value="<?=$getsingleprod->prod_id?>">
                                    <input type="hidden" name="user_id" id="user_id" value="<?=$this->session->userid?>">
                                         <!-- <textarea rows="4" name="comment" id="comment">Type chart..........</textarea> -->
                                         <div class="card rounded shadow mb-2 border-0" style="width:25rem;margin:auto;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <?php  foreach($getchart as $chartrow){ ?>
                                                      <?php if($chartrow->prod_id >'0'){ ?>
                                                        <?php $img_cust =  $this->db->get_where('users',array('userid'=>$this->session->userid))->row();?>
                                                        <p class=" text-light p-2 mt-2 mb-2 text-center" style="border-top-left-radius:20px; border-bottom-right-radius:20px;width:35%; background:#8e54e9;"> 
                                                           <img src="<?=base_url('assets/uploads/'.$img_cust->userfile)?>" class="card-img-top w-25" alt="..." style="position:relative;right:10px;bottom:10px;border-radius:50%;"> 
                                                           <?=$chartrow->coment?>
                                                     <p>  <?=$chartrow->date_time?></p> 
                                                    </p>
                                                   
                                               <?php }else if($chartrow->prod_id =='0'){?>
                                                    <?php $img =  $this->db->get_where('tbl_sellers',array('id'=>$this->session->seller_id))->row()->userfile;?>
                                                    <p class="bg-light text-dark  p-2 mt-2 mb-2 text-center" style="position:relative;left:220px;border-top-left-radius:20px; border-bottom-right-radius:20px;width:30%"> 
                                                         <img src="<?=base_url('assets/sellers_uploads/'.$img)?>" class="w-25" style="position:relative;right:30px;bottom:10px;border-radius:50%;"> 
                                                    <?=$chartrow->coment?>
                                                    </p>
                                                    <p style="position:relative;left:75%;"> <?=$chartrow->date_time?></p> 
                                                    
                                              <?php }?>
                                          <?php }?>
                                            </div>
                                         </div>
                                         <!-- end --> 
                                        <div class="card-body">
                                            <div class="row justify-content-center ">
                                               <div class="col-md-7" style="position:relative;left:20px;">
                                                <input type="text"  class="form-control w-100" name="comment" id="comment" placeholder=" Type text">
                                            </div>
                                            <div class="col-md-2">
                                                  <button type="submit" class="btn btn-primary" style="position:relative;right:0px;background:#8e54e9;" id="btnchart"> <i class="fa fa-paper-plane"></i> chart  </button>
                                             </div>
                                          </div>
                                        </div>
                
                                             
                                       
                                       
                                               <!-- <button type="submit" class="mt-2 btn-secondary pt-2 pb-2 border-0 w-50" id="btnchart" style="background:#8e54e9"> Chart </button> -->
                                           

                                </form>
                                   </div>
                                   <div class="row w-50 mt-4">
                                    <center>
                                        <h5> Safty Tips </h5> 
                                    <ul>
                                       <li>  Don't pay in advance, including for delivery</li>
                                      <li>  Meet the seller at a safe public place</li>
                                       <li>  Inspect the item and ensure it's exactly what you want</li>
                                       <li> On delivery, check that the item delivered is what was inspected</li> 
                                       <li> Only pay when you're satisfied </li> 
                                </ul> 
                                </center>
                            </div>
                         
                           
                            <div class="row justify-content-center">
                                    <div class="col-md-6"> 
                                          <a href="<?=base_url('home/search_location/'.$getsingleprod->location)?>" class="btn mt-4 text-success" style="border:1px solid #8e54e9;"><i class="fa fa-home"></i>  Return Back  </a>
                                    </div>
                                    <div class="col-md-6">
                                           <a href="<?=base_url('home/chartseller')?>" class="btn  mt-4 text-danger" style="float:right;border:1px solid #8e54e9;"><i class="fa fa-home"></i> Report Abuse </a>
                                    </div>
                                </div>
                                <?php }else{?>
                                    <a href="<?=base_url('home/chartseller/'.$getsingleprod->prod_id)?>" class="btn btn-danger mt-4"><i class="fa fa-home"></i> Chart with seller  </a>
                                  <?php } ?>
                           
                    </div>
             </section>
      </div>
  </form>
</div>



<div id="display_result'"></div>

<script>
 $(document).ready(function() {
	$('#btnsubmit').on('click', function(e) {
        console.log(seller_id);
        e.preventDefault();
        var prod_id = $('#id').val();
		var prod_name = $('#prod_name').val();
		var prod_price = $('#prod_price').val();
        var quantity = $('#quantity').val();
        var color = $('#color').val();
        var size = $('#size').val();
        var prod_image = $('#prod_image').val();
        var seller_id = $('#seller_id').val();
		if(quantity!=""){
			$("#butsave").attr("disabled", "disabled");
			$.ajax({
				  url: "<?php echo base_url("home/buy_from_seller");?>",
				type: "POST",
				data: {
					type: 1,
					prod_id,
					prod_name,
                    prod_price,
                    quantity,
                    color,
                    size,
                    prod_image,
                    seller_id
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

					}else if(res==400){
                         alert(' Please login or create an  account');
                         window.location = "<?=base_url('home/custlogin')?>";
                    }


				}
			});
		}else if(quantity==""){
			 alert('Please select the quantity of items !');
            //$('#error').html('please fill all entries !');
		}

	});



// chart with seller script 
         $('#btnchart').on('click', function(e) {
             e.preventDefault();
             var seller_id = $('#seller_id').val();
             var prod_id = $('#prod_id').val();
             var user_id = $('#user_id').val();
             var comment = $('#comment').val();
             if(comment!=""){
                 $("#butsave").attr("disabled", "disabled");
             $.ajax({
                    url: "<?php echo base_url("home/chart_with_seller");?>",
                     type: "POST",
                   data: {
                         type: 1,
                         seller_id,
                         prod_id,
                         user_id,
                         comment
                     },
                     cache: false,
                     success: function(res){

                         if(res==true){
                             alert(' comment inserted');
                             $('#display_result').html(data); 
                             }else{
                             alert(' cannot insert');
                             }

            


                     }
                 });
              }else if(quantity==""){
                 alert('Please select the quantity of items !');
                 //$('#error').html('please fill all entries !');
             }

         });
        // // close chart 

        // get data
                $.ajax({
                url: "<?php echo base_url("home/chart_with_seller");?>",
                type: "POST",
                cache: false,
                success: function(data){
                    //alert(data);
                    $('#table').html(data); 
                }
            });


});




</script>




