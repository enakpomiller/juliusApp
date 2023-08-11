

<link rel="stylesheet" href="assets/css/style.css">
<style>
.slider-image{
    background:url('<?=base_url()?>assets/images/cloth2.jpeg');
    height:600px;
    background-size: cover;
    filter: brightness(35%);
}

 .inner-txt{
  position:relative;
  top:150px;
  font-size:6rem;
  color:white;
  z-index: -1;
   }

  .txt-animate{
    position:relative;
    bottom:100px;
  }
 </style>



<!-- <div class="slider-image">
   <div class="inner-txt text-center">  text </div>
</div> -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider-image"></div>
        <div class="carousel-caption d-none d-md-block">
          <h1 class="mb-4"> Classsic Collections</h1>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="slider-image d-block w-100"></div>
        <div class="carousel-caption d-none d-md-block">
          <h1> Unique Collections</h1>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="slider-image d-block w-100"></div>
        <div class="carousel-caption d-none d-md-block">
          <h1> Made For You</h1>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
