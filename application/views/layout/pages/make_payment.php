

<style> 

body {
  font-family: Sans-Serif;
}

#start-payment-button {
    cursor: pointer;
    position: relative;
    background-color: #ef5f21;
    color: #fff;
    width: 50%;
    padding: 10px;
    font-weight: 600;
    font-size: 14px;
    border-radius: 5px;
    border: none;
    transition: all .1s ease-in;
}

</style>
    
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?=base_url('home/checkout')?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Make Payment </li>
  </ol>
</nav>

 <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
                <div class="col-md-4">
                    <p class="text-center"> Amount  </p> 
                </div>
                <div class="col-md-4">
                    <p class="text-center"> Payment Method </p> 
                </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <hr>
              <p class="text-center"> <?="&#x20A6;".number_format(($_SESSION['amount']),2)?> </p> 
           </div>
         <div class="col-md-4">
              <!-- <button type="button" class="" id="start-payment-button" onclick="makePayment()">Pay with flutter wave </button> -->
              <hr>
              <input type="radio" style="position:relative;left:50px;" id="start-payment-button" onclick="makePayment()"><label style="position:relative;right:40px;"> Flutter Wave </label>  
        </div>
</div>

</div>






<script src="https://checkout.flutterwave.com/v3.js"></script>

<script>
  function makePayment() {
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-02b9b5fc6406bd4a41c3ff141cc45e93-X",
      tx_ref: "titanic-48981487343MDI0NzMx",
      amount: <?=$_SESSION['amount']?>,
      currency: "NGN",
      payment_options: "card, banktransfer, ussd",
    //   redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
    redirect_url: "<?=base_url('home/print_invoice')?>",
      meta: {
        consumer_id: 23,
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "<?=$_SESSION['recipient_email']?>",
        // email: "enakpomiller8899@gmail.com",
        phone_number: "08105650917",
          //name: "Rose DeWitt Bukater",
        name: "<?=$_SESSION['customer_names']?>",
      },
      customizations: {
        title: "The Titanic Store",
        description: "Payment for an awesome cruise",
        logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
      },
    });
  }
</script>