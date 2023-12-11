

 <div class="container mt-4">
         <div class="row  w-50 " style="margin:auto;position:relative;top:50px;margin-bottom:50px;left:90px;">
          
            <?php if($this->session->flashdata('msg_error')){?>
                    <div id="error" class="text-danger"><?=$this->session->flashdata('msg_error')?></div>
                    <?=$this->session->unset_userdata('msg_error')?>
            <?php }?>
             <div class="text-danger"> <?=$msg_notice ?>  </div>
                 <h2 class="text-left">  <?=$title?> </h2>
            <form action="<?=base_url('home/seller_buy_login/'.$this->uri->segment(3))?>" method="POST">
                <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="email" placeholder=" Enter Email" id="email" class="form-control pt-2 pb-2 mt-4" style="width:80%;">
                </div>
                <div class="form-group">
                    <label class="mt-4"> Password </label>
                    <input type="password"  name="password" placeholder=" Enter Password" id="password" class="form-control pt-2 pb-2 mt-4" style="width:80%;">
                </div>
                <div class="form-group mt-4">
                    <button type="submit" id="btnsubmit" class="btn  text-light" style="width:80%;background:#ef5f21;"> Login </button>
                </div>
           </form>
                <a href="<?=site_url('home/signup')?>" class="text-decoration-none mt-2"> Don't  Have An Account </a>
        </div>
</div>



<!-- <form>
    <input type="text" id="inputNumber" name="inputNumber">
    <span id="result"></span>
    <?php $msg = 200 ?>
</form> -->

<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const inputNumber = document.getElementById('inputNumber');
    //     const resultElement = document.getElementById('result');

    //     inputNumber.addEventListener('input', function() {
    //         calculateResult();
    //     });

    //     function calculateResult() {
    //         const inputValue = parseFloat(inputNumber.value);
    //         if (!isNaN(inputValue)) {
    //             const result = inputValue - <?=$msg?>; // Perform your calculation here
    //             resultElement.textContent = 'Result: ' + result;
    //         } else {
    //             resultElement.textContent = ''; // Clear result if input is not a number
    //         }
    //     }
    // });
</script>








