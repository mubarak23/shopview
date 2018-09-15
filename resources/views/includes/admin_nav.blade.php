<!-- Navigation Bar-->
        
         <header id="topnav">
        
            <nav class="navbar-custom">

                <div class="container-fluid">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-bell noti-icon"></i>
                                    <span class="badge badge-danger noti-icon-badge">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">
    
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification - coming soon</h5>
                                    </div>
    <!-- commented notifications
                                    <div class="slimscroll noti-scroll">
    
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>
    
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-light">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>
    
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>
    
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-light">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>
    
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-light">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>
    
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-light">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>
                                
    
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all
                                        <i class="fi-arrow-right"></i>
                                    </a>
    -->
                                </div>
                            </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('temp/assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                                <small class="pro-user-name ml-1">
                                    
                                </small>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                <a href="" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Change Password</span>
                                </a>
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a> -->

                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fe-log-out"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <a href="index.html" class="logo">
                                <span class="logo-lg">
                                    <img src="{{ asset('temp/assets/images/logo.png') }}" alt="" height="18">
                                </span>
                                <span class="logo-sm">
                                    <img src="{{ asset('temp/assets/images/logo-sm.png') }}" alt="" height="28">
                                </span>
                            </a>
                        </li>
                        <li class="app-search">
                            <form>
                                <input type="text" placeholder="Search..." class="form-control">
                                <button type="submit" class="sr-only"></button>
                            </form>
                        </li>
                    </ul>
                </div>

            </nav>
            <!-- end topbar-main -->

            <div class="topbar-menu">
                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">
    
                                <li class="has-submenu">
                                    <a href="">
                                        <i class="fe-airplay"></i>Dashboard</a>
                                </li>
    
                                <li class="has-submenu">
                                    <a href="#">
                                        <i class="fe-layers"></i>Disbursement</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="">Disbursement Plans</a>
                                        </li>
                                        <li>
                                            <a href=""> Beneficiaries</a>
                                        </li>
                                        <li>
                                            <a href="">Disbursement Transactions</a>
                                        </li>
                                        <li>
                                            <a href="">Single Transactions</a>
                                        </li>
                                    </ul>
                                </li>
    
                                <!-- <li class="has-submenu">
                                        <a href="#"> <i class="fe-package"></i>Reports</a>
                                        <ul class="submenu megamenu">
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="#">Pending Transactions</a>
                                                    </li>
                                                    <li>
                                                        <a href="pages-approveddisbursements.html">Approve Disbursments</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Transaction Status</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="#">Failed Transactions</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Credit Wallet</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Report Issues</a>
                                                    </li>
                                                </ul>
                                            </li>
                                    
                                        </ul>
                                    </li> -->
    
                                <li class="has-submenu">
                                    <a href=""> <i class="fe-bookmark"></i>Settings</a>
                                </li>
    
                                
    
                            </ul>
                            <!-- End navigation menu -->
    
                            <div class="clearfix"></div>
                        </div>
                        <!-- end #navigation -->
                    </div>
                    <!-- end container -->
                </div>
            <!-- end navbar-custom -->
        </header>
        
        <!-- End Navigation Bar-->