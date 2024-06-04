
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex align-items-center">
            <!-- LOGO -->
            <div class="navbar-brand-box d-none">

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('vendor/assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('vendor/vendor/assets/images/logo.svg')}}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <h3 class="px-4 d-none d-md-block">Dashboard</h3><h4 class="mb-0 text-white d-block d-md-none">ATAIGA</h4>
        </div>

        <div class="d-flex">
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search Project...">
                </div>
            </form>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect" id="page-header-notifications-dropdown">
                    <img src="{{asset('vendor/assets/images/icons/icon-bell.svg')}}" alt="notification icon" />
                    <span class="badge badge-pill">3</span>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block mr-2 text-right font-weight-semibold font-size-15">John Doe<br>
                        <span class="font-weight-normal font-size-12 text-muted">john@gmail.com</span>
                    </span>
                    <img class="rounded-circle header-profile-user" src="{{asset('vendor/assets/images/img.png')}}"
                        alt="Header Avatar">
                    
                    <i class="uil-angle-down d-none font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="profile.html"><i class="uil uil-user-circle font-size-18 align-middle text-muted mr-1"></i> <span class="align-middle">View Profile</span></a>
                    <a class="dropdown-item d-block" href="settings.html"><i class="uil uil-cog font-size-18 align-middle mr-1 text-muted"></i> <span class="align-middle">Settings</span></a>
                    <a class="dropdown-item" href="#"><i class="uil uil-sign-out-alt font-size-18 align-middle mr-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                </div>
            </div>

        </div>
    </div>
</header>