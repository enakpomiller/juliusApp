


<div class="container mt-4">

    <?php $id = $this->session->userid; ?>
    <h1>  <?=$title?></h1>
                <div class="row" style="width:80%;margin:auto;">
                   <div class="col-md-2">
                      <p>Product Image  </p>
                   </div>
                   <div class="col-md-2">
                      <p>Product Name  </p>
                   </div>
                   <div class="col-md-2">
                      <p>Price  </p>
                   </div>
                   <div class="col-md-2">
                      <p>Quantity </p>
                   </div>
                   <div class="col-md-2">
                      <p> Size </p>
                   </div>
                   <div class="col-md-2">
                      <p> Action  </p>
                   </div>

                </div>




    <?php if(($getcart)>0) {?>
        <?php foreach($getcart as $cart){ ?>
               <div class="row" style="width:80%;margin:auto;">
               <hr>
                    <div class="col-md-2">
                        <div class="card border-0">
                           <img class="" style="width:60%; height:150px;margin:auto;" src="<?='http://localhost/tutorial_class/assets/uploads/'.$cart->prod_image?>">
                        </div>
                   </div>
                   <div class="col-md-2 mt-4">
                        <div class="card border-0">
                          <p class="text-center"> <?=$cart->prod_name?> </p>
                        </div>
                   </div>
                   <div class="col-md-2">
                        <div class="card mt-4 border-0">
                        <p> <?="&#x20A6;".number_format(($cart->prod_price),2)?> </p>
                        </div>
                   </div>
                   <div class="col-md-2">
                        <div class="card mt-4 border-0">
                        <p> <?=$cart->qty?> </p>
                        </div>
                   </div>
                   <div class="col-md-2">
                        <div class="card mt-4 border-0">
                        <p> <?=$cart->size?> </p>
                        </div>
                   </div>
                   <div class="col-md-2">
                        <div class="card mt-4">
                          <a href="" class="btn btn-danger"> Remove </a>
                        </div>
                   </div>
                   
               </div>
    
   <?php } ?>
<?php } ?>


</div>
