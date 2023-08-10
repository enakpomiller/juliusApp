
     <style> 
        .fix-image{
        background:url('<?=base_url()?>assets/images/cloth2.jpeg');
        height:500px;
        background-size: cover;
        background-attachment:fixed;
        margin-top:100px;
        filter: brightness(35%);
        }
        .inner{
          position:absolute;
          top:0px;
          left:0px; right:0px;
        }
    </style>

<div class="container">

    <!-- Block level -->
    <p class="text-uppercase text-center  fs-2" style="margin-top:100px;"> Shopping online store for you </p>

    <div class="row d-flex justify-content-center gap-3">
            <p class="text-uppercase text-center  fs-6"> view our latest collections</p>
            <div class="col-md-2 w-25" style="overflow:hidden;">
                    <img src="<?=base_url()?>assets/images/cloth2.jpeg" style="height:300px;">
                    <p class="text-center"> shrit </p>
            </div>
            <div class="col-md-2 w-25" style="overflow:hidden;">
            <img src="<?=base_url()?>assets/images/cloth2.jpeg"  style="height:300px;">
            <p class="text-center"> shrit </p>
            </div>
            <div class="col-md-2 w-25" style="overflow:hidden;">
            <img src="<?=base_url()?>assets/images/cloth2.jpeg"  style="height:300px;">
            <p class="text-center"> shrit </p>
            </div>

     </div> 

     <p class="text-uppercase text-center  fs-5" style="margin-top:20px;"> featured collection</p>

    <div class="row d-flex justify-content-center gap-3">
            <!-- slider carousel --> 
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                                <div class="carousel-item active text-center">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg" class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                </div>
                                <div class="carousel-item text-center">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg" class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                </div>
                                <div class="carousel-item text-center">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg" class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                        <img src="<?=base_url()?>assets/images/cloth2.jpeg"  class="w-25" style="height:300px;">
                                </div>
                        </div>
                </div>
           <!-- end slider carousel --> 
     </div>
</div>


<div class="fix-image">

</div>


<p class="text-uppercase text-center  fs-5" style="margin-top:50px;"> do your shopping with us </p>









