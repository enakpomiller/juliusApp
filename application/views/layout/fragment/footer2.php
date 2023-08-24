

<style> 

.footer{
   width:100%;
   position:relative;
   right:8px;
   height:500px;
   top:50px;
   padding:40px 20px;;
   background:black;

}
.footer-nav{
  position:relative;
  top:80px;
  text-align: center;
}

.news-letter{
  position:relative;
  top:100px;
  text-align: center;
  color:white;
  font-size: 2rem;
  font-family: sans-serif;
}
.input-footer{
    position:relative;
    width:30%;
    padding:15px 20px;
    border-radius:4px;
    border: 2px solid sandybrown;

}
.footer-btn{
  background: #ca0404;
  position:relative;
  left:2px;
  color:white;
  padding:16px;
  border:1px solid sandybrown; 
}
</style>



<div class="footer">
        <p class="news-letter text-light"> NewsLetter </p>
   <div class="footer-nav">
     <input type="text" name="subscribe" placeholder=" Enter your email " class="input-footer pt-2 pb-2">
     <button class="footer-btn bg-danger text-light pt-2 pb-2"> subscribe </button>
  </div>
</div>



</body>
</html>
<script src="<?=base_url()?>assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>