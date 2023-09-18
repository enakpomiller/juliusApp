
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

.x:hover{
  border:1px solid #ef5f21;
}
</style>

<div class="container">

    <!-- Block level -->
    <p class="text-uppercase text-center  fs-2" style="margin-top:100px;"> Shopping online store for you </p>
    <p> Product Listing </p>

                <div class="row">
                    <?php  foreach ($allprod as $prod) {?>
                            <section class="col-lg-3 col-md-6 py-3">
                                <div class="card x" id="prod-cover">
                                    <div class="card-body">
                                    <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img   src="<?='http://localhost/tutorial_class/assets/uploads/'.$prod->prod_image?>" class="w-100" style="height:300px;"></a>
                                    </div>
                                    <h5 class="text-center"> <?=$prod->prod_name?>  </h5>
                                    <h5 class="text-center"> <?="&#x20A6;".number_format(($prod->prod_price),2)?>  </h5>
                                    <a href="<?=base_url('home/buyprod/'.$prod->id)?>" class="text-center  pt-2 pb-2  text-light" style="text-decoration:none;background:#ef5f21;"> Buy Item </a>
                                </div>
                            </section>
                            
                    <?php }?>
                </div>

     <p class="text-uppercase text-center  fs-5" style="margin-top:20px;"> featured collection</p>
          <div class="row d-flex justify-content-center gap-3">
            <!-- slider carousel --> 
                 <div id="carouselExampleSlidesOnly" class="carousel slide  mt-4" data-bs-ride="carousel">
                               <div class="carousel-inner">
                                        <div class="carousel-item active text-center">
                                            <a href="<?=base_url('home/buyprod/'.$allprod[0]->id)?>"> <img     src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[0]->prod_image?>"  style="height:200px;width:20%;"></a>
                                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img   src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[1]->prod_image?>"  style="height:200px;width:20%;"></a>
                                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img    src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[2]->prod_image?>"  style="height:200px;width:20%;"></a>
                                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img    src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[0]->prod_image?>"  style="height:200px;width:20%;"></a>
                                        </div>
                           
                                           <div class="carousel-item text-center">
                                           <a href="<?=base_url('home/buyprod/'.$allprod[3]->id)?>"> <img    src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[3]->prod_image?>"  style="height:200px;width:20%"></a>
                                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img    src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[4]->prod_image?>"  style="height:200px;width:20%"></a>
                                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img    src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[5]->prod_image?>"  style="height:200px;width:20%"></a>
                                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img    src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[0]->prod_image?>"  style="height:200px;width:20%"></a>
                                           </div> 
                                           <div class="carousel-item text-center">
                                           <a href="<?=base_url('home/buyprod/'.$allprod[6]->id)?>"> <img     src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[6]->prod_image?>"  style="height:200px;width:20%"></a>
                                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img    src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[7]->prod_image?>"  style="height:200px;width:20%"></a>
                                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img    src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[2]->prod_image?>"  style="height:200px;width:20%"></a>
                                            <a href="<?=base_url('home/buyprod/'.$prod->id)?>"> <img    src="<?='http://localhost/tutorial_class/assets/uploads/'.$allprod[0]->prod_image?>"  style="height:200px;width:20%"></a>
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









