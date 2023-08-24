
     <style> 
        .fix-image{
        background:url('<?=base_url()?>assets/images/cloth2.jpeg');
        height:500px;
        background-size: cover;
        background-attachment:fixed;
        margin-top:100px;
        //filter: brightness(35%);
        background-color: rgba(0, 0, 0, 0.7); Semi-transparent black background
        }

        /* .text-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7); Semi-transparent black background
        color: white;
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center; */
    }
    </style>


<style> 


/* z-index the text */
.image-container {
    position: relative;
    display: inline-block; /* or use "block" if you want it to take full width */
    /* background:url('<?=base_url()?>assets/images/cloth2.jpeg'); */
}

.image-container img {
    max-width: 100%;
    height: auto;
    display: block;
}

.text-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
    color: white;
    padding: 20px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    height:500px;
}

.text-overlay h1,
.text-overlay p {
    margin: 0;
    padding: 0;
}


</style>

<div class="container">

    <!-- Block level -->
    <p class="text-uppercase text-center  fs-2" style="margin-top:100px;"> Shopping online store for you </p>

    <div class="row d-flex justify-content-center gap-3">
            <p class="text-uppercase text-center  fs-6"> view our latest collections</p>
            <div class="col-md-2 w-25" style="overflow:hidden;">
                <img src="<?=base_url()?>assets/images/pi3.jpeg" class="w-100" style="height:300px;border-radius:5px;">
                <p class="text-center"> shrit </p>
                <a href="" class=" d-flex justify-content-center pt-2 pb-2 text-light" style="background:#ef5f21;"> Add to cart </a>
            </div>
            <div class="col-md-2 w-25" style="overflow:hidden;">
            <img src="<?=base_url()?>assets/images/pi3.jpeg" class="w-100" style="height:300px;border-radius:5px;">
              <p class="text-center"> shrit </p>
              <a href="" class=" d-flex justify-content-center pt-2 pb-2 text-light" style="background:#ef5f21;"> Add to cart </a>
            </div>
            <div class="col-md-2 w-25" style="overflow:hidden;">
            <img src="<?=base_url()?>assets/images/pi3.jpeg" class="w-100" style="height:300px;border-radius:5px;">
            <p class="text-center"> shrit </p>
            <a href="" class="d-flex justify-content-center pt-2 pb-2 text-light" style="background:#ef5f21;"> Add to cart </a>
            </div>
     </div> 

     <p class="text-uppercase text-center  fs-5" style="margin-top:20px;"> featured collection</p>

    <div class="row d-flex justify-content-center gap-3">
            <!-- slider carousel --> 
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                                <div class="carousel-item active text-center">
                                       <a href="">
                                         <img src="<?=base_url()?>assets/images/cloth2.jpeg" class="w-25" style="height:300px;">
                                      </a>
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                </div>
                                <div class="carousel-item text-center">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg" class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                </div>
                                <div class="carousel-item text-center">
                                        <img src="<?=base_url()?>assets/images/pi3.jpeg" class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/pi3.jpeg"  class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/pi3.jpeg"  class="w-25" style="height:300px;">
                                </div>
                        </div>
                </div>
           <!-- end slider carousel --> 
     </div>
</div>





<div class="fix-image"> 
    <div class="text-overlay" style="position:relative;top:0px;">
        <h1> We sell all kinds of wears</h1>
        <p>Description or additional clothing style </p>
    </div>
</div>


<!-- <div class="image-container">
      <img src="<?=base_url('assets/images/cloth2.jpeg')?>" alt="Your Image"> 
    <div class="text-overlay">
        <h1>Your White Text</h1>
        <p>Description or additional text</p>
    </div>
</div> -->





<p class="text-uppercase text-center  fs-5" style="margin-top:50px;"> do your shopping with us </p>









