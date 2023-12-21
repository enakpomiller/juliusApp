


<div class="container mt-4" style="position:relative;top:50px;margin-bottom:100px;">
<?php if($this->session->logged_in){  ?>
   <?php if(($getcart)>0){  ?>
        <p class="text-center"> <?=$this->session->flashdata('success')?> </p>
        <?php if($this->session->logged_in) {?>
           <h4 class="" style="position:relative;left:60px;">  <?=ucfirst($this->session->firstname)."'s Cart"?></h4>
         <?php }?>



     
               <div class="row" style="width:90%;margin:auto;">
                   <div class="col-md-2"> 
                        <p class="text-center"> Product Image  </p>
                   </div> 
                   <div class="col-md-2">
                      <p class="text-center"> Product Name  </p>
                   </div>
                   <div class="col-md-2">
                      <p>Price  </p>
                   </div>
                   <div class="col-md-2" style="position:relative;right:30px;">
                      <p>Quantity </p>
                   </div>
                   <div class="col-md-2" style="position:relative;right:60px;">
                      <p> Amount  </p>
                   </div>

                   <div class="col" style="position:relative;right:60px;">
                      <p> Size </p>
                   </div>
                   <div class="col" style="position:relative;right:60px;">
                      <p class="text-center"> Action  </p>
                   </div>
               </div>

                <?php $total_sum=0;?>
                <?php $grand_sum=0;?>
   
     
        <?php foreach($getcart as $cart){ ?>
        
               <div class="row" style="width:90%;margin:auto;">
                 <hr>
                 
                    <div class="col-md-2">
                        <div class="card border-0">
                           <img class="" style="width:60%; height:150px;margin:auto;" src="<?=base_url('assets/sellers_uploads/'.$cart->prod_image)?>">
                           <!-- <img class="" style="width:60%; height:150px;margin:auto;" src="<?='http://localhost/tutorial_class/assets/uploads/'.$cart->prod_image?>"> -->
                           <?=(($cart->seller_id)>0 ?'<div class="text-center text-success">seller item</div>':'<div class="text-center text-success">store item </div>')?>
                           <i class="fa fas-trash"></i>
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
                   <div class="col" style="position:relative;right:50px;top:20px;">
                        <input type="number" class="form-control pt-2" id="setQty2125" onchange="updateQty2('125')" value="<?=$cart->qty?>" min="1" max="10" step="1" data-decimals="0" required="">
                   </div>

                  <div class="col-md-2">
                        <div class="card mt-4 border-0">
                          <p> <?="&#x20A6;".number_format(($cart->prod_price * $cart->qty),2)?> </p>
                    
                        </div>
                   </div>
                   <div class="col">
                        <div class="card mt-4 border-0">
                          <p> <?=$cart->size?> </p>
                        </div>
                   </div>
                   <div class="col">
                          <a href="<?=base_url('home/delete_item/'.$cart->id)?>" class="text-danger text-center fs-4" style="position:relative;top:17px;text-decoration:none;"  onclick="return confirm('item will be deleted ')"> X </a>
                   </div>
               </div>

                 <?php
                   $total_qty += $cart->qty;
                   $_SESSION['qty'] = $total_qty;
                   $_SESSION['num_item'] = $total_sum;
                  // $grand_sum  += $cart->prod_price * $cart->qty;
                   $grand_sum  = $cart->prod_price * $cart->qty;
                  
                 ?>   
         <?php }?>
               <div class="w-100 text-end" style="">
                     <p>  Number Of Items <?=$total_qty?> </p>
                      <?/*
                        */?>
                     <p>  TOTAL: <?="&#x20A6;".number_format($sum_total->sum)?> </p> 
                     <button class="pt-2 pb-2 pr-4 pl-4 border-0" style="background:#8e54e9;"> <a href="" class="text-light" style="text-decoration:none"><a href="<?=base_url('home')?>" class="text-decoration-none text-light"> Continue Shopping</a></a> </button>
                     <button class="pt-2 pb-2 pr-4 pl-4 border-0" style="background:#8e54e9;"> <a href="<?=base_url('home/checkout')?>" class="text-light" style="text-decoration:none"> Check Out Now </a>  </button>
            </div>
         <?php } else{ ?>
            <div class="text-center">
            <img src="<?=base_url('assets/images/cart.png')?>" style="width:20%;">
            <h1> Cart Is Empty  </h1> 
         </div>
    <?php } ?>
<?php }else{?>

    <!-- not looged in users --> 
    <?php if(($getcart)>0){  ?>
        <p class="text-center text-danger"> <?=$this->session->flashdata('msg_delete')?> </p>
        <?=$this->session->unset_userdata('msg_delete')?>
        <?php if($this->session->logged_in) {?>
           <h4 class="" style="position:relative;left:60px;">  <?=ucfirst($this->session->firstname)."'s Cart"?></h4>
         <?php }?>



     
               <div class="row" style="width:90%;margin:auto;">
                   <div class="col-md-2"> 
                        <p class="text-center"> Product Image  </p>
                   </div> 
                   <div class="col-md-2">
                      <p class="text-center"> Product Name  </p>
                   </div>
                   <div class="col-md-2">
                      <p>Price  </p>
                   </div>
                   <div class="col-md-2" style="position:relative;right:30px;">
                      <p>Quantity </p>
                   </div>
                   <div class="col-md-2" style="position:relative;right:60px;">
                      <p> Amount  </p>
                   </div>

                   <div class="col" style="position:relative;right:60px;">
                      <p> Size </p>
                   </div>
                   <div class="col" style="position:relative;right:60px;">
                      <p class="text-center"> Action  </p>
                   </div>
               </div>

                <?php $total_sum=0;?>
                <?php $grand_sum=0;?>
   
     
        <?php foreach($getcart as $cart){ ?>
        
               <div class="row" style="width:90%;margin:auto;">
                 <hr>
                 
                    <div class="col-md-2">
                        <div class="card border-0">
                           <img class="" style="width:60%; height:150px;margin:auto;" src="<?=base_url('assets/sellers_uploads/'.$cart->prod_image)?>">
                           <!-- <img class="" style="width:60%; height:150px;margin:auto;" src="<?='http://localhost/tutorial_class/assets/uploads/'.$cart->prod_image?>"> -->
                           <?=(($cart->seller_id)>0 ?'<div class="text-center text-success">seller item</div>':'<div class="text-center text-success">store item </div>')?>
                           <i class="fa fas-trash"></i>
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
                   <div class="col" style="position:relative;right:50px;top:20px;">
                        <input type="number" class="form-control pt-2" id="setQty2125" onchange="updateQty2('125')" value="<?=$cart->qty?>" min="1" max="10" step="1" data-decimals="0" required="">
                   </div>

                  <div class="col-md-2">
                        <div class="card mt-4 border-0">
                          <p> <?="&#x20A6;".number_format(($cart->prod_price * $cart->qty),2)?> </p>
                    
                        </div>
                   </div>
                   <div class="col">
                        <div class="card mt-4 border-0">
                          <p> <?=$cart->size?> </p>
                        </div>
                   </div>
                   <div class="col">
                          <a href="<?=base_url('home/delete_tempt_item/'.$cart->id)?>" class="text-danger text-center fs-4" style="position:relative;top:17px;text-decoration:none;"  onclick="return confirm('item will be deleted ')"> X </a>
                   </div>
               </div>

                 <?php
                   $total_qty += $cart->qty;
                   $_SESSION['qty'] = $total_qty;
                   $_SESSION['num_item'] = $total_sum;
                  // $grand_sum  += $cart->prod_price * $cart->qty;
                   $grand_sum  = $cart->prod_price * $cart->qty;
                  
                 ?>   
         <?php }?>
               <div class="w-100 text-end" style="">
                     <p>  Number Of Items <?=$total_qty?> </p>
                      <?/*
                        */?>
                     <p>  TOTAL: <?="&#x20A6;".number_format($sum_total->sum)?> </p> 
                     <button class="pt-2 pb-2 pr-4 pl-4 border-0" style="background:#8e54e9;"> <a href="" class="text-light" style="text-decoration:none"><a href="<?=base_url('home')?>" class="text-decoration-none text-light"> Continue Shopping</a></a> </button>
                     <button class="pt-2 pb-2 pr-4 pl-4 border-0" style="background:#8e54e9;"> <a href="<?=base_url('home/checkout')?>" class="text-light" style="text-decoration:none"> Check Out Now </a>  </button>
            </div>
         <?php } else{ ?>
            <div class="text-center">
            <img src="<?=base_url('assets/images/cart.png')?>" style="width:20%;">
            <h1> Cart Is Empty  </h1> 
         </div>
    <?php } ?>
    <?php } ?>
    <!--  close --> 

</div>

            


<!-- <input type="number" id="inputNumber" name="inputNumber">
 <input type="text" id="result">  -->

<script>
   //  document.addEventListener('DOMContentLoaded', function() {
   //      const inputNumber = document.getElementById('inputNumber');
   //      const resultElement = document.getElementById('result');

   //      inputNumber.addEventListener('input', function() {
   //          calculateResult();
   //      });

   //      function calculateResult() {
   //          const inputValue = parseFloat(inputNumber.value);
   //          if (!isNaN(inputValue)) {
   //                //  const result =  inputValue * 2; // Perform your calculation here
   //                const result =  inputValue * 2;
   //                 document.getElementById("result").value = resultElement.textContent = 'Result: ' + result;
   //                // resultElement.textContent = 'Result: ' + result;
   //          } else {
   //              resultElement.textContent = ''; // Clear result if input is not a number
   //          }
   //      }
   //  });
</script>