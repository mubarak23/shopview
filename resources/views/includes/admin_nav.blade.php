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
                                    
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <a href="index.html" class="logo">
                                
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
                                        <i class="fe-layers"></i>Admin Account</a>
                                    <ul class="submenu">
                                        <li>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_account" ><i class="mdi mdi-pencil mr-1 text-muted"></i>Create Account</a>

                                        </li>
                                        <li>
                                            <a href="">View All Users</a>
                                        </li>
                                        <li>
                                            <a href="">View All Business</a>
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

                                <li class="has-submenu">
                                    <a href="{{ route('admin-logout') }}"> <i class="fe-bookmark"></i>Logout</a>
                                </li
                               
    
                                
    
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
        
        <div class="modal fade" id="add_account" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Add Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form method="POST" action="{{route('admin-account')}}" aria-label="">
                    {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="register-username"><i class="icon-user"></i> <b>Username</b></label>
                                    <input class="form-control" id="register-username" name="username" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="register-email"><i class="icon-user"></i> <b>Email</b></label>
                                    <input class="form-control" id="register-email" name="email" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="register-password"><i class="icon-lock"></i> <b>Password</b></label>
                                    <input class="form-control" id="register-password" name="password" type="password" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="register-password2"><i class="icon-lock"></i> <b>Confirm Password</b></label>
                                    <input class="form-control" id="register-password2" name="confirm_password" type="password" placeholder="">
                                </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Create Account</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- End Navigation Bar-->