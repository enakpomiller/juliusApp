
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

                     <?php if($this->session->usertype=='admin') {?>
                              
                    <div class="row mb-4">
                        <div class="col-xxl-12 mt-10" style="height:600px;">
                            <div class="card card-statistics h-100 m-b-0 ">
                        
                                 <?php if($this->session->flashdata('msg_createprod')){ ?>
                                 <div class="text-center alert alert-success w-100">
                                    <?=$this->session->flashdata('msg_createprod')?>
                                    <?=$this->session->unset_userdata('msg_createprod')?>
                                 </div>
                                 <?php }else{?>
                                    <div class="text-center mt-4"> Create Products </div>
                                  <?php } ?>

                             <form action="<?=base_url('admin2/create')?>" method="POST"  enctype="multipart/form-data"   class="pl-4 pr-4  col-md-8 mt-4" style="margin:auto;"> 
                             <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Category</label>
                                    <select name="category" class="form-control">
                                        <option>  --- select -- </option>
                                        <option value="shirt"> Shirt </optin>  
                                        <option value="jeans"> Jeans </optin> 
                                        <option value="shoes"> Shoes </optin>  
                                        <option value="electronics"> Electronics </optin>  
                                        <option value="bags"> Bags </optin>  
                                 </select>
                            </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" required name="prodname" id="prodname" class="form-control"  placeholder=" Product Name" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Image</label>
                                    <input type="file" required name="userfile" id="userfile" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"> Price </label>
                                    <input type="text" required name="prodprice" id="prodprice" class="form-control" placeholder=" Product Price">
                                </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Product Details </label><br>
                                <textarea cols="100" required rows="5" name="prod_details"></textarea>
                            </div>
                      
                            <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit </button>
                            </div>
                        </form>
                    </div>
                  </div>
                     <?php }else {?>





                             
                    <div class="row mt-4">
                        <div class="col-xxl-12 mt-10" style="height:600px;">
                            <div class="card card-statistics h-100 m-b-0 ">
                                 <div class="card-header d-flex justify-content-between">
                                       <div class="card-heading">
                                          <h4 class="card-title"> Seller Module    </h4>
                                       </div>
                                 </div>
                                 <?php if($this->session->flashdata('msg_createprod')){ ?>
                                 <div class="text-center alert alert-success w-100">
                                    <?=$this->session->flashdata('msg_createprod')?>
                                    <?=$this->session->unset_userdata('msg_createprod')?>
                                 </div>
                                 <?php }else{?>
                                    <div class="text-center mt-4"> Create Products </div>
                                  <?php } ?>

                             <form action="<?=base_url('sellers/create_item')?>" method="POST"  enctype="multipart/form-data"   class="pl-4 pr-4  col-md-8 mt-4" style="margin:auto;"> 
                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Location/State</label>
                                    <input type="text" required name="location" class="form-control"  id="exampleInputPassword1">
                                 </div>
                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category</label>
                                    <select name="category" class="form-control">
                                        <option >  --- select -- </option>
                                        <option value="shirt"> Shirt </optin>  
                                        <option value="shoes"> Shoes </optin>  
                                        <option value="electronics"> Electronics </optin>  
                                        <option value="bags"> Bags </optin>  
                                 </select>
                                 </div>
                                 <div class="events-details-form faq-area-form mb-30 p-0">
                                    <div class="form-group">
                                        <input type="file" required class="form-control" style="width:99%;" name="files[]" multiple/>
                                    </div>
                                </div>
                                 <!-- form repeater --> 
                                 <div class="form-container">
                                       <div class="form-set">
                                             <input type="text" require require style="width:43%;" class="pt-2 pb-2 mt-2 mb-2" name="prod_name[]" placeholder=" Product Name">
                                             <input type="text" required  style="width:43%;" class="pt-2 pb-2 mt-2 mb-2"  name="prod_price[]" placeholder="Product Price ">
                                             <button type="button" require class="removeSet btn btn-danger">Remove</button>
                                       </div>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary mt-2 mb-4">Upload Market</button> -->
                                    <input class="form-control btn btn-primary mt-2 mb-4" type="submit" style="width:40%;" name="fileSubmit" value="UPLOAD"/>
                                    <button type="button"  class="btn btn-info mt-2 mb-4" id="addMore" style="float:right;">Add More</button>

                                 <!-- end repeater --> 
                                </form>
                        </div>
                  </div>
                       <?php } ?>
 
                  
                  
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
});
</script>
