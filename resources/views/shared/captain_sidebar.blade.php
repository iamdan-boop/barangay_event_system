<div>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MENU
    </div>

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Charts -->

    @if (auth()->user()->hasRole(['secretary', 'captain']))
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('captain.index') }}">
                <i class="fas fa-fw fa-solid fa-house-user"></i>

                <span>Home</span></a>
        </li>
    @else
        <li class="nav-item active">
            <a class="nav-link " href="{{route('t_home')}}">
                <i class="fas fa-fw fa-solid fa-house-user"></i>

                <span>Home</span></a>
        </li>
    @endif

    <li class="nav-item active">
        <a class="nav-link"
           href="{{route('citizen.index')}}">
            <i class="fas fa-fw fa-solid fa-users"></i>

            <span>Citizen Records</span></a>
    </li>

    @if( Auth::user()->hasRole('captain') )
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('incident.index') }}">
                <i class="fas fa-fw fa-solid fa-flag"></i>

                <span>Incident Reports</span></a>
        </li>
    @endif


    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Reports</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Select Reports</h6>
                @if (auth()->user()->hasRole(['secretary', 'captain']))
                    <a class="collapse-item"
                       href="{{route('reports-individual.index')}}"
                    >Individual</a>
                @endif

                <a class="collapse-item" href="{{ route('tax-payments.index') }}">Tax Payments</a>
                <a class="collapse-item" href="{{route('certificate-payment.index')}}">Certificate Payments</a>
            </div>
        </div>
    </li>

    @if (auth()->user()->hasRole(['secretary', 'captain']))
        <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
               aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-fw fa-cog"></i>
                <span>Business Reports</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Select Business Reports</h6>

                    <a class="collapse-item"
                       href="{{route('business-clearance.index')}}"
                    >Business Clearance</a>
                    <a class="collapse-item"
                       href="{{route('cessation-business.index')}}"
                    >Cessation of Business</a>
                </div>
            </div>
        </li>
@endif




<!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</div>
