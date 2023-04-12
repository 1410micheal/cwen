            <!--app-sidebar-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header" style="border: none!important;">
                        <a class="header-brand1" href="{{url('home')}}" style="max-width:80px;">
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
                                    @can('add new members')
                                    <li><a href="{{url('new-member')}}" class="slide-item">Add Member</a></li>
                                    @endcan

                                    @can('view members')
                                    <li><a href="{{url('members')}}" class="slide-item">Member List</a></li>
                                    @endcan
                                </ul>
                            </li>
                            @can('data setup')
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Data Setup</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{ route('products.categories') }}" class="slide-item">Product Categories</a></li>
                                    <li><a href="{{ route('products.packaging') }}" class="slide-item">Packaging Types</a></li>
                                    <li><a href="{{ url('services') }}" class="slide-item">Services</a></li>
                                    <li><a href="{{ url('offence-types') }}" class="slide-item">Offence Types</a></li>
                                    <li><a href="{{ url('regulators') }}" class="slide-item">Regulatory Bodies</a></li>
                                    <li><a href="{{ url('clusters') }}" class="slide-item">Member Clusters</a></li>
                                    <li><a href="{{ url('village-list') }}" class="slide-item">Villages</a></li>
                                    <li><a href="{{ url('groups') }}" class="slide-item">Member Groups</a></li>
                                    <li><a href="{{ url('channels') }}" class="slide-item">Distribution Channels</a></li>
                                    <li><a href="{{ url('trainings') }}" class="slide-item">Training Options</a></li>
                                    <li><a href="{{ url('methods') }}" class="slide-item">Processing Methods</a></li>
                                    <li><a href="{{ url('infochannels') }}" class="slide-item">About Us Channels</a></li>
                                    <li><a href="{{ url('businesstypes') }}" class="slide-item">Business Types</a></li>
                                 </ul>
                            </li>
                            @endcan
                          
                            @can('view reports')
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-bar-chart-2"></i><span class="side-menu__label">Reports</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{ route('reports.membership') }}" class="slide-item">Membership</a></li>
                                    <li><a href="{{ route('reports.followups') }}" class="slide-item">Folowup Report</a></li>
                                    <li><a href="{{ route('reports.products') }}" class="slide-item">Products Report</a></li>
                                    <li><a href="{{ route('reports.offences') }}" class="slide-item">Offences Report</a></li>
                                 </ul>
                            </li>
                            @endcan

                            @can('manage users')
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fa fa-user-o"></i><span class="side-menu__label">User Management</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                      <li><a href="{{url('permissions/users')}}" class="slide-item">Users</a></li>
                                   @can('manage roles')
                                    <li><a href="{{url('permissions/roles')}}" class="slide-item">Roles</a></li>
                                    <li><a href="{{url('permissions')}}" class="slide-item">Permissions</a></li>
                                   @endcan
                                 </ul>
                            </li>
                            @endcan

                            @can('manage settings')
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Settings</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{ url('settings')}}" class="slide-item">General Settings</a></li>
                                 </ul>
                            </li>
                            @endcan

                            <br>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
            <!--app-sidebar-->

            