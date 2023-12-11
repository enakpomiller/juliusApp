
<style>

.scr{
 overflow:scroll;
}
</style>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <div class="app-main" id="main">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin row -->
                    <div class="row">
                        <div class="col-md-12 m-b-30">
                            <!-- begin page title -->
                            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                    <h1> <?=$title?> </h1>
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
                    <div class="row mt-4 mb-4" style="">
                    
                        <div class="col-xxl-12 mt-10 " style="height:1000px;">
                            <div class="card card-statistics  m-b-0  mt-4 mb-4">
                                 <div class="card-header d-flex justify-content-between">
                                       <div class="card-heading">
                                          <h4 class="card-title"> Chart  analysis   </h4>
                                       </div>
                                 </div>
                                    



                         <form action="<?=base_url('sellers/chartcustomer')?>" method="POST"  enctype="multipart/form-data"   class="pl-4 pr-4  col-md-8 mt-4" style="margin:auto;"> 
                                 <div class="card shadow rounded mb-4" style="width: 30rem;margin:auto;">
                                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                                      <h4 class="pl-4 mt-2"> <?=(ucfirst($this->session->fname)."<p> Online")?> </h4> 
                                    <div class="card-body">
                                      <?php  if($getchart){?>  
                                              <?php foreach($getchart as $chartrow){?>
                                                      <?php if($chartrow->prod_id >'0'){ ?>
                                                        <?php $img_cust =  $this->db->get_where('users',array('userid'=>$this->session->userid))->row();?>
                                                        <p class="bg-primary text-light p-2 mt-2 mb-2 text-center" style="border-top-left-radius:20px; border-bottom-right-radius:20px;width:35%"> 
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
                                            <?php } ?>
                                    </div>
                                      <div class="card-body">
                                           <div class="row">
                                              <div class="col-md-10">
                                                   <input type="hidden" name="seller_id" value="<?=$this->session->seller_id?>">
                                                  <input type="hidden" name="buyer_id" value="<?=$this->session->userid?>">
                                                  <input type="text"  name="chart_to_cust"  class="form-control rounded border-0"  placeholder="Type Message">
                                              </div>
                                            <div class="col-md-2">
                                                   <button type="submit" class="btn btn-primary pt-2 pb-3 ml-4" style="position:relative;right:30px;"> <i class="fa fa-paper-plane"></i> </button>
                                                 </div>
                                           </div>
                                 <?php }else{?>
                                    <h5 class="mt-4"> No Chart Yet  </h5> 
                                <?php } ?>
                                        
                                    </div>
                                </div>

                         </form>
                        </div>
                  </div> 
                </div>
                </div>
            </div>
         </div>







         <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
        // Add more sets of fields
        $("#addMore").click(function() {
            var clone = $(".form-set:first").clone();
            clone.find("input").val("");
            $(".form-container").append(clone);
        });

        // Remove a set of fields
        $(".form-container").on("click", ".removeSet", function() {
            $(this).closest(".form-set").remove();
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
    // close chart 


});
</script>
