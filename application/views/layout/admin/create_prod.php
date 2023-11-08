


<div class="container  w-50 mt-4" style="position:relative;top:80px;left:70px;">
      <div class="text-success">
		 <?=$this->session->flashdata('success')?>
		 <?=$this->session->unset_userdata('success')?>
		</div>
       <?php echo form_open_multipart('admin/create');?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
            <input type="text" required name="prodname" id="prodname" class="form-control"  placeholder=" Product Name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Product Image</label>
            <input type="file" required name="userfile" id="userfile" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Price </label>
            <input type="text" required name="prodprice" id="prodprice" class="form-control" placeholder=" Product Price">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Product Details </label><br>
              <textarea cols="80" required rows="5" name="prod_details"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Cartegory</label><br>
            <input type="text" required name="cartegory" id="prodprice" class="form-control" placeholder=" Cartegorye">
        </div>
          <button type="submit" id="btnsubmit" class="btn btn-dark"> Create </button>
      </form>

</div>




<script src="<?=base_url()?>assets/js/jquery.js"></script>

<script>
// 	$(document).ready(function() {
// 		$('#btnsubmit').on('click', function() {
// 			var prodname = $('#prodname').val();
// 			var userfile = $('#userfile').val();
// 			var prodprice = $('#prodprice').val();

// 			if(prodname!="" && userfile!="" || prodprice!=""){
// 				$("#butsave").attr("disabled", "disabled");
// 				$.ajax({
// 					url: "<?php echo base_url("admin/create");?>",
// 					type: "POST",
// 					data: {
// 						type: 1,
// 						prodname,
// 						userfile,
// 						prodprice
// 					},
// 					cache: false,
// 					success: function(res){
// 					if(res==true){
// 					 alert(' product created ');
// 					}
// 					else if(res==false){
//                         location.reload();
// 					   alert(" Wrong Username Or Password!");

// 					}

// 				}
// 			});

// 		}else{
// 			// alert('Please fill all the field !');
//         $('#error').html('please fill all entries !');
// 		}
// 	});


// });
</script>
