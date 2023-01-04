         
        <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="{{url('index')}}">
                            <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                       
                        
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                          
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                      
                                        <div class="dropdown  d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                 <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>

                                      
                                        <!-- MESSAGE-BOX -->
                                        <div class="dropdown d-flex header-settings">
                                            <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                                <i class="fe fe-align-right"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-2">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="{{asset('assets/images/users/21.jpg')}}" alt="profile-user" class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-arrow" style="margin-left:-100px!important;">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ current_user()->name }}</h5>
                                                        <small class="text-muted">{{ @get_role(current_user()->id)->name }}</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="{{ url('profile') }}/{{ current_user()->id }}">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="{{url('lockscreen')}}">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lock Session
                                                </a>
                                                <a class="dropdown-item" href="{{url('login')}}">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->
