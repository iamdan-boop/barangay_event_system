<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu
</div>

<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Charts -->
<li class="nav-item active">
    <a class="nav-link"
       href="{{route('treasurer.home.index')}}"
    >
        <i class="fas fa-fw fa-solid fa-house-user"></i>

        <span>Home</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link"
       href="{{route('treasurer.fees-payment.index')}}"
    >
        <i class="fas fa-fw fa-solid fa-users"></i>

        <span>Brgy. Payments & Fees</span>
    </a>
    {{-- @if(auth()->user()->hasRole('treasurer'))

    @else
    <a class="nav-link " href="{{route('t_payment_fee')}}">
        <i class="fas fa-fw fa-solid fa-users"></i>

        <span>Brgy. Payments & Fees</span></a>
    @endif --}}
</li>


<li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
       aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-list-alt"></i>
        <span>Reports</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Select Reports</h6>
            <a class="collapse-item"
               href="{{route('treasurer.tax-payments.index')}}"
            >Tax Payments</a>
            <a class="collapse-item"
               href="{{route('treasurer.certificate-payments.index')}}"
            >Certificate Payments</a>
        </div>
    </div>
</li>


{{-- <li class="nav-item active">
    <a class="nav-link " href="{{route('t_financial_records')}}">
        <i class="fas fa-fw fa-solid fa-users"></i>

        <span>Financial Records</span></a>
</li> --}}






<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
