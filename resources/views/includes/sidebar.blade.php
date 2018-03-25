<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><img src="/img/owl_logo_alt.png" style="width: 50px;height: auto;" class="img-circle"> <span>{{ config('app.name', 'Laravel') }}</span></a>
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        
        <br />
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
            <div class="menu_section">
                <h3>{{ Auth::user()->role->display_name }}</h3>
                <ul class="nav side-menu">
                    <li class="{{ Ekko::isActiveRoute('home') }}">
                        <a href="{{ route('home') }}">
                            <i class="fa fa-home"></i>
                            Home
                        </a>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            Book a Professional
                        </a>
                    </li>

                    <li><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Preview</a></li>
                            <li><a href="#">Customize</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing Table</a></li>
                            <li><a href="#">Your Availability</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-video-camera"></i> Stream <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Test Streaming</a></li>
                            <li><a href="#">Customize Player</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-group"></i> Social <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Social Sharings</a></li>
                            <li><a href="#">Promotions</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-line-chart"></i> Analitics <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Bookings</a></li>
                            <li><a href="#">Sales</a></li>
                            <li><a href="#">Engagements</a></li>
                            <li><a href="#">Activities</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-dollar"></i> Your Earnings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Consultancy Revenues</a></li>
                            <li><a href="#">Referrals Income</a></li>
                            <li><a href="#">Dividends</a></li>
                            <li><a href="#">Staking and Mining</a></li>
                            <li><a href="#">FAQ - Revenue Distribution System</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-th"></i> Revenue Matrix <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Network Revenuess</a></li>
                            <li><a href="#">FAQ - Revenue Matrix</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-credit-card"></i> My Wallet <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Deposit</a></li>
                            <li><a href="#">Withdraw</a></li>
                            <li><a href="#">2FA</a></li>
                            <li><a href="#">Other Settings</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-bell"></i> Notifications <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Upcoming Appointments</a></li>
                            <li><a href="#">Reminders</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-trophy"></i> Upgrade <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Premium Upgrade</a></li>
                            <li><a href="#">Entreprise Solution</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="menu_section">
                <h3>Group 2</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="#">Level One</a>
                                <li>
                                    <a>Level One<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu">
                                            <a href="#">Level Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Level Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Level Two</a>
                                        </li>
                                    </ul>
                                </li>
                            <li>
                                <a href="#">Level One</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        
        </div>
        <!-- /sidebar menu -->
        
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>