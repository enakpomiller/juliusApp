


<div class="container">

  



<div class="container  " style="position:relative;top:100px;left:100px;">
   <div class="text-success text-center"> <?=$_SESSION['success']?>  </div>
       <?=$this->session->unset_userdata('success')?>
         <table class="table  text-center  table-bordered " style="margin:auto;width:80%;" >
         <thead class="table-light">
            <tr>
               <th scope="col">#</th>
               <th scope="col">image</th>
               <th scope="col">Product Name</th>
               <th scope="col"> Price </th>
               <th scope="col"> Action </th>
            </tr>
         </thead>
         <tbody>
            <?php $counter=1; foreach($allproduct as $rows){  ?>
            <tr>
               <th scope="row"><?=$counter++?></th>
               <td> <img src="<?=base_url('assets/uploads/'.$rows->prod_image)?>" class="" style="width:40px;"> </td>
               <td> <?=$rows->prod_name?>  </td>
               <td> <?=$rows->prod_price?>  </td>
               <td style="width:20%;">
                   <a href="<?=base_url('admin/deleteprod/'.$rows->id)?>" class="btn btn-danger" onclick="return confirm('do you wish to delete this record')"> Delete</a> 
                   <a href="<?=base_url('admin/updateprod/'.$rows->id)?>" class="btn btn-dark"> update</a> 
                  </td>
            </tr>
       <?php } ?>
         </tbody>
         </table>

</div>
</div>