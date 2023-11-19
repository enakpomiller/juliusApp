            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                <?php if($this->session->usertype){?> 
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">Personal</li>
                            <li class="active">
                                <a class="has-arrow" href="<?=base_url('admin2')?>" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Dashboards</span>
                                    <span class="nav-label label label-danger">9</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li> <a href='<?=base_url('sellers/create_item')?>'> Create items  </a> </li>
                                    <li> <a href='<?=base_url('sellers/viewproducts')?>'> View Product  </a> </li>
                                        <!-- <li> <a href='index-car-dealer.html'>Car Dealer</a> </li>
                                        <li> <a href='index-stock-market.html'>Stock Market</a> </li>
                                        <li> <a href='index-dating.html'>Dating</a> </li>
                                        <li> <a href='index-job-portal.html'>Job Portal</a> </li>
                                        <li> <a href='index-crm.html'>CRM</a> </li>
                                        <li class="active"> <a href='index-real-estate.html'>Real Estate</a> </li>
                                        <li> <a href='index-crypto-currency.html'>Crypto Currency</a> </li> -->
                                </ul>
                            </li>

                            <?php }else{?>
                            <li><a href="app-chat.html" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Chat</span></a> </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-calendar"></i><span class="nav-title">Calendar</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='calendar-full.html'>Full Calendar</a> </li>
                                    <li> <a href='calendar-list.html'>Calendar List</a> </li>
                                </ul>
                            </li>
                            <li><a href="mail-inbox.html" aria-expanded="false"><i class="nav-icon ti ti-email"></i><span class="nav-title">Mail</span></a> </li>

                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-info"></i><span class="nav-title">Icons</span> </a>
                                <ul aria-expanded="false">
                                    <li> <a href="icons-cryptocurrency.html">Cryptocurrency Icons</a> </li>
                                    <li> <a href="icons-drip.html">Drip Icons</a> </li>
                                    <li> <a href="icons-dash.html">Dash Icons</a> </li>
                                    <li> <a href="icons-feather.html">Feather Icons</a> </li>
                                    <li> <a href="icons-fontawesome.html">Font Awesome</a> </li>
                                    <li> <a href="icons-ion.html">Ion Icons</a> </li>
                                    <li> <a href="icons-weather.html">Weather Icons</a> </li>
                                    <li> <a href="icons-material.html">Material Icons</a> </li>
                                    <li> <a href="icons-themify.html">Themify Icons</a> </li>
                                </ul>
                            </li>

       
      
                    
                        </ul>
                    </div>
               
                       <?= "user admin "?>
                      <?php } ?>
         <!-- end sidebar-nav -->
         </aside>
                <!-- end app-navbar -->