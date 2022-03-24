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
                                                    class="h5 mb-0 font-weight-bold text-gray-800">{{ $citizens->count() }}</div>
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
                                <h6 class="m-0 font-weight-bold text-primary float-left">CITIZEN RECORDS</h6>
                                <button class="btn btn-info btn-sm float-right" data-toggle="modal"
                                        data-target="#createUserModal">Add Citizen
                                </button>
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
                                            <th>Name</th>
                                            <th>Zone</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Gender</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($citizens as $citizen)
                                            <tr>
                                                <td>{{$citizen->first_name}} {{$citizen->middle_name}} {{$citizen->last_name}}</td>
                                                <td>{{$citizen->zone}}</td>
                                                <td>{{$citizen->address}}</td>
                                                <td>{{$citizen->contact}}</td>
                                                <td>{{$citizen->gender}}</td>
                                                <td>
                                                    @if ($citizen->status_id == 1)
                                                        <form
                                                            action="{{ route('citizen.archive', ['citizen' => $citizen->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit"
                                                                    class="btn btn-danger btn-sm">Archive
                                                            </button>
                                                        </form>


                                                        <button class="btn btn-primary btn-sm picture"
                                                                value="{{ $citizen->id }}"
                                                                data-toggle="modal" data-target="#pictureModal">Take
                                                            Picture
                                                        </button>
                                                        <button class="btn btn-success btn-sm certificate"
                                                                value="{{ $citizen->id }}"
                                                                data-toggle="modal" data-target="#certificateModal">Get
                                                            Certificate
                                                        </button>
                                                        <button class="btn btn-success btn-sm cedula"
                                                                value="{{ $citizen->id }}"
                                                                data-toggle="modal" id="cedulaClickModal"
                                                                data-target="#cedulaModal">Cedula
                                                        </button>
                                                        <button class="btn btn-warning btn-sm business_clearance"
                                                                value="{{ $citizen->id }}" data-toggle="modal"
                                                                data-target="#businessClearanceModal">Business Clearance
                                                        </button>
                                                        <button class="btn btn-warning btn-sm cessation_business"
                                                                value="{{ $citizen->id }}" data-toggle="modal"
                                                                data-target="#CessationBusinessModal">Cessation Business
                                                        </button>
                                                        <button class="btn btn-info btn-sm edit"
                                                                value="{{ $citizen }}"
                                                                data-toggle="modal" data-target="#editUserModal">Edit
                                                        </button>
                                                    @endif

                                                    @if ($citizen->status_id == 0)
                                                        <form
                                                            action="{{ route('unarchived-citizen', ['citizen' => $citizen->id ]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit"
                                                                    {{--                                                                    href="{{ route('unarchived-citizen', ['citizen' => $citizen->id]) }}"--}}
                                                                    class="btn btn-success btn-sm">Unarchive
                                                            </button>
                                                        </form>
                                                    @endif
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


        <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Citizen</h5>

                    </div>
                    <div class="modal-body">
                        <form class="user" action="{{route('citizen.update')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="citizenship_id" id="citizenship_id">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control" id="first_name_edit"
                                           placeholder="First Name" name="first_name" value="{{old('first_name')}}"
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" id="middle_name_edit"
                                           placeholder="Middle Name" name="middle_name" value="{{old('middle_name')}}"
                                           required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control" id="last_name_edit"
                                           placeholder="Last Name" name="last_name" value="{{old('last_name')}}"
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control" id="contact_edit"
                                           placeholder="Contact Number" name="contact" value="{{old('contact')}}"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" id="gender_edit" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control form-control" id="dob_edit"
                                       placeholder="Date of Birth" name="dob" value="{{ old('dob') }}">
                            </div>

                            <div class="form-group">
                                <label>Civil Status</label>
                                <select class="form-control" name="status" id="status_edit">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Citizenship</label>
                                    <input type="text" class="form-control form-control" id="citizenship_edit"
                                           placeholder="Last Name" name="citizenship" value="Filipino" required>
                                </div>
                                <div class="col-sm-6">
                                    <label>Occupation</label>
                                    <input type="text" class="form-control form-control" id="occupation_edit"
                                           placeholder="Any Work" name="occupation" value="{{old('occupation')}}"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Zone</label>
                                <input type="text" class="form-control form-control" id="zone_edit"
                                       placeholder="Zone Number" name="zone" value="{{old('zone')}}">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control form-control" id="address_edit"
                                       placeholder="Complete Address" name="address">
                            </div>


                            <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                            <hr>

                        </form>
                    </div>

                </div>
            </div>
        </div>


        <div class="modal fade" id="CessationBusinessModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cessation Business</h5>

                    </div>
                    <div class="modal-body">

                        <form action="{{route('business-cessation.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="citizen_id" id="cessation_business_citizen_id">

                            <div class="row">
                                <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Business Name</label>
                                        <input type="text" class="form-control form-control" id="business_name"
                                               name="business_name" required value="{{old('business_name')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Business Address</label>
                                        <textarea class="form-control" name="address" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Business Owner</label>
                                        <input type="text" class="form-control form-control" id="business_owner"
                                               name="business_owner" required value="{{old('business_owner')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Owner Address</label>
                                        <textarea class="form-control" name="owner_address" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Cessation Date</label>
                                        <input type="date" name="cessation_date" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Purpose</label>
                                        <textarea class="form-control" name="purpose" required></textarea>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success btn-sm btn-block">SUBMIT</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="businessClearanceModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Business Certificate</h5>

                    </div>
                    <div class="modal-body">

                        <form
                            action="{{route('store-business-permit')}}"
                            method="POST">
                            @csrf
                            <input type="hidden" name="citizen_id" id="business_citizen_id">

                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Business Name</label>
                                        <input type="text" class="form-control form-control" id="business_name"
                                               name="business_name" required value="{{old('business_name')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Business Type</label>
                                        <input type="text" class="form-control form-control" id="business_type"
                                               name="business_type" required value="{{old('business_type')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Proprietor / Operator / Manager</label>
                                <input type="text" name="manager" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Residence Address</label>
                                <textarea class="form-control" name="residence_address" required></textarea>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Applied For</label>
                                        <input type="text" class="form-control form-control" id="applied_for"
                                               name="applied_for"
                                               required value="{{old('applied_for')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Res. Cert. No</label>
                                        <input type="text" class="form-control form-control" id="cert_no" name="cert_no"
                                               required value="{{old('cert_no')}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>OR No.</label>
                                        <input type="text" class="form-control form-control" id="or_no" name="or_no"
                                               required
                                               value="{{old('or_no')}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Amount Paid</label>
                                        <input type="text" class="form-control form-control" id="amount_paid"
                                               name="amount_paid"
                                               required value="{{old('amount_paid')}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Control No.</label>
                                <input type="text" name="control_no" id="control_no" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success btn-sm btn-block">SUBMIT</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Citizen</h5>

                    </div>
                    <div class="modal-body">
                        <form class="user" action="{{route('citizen.store')}}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control"
                                           placeholder="First Name" name="first_name" value="{{old('first_name')}}"
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control"
                                           placeholder="Middle Name" name="middle_name" value="{{old('middle_name')}}"
                                           required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control"
                                           placeholder="Last Name" name="last_name" value="{{old('last_name')}}"
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control"
                                           placeholder="Contact Number" name="contact" value="{{old('contact')}}"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control form-control"
                                       placeholder="Date of Birth" name="dob" required>
                            </div>

                            <div class="form-group">
                                <label>Civil Status</label>
                                <select class="form-control" name="status">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Citizenship</label>
                                    <input type="text" class="form-control form-control"
                                           placeholder="Last Name" name="citizenship" value="Filipino" required>
                                </div>
                                <div class="col-sm-6">
                                    <label>Occupation</label>
                                    <input type="text" class="form-control form-control"
                                           placeholder="Occupation" name="occupation" value="{{old('occupation')}}"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Zone</label>
                                <input type="text" class="form-control form-control"
                                       placeholder="Zone Number" name="zone" value="{{old('zone')}}">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control form-control"
                                       placeholder="Complete Address" name="address">
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                            <hr>

                        </form>
                    </div>

                </div>
            </div>
        </div>


        <div class="modal fade" id="certificateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Certificate</h5>

                    </div>
                    <div class="modal-body">

                        <form method="POST" action="{{ route('store-citizen-certificate') }}">
                            @csrf
                            <input type="hidden" name="citizen_id" id="certificate_citizenship_id">
                            <div class="form-group">
                                <label>Select Certificate</label>
                                <select class="form-control" name="certificate_id" required>
                                    @foreach($certificates as $cert)
                                        <option
                                            value="{{$cert->id}}">{{explode('_', $cert->name)[0].' '.explode('_',  $cert->name)[1]}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Community Tax</label>
                                <input type="text" class="form-control form-control" id="community_tax"
                                       name="community_tax"
                                       required value="{{ old('community_tax') }}">
                            </div>

                            <div class="form-group">
                                <label>Amount Paid</label>
                                <input type="number" class="form-control form-control" id="amount_paid"
                                       name="amount_paid"
                                       required value="{{ old('amount_paid') }}">
                            </div>

                            <div class="form-group">
                                <label>Purpose</label>
                                <textarea name="purpose" class="form-control" required
                                          value="{{ old('purpose') }}"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success btn-sm btn-block">SUBMIT</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="cedulaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cedula</h5>

                    </div>
                    <div class="modal-body">

                        <form method="POST" action="{{ route('citizen.cedula') }}">
                            @csrf
                            <input type="hidden" name="citizen_id" id="citizen_id_cedula" value="0">
                            <!-- <input type="hidden" name="citizen_id" id="business_citizen_id"> -->
                            <input type="hidden" name="certificate_id" id="certificate_id" value="7">

                        <!-- <div class="form-group">
                           <label>Select Certificate</label>
                           <select class="form-control" name="certificate_id" required>
                               @foreach($certificates as $cert)
                            <option value="{{$cert->id}}">{{explode('_', $cert->name)[0].' '.explode('_',  $cert->name)[1]}}</option>
                               @endforeach
                            </select>
                        </div> -->

                        <!-- <div class="form-group">
                            <label>Community Tax</label>
                            <input type="text" class="form-control form-control" id="community_tax" name="community_tax" required value="{{old('community_tax')}}">
                        </div> -->


                            <div class="form-group">TIN</div>
                            <input type="text" name="tin_id_cedula" placeholder="10123123123123"
                                   class="form-control s-3 inputs my-3" required>


                            <div class="form-group">
                                <label>ICR No. (if an alien)</label>
                                <input type="number" class="form-control form-control" id="icr" name="icr" required
                                       value="{{ old('icr') }}">
                            </div>

                            <div class="form-group">
                                <label>Place of Birth</label>
                                <input type="text" class="form-control form-control" id="birthplace" name="birthplace"
                                       required
                                       value="{{old('birthplace')}}">
                            </div>


                            <div class="form-group">
                                <label>Height (in feet)</label>
                                <div class="col-12 d-flex align-items-center justify-content-center">
                                    <label> </label>
                                    <input type="text" name="cedula_height_1" style="width: 35px;" placeholder="1"
                                           class="form-control" maxlength="1" required
                                           value="{{old('height1_cedula')}}">
                                    &nbsp; ' &nbsp;
                                    <input type="text" name="cedula_height_2" style="width: 45px;" placeholder="2"
                                           class="form-control" minlength="1" maxlength="2" required
                                           value="{{old('height2_cedula')}}">
                                    &nbsp; " &nbsp;
                                    <!-- JQuery Script to Auto tab height to the next form -->
                                    <script>
                                        $(".height").keyup(function () {
                                            if (this.value.length == this.maxLength) {
                                                $(this).next('.height').focus();
                                            }
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Weight (in kilograms)</label>
                                <input type="number" id="weight_cedula" name="weight_cedula"
                                       class="form-control form-control"
                                       required value="{{old('weight_cedula')}}">
                                <label class="form-label" for="weight_cedula"></label>
                            </div>

                            <div class="form-group">


                                <div class="form-group">
                                    <label>Basic Community Tax (P5.00) Voluntary or Excempted (P1.00)</label>
                                    <select class="form-control" name="basictax" required value="{{old('basictax')}}">

                                        <option value="5">P5.00</option>
                                        <option value="1">P1.00</option>

                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="mt-2">Gross Receipts or Earnings</label>
                                <div class="form-helper" style="font-size:12px">Gross Receipts Or Earnings Derived from
                                    Business
                                    During the Preceeding Year (P1.00 for every P1,000.00)
                                </div>
                                <div class="form-outline">
                                    <input type="number" id="grossreceipt_taxable" name="grossreceipt_taxable"
                                           class="form-control form-control mb-2" required
                                           value="{{old('grossreceipt_taxable')}}">

                                </div>


                                <div class="form-outline">
                                    <label class="mt-2">Salaries or Gross Receiptor</label>
                                    <div class="form-helper" style="font-size:12px">Salaries or Gross Receiptor Earnings
                                        Derived
                                        from Exercise of Profession or Pursuit of Any Occupation (P1.00 for every 1,000)
                                    </div>
                                    <input type="number" id="salary_taxable" name="salary_taxable"
                                           class="form-control form-control mb-2" required
                                           value="{{old('salary_taxable')}}">


                                </div>


                                <div class="form-outline">
                                    <label class="mt-2">Income from Real Property</label>
                                    <div class="form-helper" style="font-size:12px">Income from Real Property (P1.00 for
                                        every
                                        1,000)
                                    </div>
                                    <input type="number" id="income_taxable" name="income_taxable"
                                           class="form-control form-control mb-2" required
                                           value="{{old('income_taxable')}}">
                                </div>


                                <div class="form-outline">
                                    <label class="mt-2">Interest</label>
                                    <input type="number" id="interest_cedula" name="interest_cedula"
                                           class="form-control form-control mb-4" required
                                           value="{{old('interest_cedula')}}">
                                </div>

                                <button type="submit" class="btn btn-success btn-sm btn-block">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pictureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Camera Preview</h5>

                </div>
                <div class="modal-body">

                    <div class="row">
                        <div id="my_camera"></div>
                    </div>


                    <div class="row">
                        <button class="btn btn-danger btn-block take_picture">Take Snapshot</button>
                        <div id="results">Your captured image will appear here...</div>
                        <button class="btn btn-success btn-block" id="doneBtnCloseCamera" style="display: none;">DONE
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function () {


                $(".edit").click(function () {
                    const data = JSON.parse($(this).val());
                    console.log(data);
                    $("#citizenship_id").val(data.id);
                    $("#first_name_edit").val(data.first_name);
                    $("#last_name_edit").val(data.last_name);
                    $("#middle_name_edit").val(data.middle_name);
                    $("#email_edit").val(data.email);
                    $("#address_edit").val(data.address);
                    $("#contact_edit").val(data.contact);
                    $("#dob_edit").val(data.dob);
                    $("#gender_edit").val(data.gender);
                    $("#status_edit").val(data.status);

                    $("#occupation_edit").val(data.occupation);
                    $("#zone_edit").val(data.zone);
                });


                Webcam.set({
                    width: 320,
                    height: 240,
                    image_format: 'jpeg',
                    jpeg_quality: 90
                });
                Webcam.attach('#my_camera');

                $(".picture").click(function () {
                    temp_picture_user_id = $(this).val();
                });

                $('#cedulaClickModal').click(function () {
                    $('#citizen_id_cedula').val($(this).val());
                })

                $(".take_picture").click(function () {
                    var user_id_picture = $(this).val();

                    Webcam.snap(function (data_uri) {
                        // console.log(data_uri);
                        temp_image = data_uri;
                        document.getElementById('results').innerHTML = '<img src="' + temp_image + '"/>';
                        $.ajax({
                            type: 'POST',
                            url: ' {{ route('save-citizen-picture') }} ',
                            data: {_token: ' {{ csrf_token() }}', user_id: temp_picture_user_id, image: temp_image},
                            success: function (data) {
                                console.log(data);
                                $("#doneBtnCloseCamera").show();
                            }
                        });

                    });

                });

                $("#doneBtnCloseCamera").click(function () {
                    $("#pictureModal").modal('hide')
                });

                $(".certificate").click(function () {
                    var citizenship_id = $(this).val();
                    $("#certificate_citizenship_id").val(citizenship_id);
                });

                $(".business_clearance").click(function () {
                    console.log('citizen_id');
                    var citizenship_id = $(this).val();
                    $("#business_citizen_id").val(citizenship_id);
                });

                $(".cessation_business").click(function () {
                    var citizenship_id = $(this).val();
                    $("#cessation_business_citizen_id").val(citizenship_id);
                });


            });
        </script>
    @endpush
@endsection
