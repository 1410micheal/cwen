            <!--app-sidebar-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header" style="border: none!important;">
                        <a class="header-brand1" href="{{url('index')}}" style="max-width:80px;">
                            <img src="{{ asset('assets/images/brand/logo.png') }}"  class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('assets/images/brand/logo.png') }}"  class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{ asset('assets/images/brand/logo.png') }}"  class="header-brand-img light-logo" alt="logo">
                            <img src="{{ asset('assets/images/brand/logo.png') }}"  class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{url('home')}}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Manage Members</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{url('new-member')}}" class="slide-item">Add Member</a></li>
                                    <li><a href="{{url('members')}}" class="slide-item">Member List</a></li>
                                </ul>
                            </li>

                            

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Data Setup</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{ route('products.categories') }}" class="slide-item">Product Categories</a></li>
                                    <li><a href="{{ route('products.packaging') }}" class="slide-item">Packaging Types</a></li>
                                    <li><a href="{{ url('offence-types') }}" class="slide-item">Offence Types</a></li>
                                    <li><a href="{{ url('regulators') }}" class="slide-item">Government Regulatory Bodies</a></li>
                                    <li><a href="{{ url('clusters') }}" class="slide-item">Member Clusters</a></li>
                                    <li><a href="{{ url('village-list') }}" class="slide-item">Villages</a></li>
                                 </ul>
                            </li>
                          
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-bar-chart-2"></i><span class="side-menu__label">Reports</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{ route('reports.membership') }}" class="slide-item">Membership</a></li>
                                    <li><a href="{{ route('reports.membershipsummary') }}" class="slide-item">Membership Summary</a></li>
                                    <li><a href="{{ route('reports.followups') }}" class="slide-item">Folowup Report</a></li>
                                 </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fa fa-user-o"></i><span class="side-menu__label">User Management</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                      <li><a href="{{url('permissions/users')}}" class="slide-item">Users</a></li>
                                 
                                    <li><a href="{{url('permissions/roles')}}" class="slide-item">Roles</a></li>
                                 
                                   <li><a href="{{url('permissions')}}" class="slide-item">Permissions</a></li>
                                 </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Settings</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{ url('settings')}}" class="slide-item">General Settings</a></li>
                                 </ul>
                            </li>
                            <br>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
            <!--app-sidebar-->

            