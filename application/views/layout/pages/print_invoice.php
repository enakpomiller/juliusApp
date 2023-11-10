
<style>

 .body{
  background:grey;
  height:120%;
 }
 .font{
   font-style:italic;
 }
</style>

   <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="<?=base_url()?>assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="<?=base_url()?>assets/js/jquery.js"></script>
   <script src="<?=base_url()?>assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>




      <div class="body"> 
        <div  style="position:relative;background:red;width:60%;margin:auto;top:50px;">
           <div class="container bg-light">
               <h4 class="text-center pt-4 font"> <?=$title?> </h4>
             <div class="row">
                    <div class="col-md-6 mt-4" style="position:relative;left:10px;">
                       <p><?=$get_user->firstname."  ".$get_user->othernames?></p>
                       <p>  <?=$get_user->email?></p>
                       <p> Invoice No:<?='#000'.$getshippings->id?> </p>
                       
                    </div>
                    <div class="col-md-6 mt-4">
                            <p style="margin-left:65%;"> <?=$getshippings->fname."  ".$getshippings->lname?></p> 
                            <p style="margin-left:65%;"> <?=$getshippings->address?></p> 
                            <p style="margin-left:65%;"> <?=$getshippings->phone?></p> 
                            <p style="margin-left:65%;"> <?=$getshippings->country?></p> 
                    </div>
            </div>
       
           <?php if($cart_details){ ?>
               <center> <img src="<?=base_url('assets/images/paid.avif')?>"  style="width:30%;"></center>
              <h4 class="text-center mt-4 font"> 'cart items paid for  </h4>
              <p class="text-center"> on </p> 
              <p class="text-center">  <?php echo date('D-M-Y h:I:sa')." '"  ;?> </p>
              <div style="margin-left:20px;margin-right:20px;">
                    <table class="table mb-4">
                        <thead class="bg-light">
                            <tr>
                            <th scope="col">s/n</th>
                            <th scope="col">image</th>
                            <th scope="col">name</th>
                            <th scope="col"> Quantity </th>
                            <th scope="col" class="text-center">amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter =1; foreach($cart_details as $cart){?>
                            <tr>
                            <th scope="row"><?=$counter++?></th>
                            <td class=" w-25"><img src="<?=base_url('assets/uploads/'.$cart->prod_image)?>" style="width:18%;"></td>
                            <td><?=$cart->prod_name?></td>
                            <td><?=$cart->qty?></td>
                            <td class="text-center text-success"><?="&#x20A6;".($cart->prod_price)?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                </table>
                <label class="text-dark" style="float:right;"><strong>  Total:<?="&#x20A6;".number_format(($sum_total->sum),2) ?> </strong> </label>
               
                <br> 
                <p class="text-center font"> Payment was successful, please check your email </p> 
                <a href="<?=base_url('home')?>" class="btn btn-dark mt-2 mb-4"> Home </a>
                <a href="" class="btn btn-success mt-2 mb-4" style="float:right;"> Print </a>
             </div>
             <?php }else{?>
               <p>  No cart items  </p>
              <?php } ?>
             
        </div>
    </div>



<script src="<?=base_url()?>assets/js/jquery.js"></script>
