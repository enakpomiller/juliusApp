
         <div class="app-main" id="main">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin row -->
                    <div class="row">
                        <div class="col-md-12 m-b-30">
                            <!-- begin page title -->
                            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                    <h1> <?=$title?> </h1>
                                </div>
                                <div class="ml-auto d-flex align-items-center">
                                    <nav>
                                        <ol class="breadcrumb p-0 m-b-0">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="ti ti-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                Dashboard
                                            </li>
                                            <li class="breadcrumb-item active text-primary" aria-current="page">Real Estate</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- start real estate contant -->
       
                    <div class="row mt-4">
                              <div class="card col-md-5" style="position:relative;left:50px;">
                              <form action="<?=base_url('sellers/update_sellers')?>" method="POST">
                                 <div class="row pr-2 pl-2 justify-content-center mt-4">
                                    <?php if($getsinglerec) {  ?>
                                        <div class="form-group w-70 mt-4 ml-4">
                                           <input type="" name="" class="form-control" value="<?=$getsinglerec->prod_name?>">
                                       </div>
                                       <div class="form-group w-70  ml-4">
                                           <input type="" name="" class="form-control" value="<?=$getsinglerec->prod_price?>">
                                       </div>
                                    <?php } ?>

                                  </div> 
                                </div> 
                                <div class="card col-md-6 ml-3" style="position:relative;left:50px;">
                                    
                               <!-- image frame --> 
                                    <div id="image-holder" class="image-responsive" style="height: 200px; width: 170px; border: 2px solid grey; border-radius:8px;  padding:2px;margin:auto;margin-top:20px;">
                                        <img id="imagePreview" style="width:100%;height:192px;" src="<?=base_url('assets/sellers_uploads/'.json_decode($get_img))?>" alt="Selected Image" style="max-width: 1700px; display: none;">
                                    </div>
                                        <label class="btn btn-primary btn-file btn-md" style="width: 170px;margin-left:208px;margin-top:5px;">
                                        <input id="imageInput"  type="file"  name="userfile" onchange="displayImage()" accept="image/*">
                                    </label>
                                <!-- close image frame --> 
                                      <div class="form-group w-70  ml-4">
                                          <button type="submit" class="btn btn-light text-center" style="position:relative;left:46%;width:42%;"> Save Changes </button>
                                       </div>
                              </div>
                                 
                          </form>

                  </div> 
                </div>
                </div>
          
            </div>
         </div>




  <script type="text/javascript">
        function displayImage() {
            const fileInput = document.getElementById('imageInput');
            const imagePreview = document.getElementById('imagePreview');

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }


    $("#imageUploadForm").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'your_controller/upload_image', // Replace with your CodeIgniter controller URL
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle the server response here
            },
        });
    });

</script>




