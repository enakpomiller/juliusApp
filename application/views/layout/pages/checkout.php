
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?=base_url('home/viewcart')?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Make Payment </li>
  </ol>
</nav>

<div class="container " style="position:relative;left:20px;right20px;top:30px;bottom:100px;">

    <div class="row">
       <div class="col-md-7">
       <h4> Cart Items </h4> 
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name </th>
                <th scope="col">Amount </th>
              </tr>
            </thead>
            <tbody>
            <?php $counter=1; foreach($getprod as $getprods){?>
              <tr>
                <th scope="row"><?=$counter++?></th>
                <td> <img class="" style="width:15%; height:80px;margin:auto;" src="<?='http://localhost/tutorial_class/assets/uploads/'.$getprods['prod_image']?>"></td>
                <td> <?=$getprods['prod_name']?></td>
                <td> <?="&#x20A6;".number_format($getprods['prod_price'],2)?> </td>
              </tr>
          <?php } ?>
            </tbody>
        </table>  
         <label class="text-success" style="position:relative;left:76%;top:10px;">Total: <?="&#x20A6;".$sum_total->sum?></label>
     </div>

   <div class="col-md-4" style="position:relative;left:30px;">
     <div id="error"></div>
     <h4> Shipping Details </h4> 
          <div class="form-group mt-4">
          <label> first Name </label>
          <input type="text" name="firstname" id="firstname" class="form-control pt-2 pb-2 ">
          </div>
          <div class="form-group">
          <label> Other Names </label>
          <input type="text" name="othernames" id="lastname" class="form-control pt-2 pb-2">
          </div>
          <div class="form-group">
          <label>  Email  </label>
          <input type="email" name="email" id="email" class="form-control pt-2 pb-2">
          </div>
          <div class="form-group">
          <label> Address  </label> 
          <input type="text" name="address" id="address" class="form-control pt-2 pb-2">
          </div>
          <div class="form-group">
          <label> Country</label>
          <input type="text" name="country" id="country" class="form-control pt-2 pb-2">
          </div>
          <div class="form-group mt-4">
          <button class="btn text-light w-100" onclick="action()" style="background:#ef5f21;"> Send </button>
          </div>
          </div>
     </div>
   </div>



</div>

              





<script src="<?=base_url()?>assets/js/jquery.js"></script>

<script>
 function action (){
  const fname =  $('#firstname').val();
  const lname =  $('#lastname').val();
  const email =  $('#email').val();
  const address =  $('#address').val();
  const country =  $('#country').val();
  
  if(fname ==" " || lname=="" || email =="" || address=="" || country==""){
        alert(' Please Fill All Entries');
  }else{
      //e.preventDefault();
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/create_shipment'); ?>",
          data: {
            fname,
            lname,
            email,
            address,
            country
          },
          dataType: "JSON",
          success: function(data){
            //location.reload();
            if(data == true){
              alert(' shipping details sent, please proceed to make payment');
              window.location = "<?=base_url('home/make_payment')?>";
            }

          },
          error: function() { alert("Error posting feed."); }
      });
  }
}


</script>