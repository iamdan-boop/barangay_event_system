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
                                                    class="h5 mb-0 font-weight-bold text-gray-800">{{ $citizen_count }}</div>
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

                        @include('shared.notification')
                        <form method="GET">
                            <div class="row">
                                <div class="form-group col-lg-3">
                                    <label>Filter Certificate</label>
                                    <select class="form-control" name="certificate_id" required id="certificate_id">
                                        <option value="">Certificates</option>
                                        @foreach($certificates as $cert)
                                            <option
                                                value="{{$cert->id}}" {{@$_GET['certificate_id'] == $cert->id ? 'selected' : ''}}>{{explode('_', $cert->name)[0].' '.explode('_',  $cert->name)[1]}}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group col-lg-3 mt-2">
                                    <label></label>
                                    <button type="submit" class="btn btn-info form-control btn-sm mt-4 mr-5"
                                            style="width: 80px">Filter
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Civil Status</th>
                                    <th>Type</th>
                                    <th>Purpose</th>
                                    <th>Date Issue</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($citizen_certificates as $citizen_certificate)
                                    <tr>
                                        <td>{{ $citizen_certificate->citizen->first_name }} {{ $citizen_certificate->citizen->last_name }} </td>
                                        <td>
                                            <?php
                                            $dob = Carbon\Carbon::parse($citizen_certificate->citizen->dob);
                                            $today = Carbon\Carbon::now();
                                            ?>
                                            {{ $today->diffInYears($dob) }}


                                        </td>
                                        <td>{{$citizen_certificate->citizen->status_id}}</td>
                                        <td>{{$citizen_certificate->citizen->first_name .' '. $citizen_certificate->citizen->last_name}}</td>
                                        <td>{{$citizen_certificate->purpose}}</td>
                                        <td>{{$citizen_certificate->created_at->toDayDateTimeString()}}</td>
                                        <td>
                                            <a href="{{route('certificate-citizen', ['citizenCertificate' => $citizen_certificate->id])}}"
                                               class="btn btn-success btn-sm">View
                                                Certificate</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
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
@endsection
