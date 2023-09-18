


<div class="container">
                <?=$title?>
          <div class="row w-50" style="margin:auto;margin-top:50px;">
          <form action="<?=site_url('admin/updateprod/'.$getoneprod->id)?>" method="post" enctype="multipart/form-data">
                <div class="form-group mt-2 mb-2">
                    <input type="text" name="prod_name" value="<?=$getoneprod->prod_name?>" class="form-control">
                </div>
                <div class="form-group mt-2 mb-2">
                   <input type="text" name="prod_price" value="<?=$getoneprod->prod_price?>"  class="form-control">
                </div>
                <div class="form-group mt-2 mb-2">
                        <textarea name="prod_details" rows="10" cols="72"><?=$getoneprod->prod_details?></textarea>
                </div>
                <div class="form-group mt-2 mb-2">
                        <img src="<?=base_url('assets/uploads/'.$getoneprod->prod_image)?>" class="w-25">
                <input type="file" name="userfile"  class="form-control">
                </div>
                <div class="form-group mt-2 mb-2">
                        <button class="btn btn-dark">   Save Changes </button>
                </div>
         </form>
        </div>
</div>