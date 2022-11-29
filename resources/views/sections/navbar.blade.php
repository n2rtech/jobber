<!-- Navbar -->
<nav class="@if(Request::route()->getName() != 'home')header-mobile @endif main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    @if(Request::route()->getName() == 'home')
        <div class="nav-item d-none d-sm-inline-block">
            <button class="btn btn-sm btn-dark" style="margin-top: 5px;"> Welcome {{ Auth::user()->name }}</button>
        </div>
        @else
        <div class="nav-item d-sm-inline-block">
            <a href="javascript:void(0)" class="btn btn-sm btn-dark" style="margin-top: 5px;">
                <i class="fas fa-calendar"></i> <span class="date"></span>
            </a>
            <a href="javascript:void(0)" class="btn btn-sm btn-dark" style="margin-top: 5px;">
                <i class="fas fa-clock"></i> <span class="hms"></span><span class="ampm"></span>
            </a>
        </div>
        @endif

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block @isset($filter_search) navbar-search-open @endisset">
              <form class="form-inline" action="{{ route('customers.index') }}">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search Customer" aria-label="Search" @isset($filter_box_customer) @if($filter_box_customer == 'show') value="{{ $filter_search }}" @endif  @endisset>
                  <div class="input-group-append forDesktop">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i> <span class="d-none d-sm-block changeBlock">Search</span>
                    </button>
                    <button class="btn btn-navbar" type="button" data-toggle="modal" data-target="#modal-advanced-search">
                        <i class="fas fa-sliders"></i> <span class="d-none d-sm-block changeBlock">Advanced Search</span> 
                      </button>
                    <a @isset($filter_box_customer)  @isset($filter_search) href="{{ route('customers.index') }}" @else data-widget="navbar-search" @endisset @else  href="{{ route('home') }}" @endif class="btn btn-navbar">
                      <i class="fas fa-times"></i>
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">No New Notifications</span>
                {{-- <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
