


<div class="container w-50" style="margin-top:70px;margin-bottom:40px;">
    <div class="row">
            <div class="text-success">
                    <?=$this->session->flashdata('success')?>
                    <?php $this->session->unset_userdata('success') ?>
            </div>
        <div class="col-md-6">
           <?php echo form_open_multipart('home/signup');?>
                <h1> <?=$title?></h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" name="firstname" value="<?=set_value('firstname')?>" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div class="text-danger"><?=form_error('firstname')?> </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Other Names</label>
                    <input type="text" name="othernames" value="<?=set_value('othernames')?>" class="form-control w-100" id="exampleInputPassword1">
                    <div class="text-danger"><?=form_error('othernames')?> </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text"  name="email" value="<?=set_value('email')?>" class="form-control w-100" id="exampleInputPassword1">
                    <div style="color: red;"> <?=form_error('email')?></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Profile Pix </label>
                    <input type="file"  name="userfile"  class="form-control w-100" id="exampleInputPassword1">
                    <div style="color: red;"> <?=form_error('email')?></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control w-100" id="exampleInputPassword1">
                    <div class="text-danger"><?=form_error('password')?> </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="text"  name="passconf" value="<?=set_value('confpass')?>" class="form-control w-100" id="exampleInputPassword1">
                    <div class="text-danger"><?=form_error('passconf')?> </div>
                </div>
                <button type="submit" class="btn w-100 text-light pt-2 pb-2 text-light" style="background:#ef5f21;">Submit</button>
         </form>
       </div>
   <div class="col-md-6">
     <img src="<?=base_url()?>assets/images/signup.png" class="w-100 mt-4" style="position:relative;top:80px;"> 
   </div>
</div>


</div>
