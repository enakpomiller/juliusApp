
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


<div class="container bg-#f8f8f8 mt-4 ">
 <form action="<?php echo base_url('home/createcart') ?>" method="POST">
      <div class="row">
             <section class="col-lg-6 col-md-6 py-3">
                        <div class="card w-100" style="height:500px;">
                            <div class="card-body">
                                <center class="image-container">
                                   <img class="" style="width:60%; height:400px;" src="<?='http://localhost/tutorial_class/assets/uploads/'.$getsingleprod->prod_image?>">
                                   <input type="hidden" name="prod_image" value="<?=$getsingleprod->prod_image?>">
                                </center>
                            </div>
                        </div>
             </section>
             <section class="col-lg-6 col-md-6 py-3">
             <inout type="text" name="prod_id" value="<?=$getsingleprod->id?>">
              <div class="text-success text-center"> <?=$this->session->flashdata('success')?></div>
                 <?=$this->session->unset_userdata('success')?>
                        <div class="card" id="prod-cover">
                            <div class="card-body">
                            <h1 class="text-left text-dark  mb-4"> <?=$getsingleprod->prod_name?></h1>
                            <h5 class="text-left text-succes"> <?="&#x20A6;".number_format(($getsingleprod->prod_price),2)?>  </h5>
                            <h5 class="text-left text-danger" style="text-decoration:straightthrough"> <?="&#x20A6;".number_format(($getsingleprod->prod_price+1000),2)?>  </h5>
                                <input type="hidden" name="prod_name" value="<?=$getsingleprod->prod_name?>">
                                <input type="hidden" name="prod_price" value="<?=$getsingleprod->prod_price?>">
                                <hr>
                                <p class="font"> <?=$getsingleprod->prod_details?>  </p> 
                            </div>
                            <div class="row">
                               <div class="col-md-4" style="margin-left:50px;">
                                  Color
                                </div>
                                <div class="col-md-6">
                                   <select name="color" class="form-control">
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
                                   <select name="size" class="form-control">
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
                                    <input type="number" name="quantity" class="form-control" placeholder=" Select Quantity">
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="prod_id" value="<?=$getsingleprod->id?> " class="form-control" placeholder=" Select Quantity">
                                </div>
                                <p> 
                            </div>
                            <button type="submit"  class="border-0 text-light pt-2 pb-2" onclick="return confirm(' are you sure')"  style="background:#ef5f21;"> Add To Cart </button>
                        </div>
             </section>
      </div>
  </form>
</div>

