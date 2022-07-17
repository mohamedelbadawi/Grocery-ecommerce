<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>{{ auth('admin')->user()->name }} </sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ trans('sidebar.Dashboard') }}</span></a>
    </li>



    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.category') }}">
            <i class="fa-solid fa-c"></i>
            <span>{{ trans('sidebar.Categories') }}</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.product') }}">
            <i class="fa-brands fa-product-hunt"></i>
            <span>{{ trans('sidebar.Products') }}</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.cart') }}">
            <i class="fa-solid fa-cart-shopping"></i> <span>{{ trans('sidebar.Carts') }}</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.order') }}">
            <i class="fa-solid fa-house"></i>
            <span>{{ trans('sidebar.Orders') }}</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.address') }}">
            <i class="fa-solid fa-house"></i>
            <span>{{ trans('sidebar.Addresses') }}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.user') }}">
            <i class="fa-solid fa-person"></i>
            <span>{{ trans('sidebar.Users') }}</span></a>
    </li>








    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
