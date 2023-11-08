



    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Stylesheets-->

<style media="screen">
      *,
    *:before,
    *:after{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
body{
    //background-color: #0855ae;

}
.popup{
    background-color: #ffffff;
    width: 550px;
    padding: 30px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: none;
    text-align: center;
}
.popup button{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #ffffff;
    background: #03549a;
    border-radius: 100%;
    width: 40px;
    height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup h2{
  margin-top: -20px;
}
.popup p{
    font-size: 14px;
    text-align: justify;
    margin: 20px 0;
    line-height: 25px;
}
.b{
    display: block;
    width: 150px;
    position: relative;
    margin: 10px auto;
    text-align: center;
    background-color: #23419b;
    border-radius: 8px;
    color: #ffffff;
    text-decoration: none;
    padding: 8px 0;
  }
  .b:hover{
    color:white;
   }
    </style>

<style>
.image-container {
    width: 200px; /* Adjust to your image size */
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
  if(isset($_COOKIE['"shopping_cart"'])){
     $total =0;
     $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
     $cart_data = json_decode($cookie_name,true);
     foreach($cart_data  as $key){
         echo $key['item_name'];
     }

  }else{

     echo " not item in cart ";
  }
 ?>

<a href="<?=base_url('home/delete_cookie')?>">  delete cookie  </a><br>

<a href="<?=base_url('home/display_cookie')?>">  display cookie  </a>


    <div class="popup">
        <button id="close">&times;</button>
        <h2 class="pt-4"> ATYCARE INITIATIVE ESSAY COMPETITION 1.0 </h2>
        <p>
        Parents and guardians, an exciting opportunity to nurture your child's writing talent this summer!
        The Atycare Initiative is hosting an essay writing contest for students ages 6-17. This is a chance for your child to tap into their creativity, practice self-expression, and build critical thinking skills. Winners will receive great prizes too!
        The competition is open from now until August 31, 2023. Essays can cover any topic and will be judged on originality, skillful writing, and thoughtful ideas.
        As you know, writing is so important for developing young minds. Please encourage your child to apply today! Help them find their voice through writing. To register and get more details click on apply
        </p>
        <div class="image-container" style="margin:auto;">
           <a href="https://bit.ly/atycareessaycompetition1" target="blank"  class="b">Apply</a>
       </div>
    </div>



               <!-- <input type="number" id="inputNumber" name="inputNumber">
              <input type="text" id="result">  -->







<div class="container mt-4">
<div class="row  d-flex justify-content-center" style="margin-top:50px;">
    <div class="col-md-8" align="justify">
    <h1><?=$title?></h1>
            <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)
         </p>
    </div>
</div>
</div>




    <!--Script popups-->
    <script type="text/javascript">
        window.addEventListener("load", function(){
            setTimeout(
                function open(event){
                    document.querySelector(".popup").style.display = "block";
                },
                2000
            )
        });

        document.querySelector("#close").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
        });
    </script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const inputNumber = document.getElementById('inputNumber');
        const resultElement = document.getElementById('result');

        inputNumber.addEventListener('input', function() {
            calculateResult();
        });

        function calculateResult() {
            const inputValue = parseFloat(inputNumber.value);
            if (!isNaN(inputValue)) {

                  //  const result =  inputValue * 2; // Perform your calculation here
                  const result =  inputValue * 2;
                   document.getElementById("result").value = resultElement.textContent = 'Result: ' + result;
                  // resultElement.textContent = 'Result: ' + result;
            } else {
                resultElement.textContent = ''; // Clear result if input is not a number
            }
        }
    });
</script>


<!-- end -->
