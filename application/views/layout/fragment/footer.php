
<style> 

.news-letter{
  position:relative;
  top:100px;
  text-align: center;
  color:white;
  font-size: 2rem;
  font-family: sans-serif;
}

.footer-btn{
  background: #ca0404;
  position:relative;
  left:3px;
  color:white;
  padding:16px;
  border:1px solid sandybrown;
}

.input-footer{
    position:relative;
    width:30%;
    padding:15px 20px;
    border-radius:4px;
    border: 2px solid sandybrown;

}
</style>

<div class="footer">
        <p class="news-letter text-warning"> News Letter </p>
   <div class="footer-nav">
     <input type="text" name="" placeholder=" Enter your email address" class="input-footer">
     <button class="footer-btn bg-dark text-warning"> subscribe </button>
  </div>
</div>



</body>
</html>

<script src="<?=base_url()?>assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>