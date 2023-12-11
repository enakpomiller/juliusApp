
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
                        <div class="col-xxl-12 mt-10" style="height:600px;">
                            <div class="card card-statistics h-100 m-b-0">
                                 <div class="card-header d-flex justify-content-between">
                                       <div class="card-heading">
                                          <h4 class="card-title"> All  Sales  analysis   </h4>
                                       </div>
                                 </div>
                                 
                                 <?php if($getsales) { ?>
                                        <table class="table table-hover mt-4" style="width:90%; margin:auto;position:relative;top:0px;">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Prod Image</th>
                                                    <th scope="col">Customers Name </th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Prod Name</th>
                                                    <th scope="col">Prod Price</th>
                                                    <th scope="col">Color</th>
                                                    <th scope="col"> Size</th>
                                                    <th scope="col"> Qty</th>
                                                    <th scope="col"> Date </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sum=0;  $counter=1; foreach($getsales as $allsales) { ?>
                                                    <tr>
                                                    <th scope="row"><?=$counter++?></th>
                                                    <td> <img class="w-50" src="<?=base_url('assets/sellers_uploads/'.$allsales->prod_image)?>"></td>
                                                    <td><?=$allsales->firstname?> <?= "  ".$allsales->othernames?></td>
                                                    <td><?=$allsales->email?></td>
                                                    <td><?=$allsales->prod_name?></td>
                                                    <td><?="&#x20A6;".number_format(($allsales->prod_price),2)?></td>
                                                    <td><?=$allsales->color?></td>
                                                    <td><?=$allsales->size?></td>
                                                    <td><?=$allsales->qty?></td>
                                                    <td><?=$allsales->date?></td>
                                                    </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        <h4 class="text-dark" style="position:relative;bottom:0px;left:80%;"> <?=" PRODUCT's QTY: ".$total[0]->quantity;?> </h4>
                                        <h4 class="text-success" style="position:relative;bottom:5px;left:80%;"> <?="TOTAL: "."&#x20A6;".(number_format($total[0]->total_price));?> </h4>
                                       
                                        <button class="btn btn-primary" style="position:relative;width:90%;margin:auto;"> Print  </button>
                                 <?php }else{?>
                                    <h2 class="text-center mt-4"> No Sales Yet </h2>
                                <?php  } ?>

  
                                   
                        </div>
                  </div> 
                </div>
                </div>
            </div>
         </div>


         <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Add more sets of fields
    $("#addMore").click(function() {
        var clone = $(".form-set:first").clone();
        clone.find("input").val("");
        $(".form-container").append(clone);
    });

    // Remove a set of fields
    $(".form-container").on("click", ".removeSet", function() {
        $(this).closest(".form-set").remove();
    });
});
</script>
