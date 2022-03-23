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
                                <h6 class="m-0 font-weight-bold text-primary">CERTIFICATE PAYMENTS</h6>

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
                                            <th>Payor</th>
                                            <th>Agency</th>
                                            <th>Certificate</th>
                                            <th>Payment Method</th>
                                            <th>Total Amount</th>
                                            <th>Drawee Bank (for Money Order)</th>
                                            <th>Drawee Number</th>
                                            <th>Drawee Date</th>
                                            <th>Date Issued</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach($certificate_payments as $certificate_payment)
                                            <tr>
                                                <td>{{ $certificate_payment->payor }}</td>
                                                <td>{{ $certificate_payment->agency }}</td>
                                                <td>{{ $certificate_payment->certificate }}</td>
                                                <td>{{ $certificate_payment->payment_method }}</td>
                                                <td>{{ $certificate_payment->fund }}</td>
                                                <td>{{ $certificate_payment->drawee_bank }}</td>
                                                <td>{{ $certificate_payment->drawee_bank_number }}</td>
                                                <td>{{ $certificate_payment->drawee_bank_date }}</td>
                                                <td>{{ $certificate_payment->created_at->toDayDateTimeString() }}</td>
                                                <td>
{{--                                                    <a href="{{route('view_receipt', $pay->id)}}" class="btn btn-info btn-sm">View Receipt</a>--}}
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
