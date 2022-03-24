@extends('layouts.app')


@section('section')

    <div id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
                    <div class="sidebar-brand-icon">
                        <img src="../images/logo_naga.png" class="" style="width:55px;height:55px;">
                    </div>
                    <div class="sidebar-brand-text mx-3 text-capitalize">Barangay Records Management</div>
                </a>

                @include('shared.captain_sidebar')

            </ul>
            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">
                    @include('shared.navbar')
                    <div class="container-fluid">

                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-12 col-md-12 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    TOTAL CITIZENS
                                                </div>
                                                <div
                                                    class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Citizen::count() }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Business Clearance Records</h6>

                            </div>
                            <div class="card-body">
                                @if( $errors->any() )
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>

                                @endif
                                @include('shared.notification')

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Business Name</th>
                                            <th>Address</th>
                                            <th>Type of Business</th>
                                            <th>Owner</th>
                                            <th>Residence Address</th>
                                            <th>Applied For</th>
                                            <th>Date Issued</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($business_clearances as $buss)
                                            <tr>
                                                <td>{{$buss->business_name}}</td>
                                                <td>{{$buss->address}}</td>
                                                <td>{{$buss->business_type}}</td>
                                                <td>{{$buss->manager}}</td>
                                                <td>{{$buss->residence_address}}</td>
                                                <td>{{$buss->applied_for}}</td>
                                                <td>{{$buss->created_at->toDayDateTimeString()}}</td>
                                                <td>
                                                    <a href="{{ route('business-clearance.pdf', ['clearance' => $buss->id]) }}"
                                                       class="btn btn-success btn-sm">View Business Clearance</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>

        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
@endsection
