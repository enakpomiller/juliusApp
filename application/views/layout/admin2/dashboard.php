

                <!-- begin app-main -->

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
                        <div class="row">
                            <div class="col-xs-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 m-b-0 bg-pink">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0">128</h2>
                                        <p class="text-white">All Project</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 m-b-0 bg-primary">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0">758</h2>
                                        <p class="text-white">Sale Properties </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 m-b-0 bg-orange">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0">2521</h2>
                                        <p class="text-white">Rent Properties </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 m-b-0">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0">$24,500</h2>
                                        <p class="text-white">Total Earnings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 m-b-30">
                                <div class="card card-statistics h-100 m-b-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Income analysis</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                                <h6 class="mb-1">Action</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                                                <h6 class="mb-1 mt-3">Export</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-xxs-6 col-md-4">
                                                <h5 class="mb-1 text-pink">Sale income</h5>
                                                <p>18% High Then Last Month</p>
                                            </div>
                                            <div class="col-xxs-6 col-md-4">
                                                <h5 class="mb-1 text-primary">Rent income</h5>
                                                <p>26% High Then Last Month</p>
                                            </div>
                                        </div>
                                        <div class="apexchart-wrapper">
                                            <div id="realestatedemo1" class="chart-fit"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title">Revenue overview</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-6 mb-3 mb-xs-0">
                                                <h2>3.8k</h2>
                                                <span class="d-block mb-2 font-16">AVG months</span>
                                                <span class="d-block mb-5"><b class="text-primary">-65.88%</b> vs last 1 months</span>
                                                <p class="mb-3">Sapiente corporis fugiat, doloremque eveniet nostrum id molestiae quaerat!</p>
                                                <a class="btn btn-round btn-inverse-primary" href="#"><b>View details </b></a>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="apexchart-wrapper">
                                                    <div id="realestatedemo3" class="chart-fit"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top my-4"></div>
                                        <h4 class="card-title">Income by department</h4>
                                        <div class="row">
                                            <div class="col-12 col-xs-3">
                                                <span>Purchases: <b>$1,475</b></span>
                                                <div class="progress my-3" style="height: 4px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xs-3">
                                                <span>Sells: <b>$23,475</b></span>
                                                <div class="progress my-3" style="height: 4px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xs-3">
                                                <span>Rented: <b>$1,658</b></span>
                                                <div class="progress my-3" style="height: 4px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xs-3">
                                                <span>Leased: <b>$12,489</b></span>
                                                <div class="progress my-3" style="height: 4px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-4 m-b-30">
                                <div class="card card-statistics h-100 m-b-0">
                                    <div class="card-header bg-gradient">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-6">
                                                <div class="bg-img bg-img-big m-auto m-sm-0">
                                                    <img class="img-fluid" src="assets/img/avtar/10.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 text-center mt-3 mt-sm-0 text-sm-right">
                                                <h4 class="mb-0 text-white">John Doe</h4>
                                                <span class="text-white">Agent of Property</span>
                                                <h5 class="mt-3 text-white mb-0"> (+1) 774-238-0096</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Name" placeholder="Full name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Message"></textarea>
                                            </div>
                                            <a class="btn btn-outline-primary btn-block" href="#">Submit Request</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-8 m-b-30">
                                <div class="card card-statistics h-100 m-b-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Recently added property </h4>
                                        </div>
                                        <div class="dropdown">
                                            <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                                <h6 class="mb-1">Action</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                                                <h6 class="mb-1 mt-3">Export</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>Customer</th>
                                                        <th>Photo</th>
                                                        <th>Property</th>
                                                        <th>Date </th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-muted mb-0">
                                                    <tr>
                                                        <td>#54981</td>
                                                        <td>Alice Williams</td>
                                                        <td>
                                                            <div class="bg-img">
                                                                <img class="img-fluid rounded" src="assets/img/real-estate/01.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>Eaton Place</td>
                                                        <td>20-01-2019</td>
                                                        <td>Rent</td>
                                                        <td><span class="badge badge-success ">Paid</span></td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#25425</td>
                                                        <td>AnnaHorno</td>
                                                        <td>
                                                            <div class="bg-img">
                                                                <img class="img-fluid rounded" src="assets/img/real-estate/02.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>Kent Terrace </td>
                                                        <td>26-04-2019</td>
                                                        <td>Sell</td>
                                                        <td><span class="badge badge-warning">Paid</span></td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#25425</td>
                                                        <td>Fielmonk</td>
                                                        <td>
                                                            <div class="bg-img">
                                                                <img class="img-fluid rounded" src="assets/img/real-estate/03.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>Princes Gate Court</td>
                                                        <td>14-04-2019</td>
                                                        <td>Sell</td>
                                                        <td><span class="badge badge-success">Pending</span></td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#25425</td>
                                                        <td>Dutca Patrick</td>
                                                        <td>
                                                            <div class="bg-img">
                                                                <img class="img-fluid rounded" src="assets/img/real-estate/04.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>Ossington Street</td>
                                                        <td>06-12-2019</td>
                                                        <td>Sold</td>
                                                        <td><span class="badge badge-danger">Sold</span></td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->