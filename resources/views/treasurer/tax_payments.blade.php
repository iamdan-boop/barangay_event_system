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

                @include('shared.treasurer_sidebar')

            </ul>
            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">
                    @include('shared.navbar')
                    <div class="container-fluid">
                        <!-- DataTales Example -->

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">CHOOSE PAYMENT TYPE</h6>
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

                                <div class="row">
                                    <div class="form-group col-sm-12 col-lg-6">
                                        <button type="button" class="btn btn-secondary btn-block btn-lg"
                                                data-toggle="modal" data-target="#taxPaymentModal">Tax Receipt
                                        </button>
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-6">
                                        <button type="button" class="btn btn-danger btn-block btn-lg"
                                                data-toggle="modal" data-target="#certificatePaymentModal">Barangay
                                            Certificates Payment
                                        </button>
                                    </div>
                                </div>

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

    <div class="modal fade" id="certificatePaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Certification Payment Informations</h5>

                </div>
                <div class="modal-body">
                    <form class="user" action="{{ route('treasurer.store-certificate-payment') }}"
                          method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Agency</label>
                            <input type="text" name="agency" class="form-control" required>
                        </div>

                        <label>Payor</label>
                        <select class="form-control" name="payor" required id="payor">
                            <option value=""></option>
                            @foreach($citizens as $citizen)
                                <option
                                    value="{{ $citizen->id }}">{{ $citizen->first_name. ' '. $citizen->middle_name. ' '. $citizen->last_name }}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <label>Fund</label>
                            <input type="text" name="fund" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Payment Method</label>
                            <select class="form-control" name="payment_method" required id="tax_payment_method2">
                                <option value=""></option>
                                <option value="Cash">Cash</option>
                                <option value="Check">Check</option>
                                <option value="Money Order">Money Order</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Certificate</label>
                            <select class="form-control" name="certificate" required>
                                <option value="Barangay Clearance">Barangay Clearance</option>
                                <option value="Barangay Certificate">Barangay Certificate</option>
                                <option value="Good Moral Certificate">Good Moral Certificate</option>
                                <option value="Health Certificate">Health Certificate</option>
                                <option value="Indengency Certificate">Indengency Certificate</option>
                                <option value="Residency Certificate">Residency Certificate</option>
                                <option value="Business Clearance">Business Clearance</option>
                                <option value="Cessation Business">Cessation Business</option>

                            </select>
                        </div>

                        <div class="row tax-drawee2" style="display: none;">

                            <div class="form-group col-sm-12 col-lg-6">
                                <label>Drawee Bank</label>
                                <input type="text" name="drawee_bank" class="form-control" required id="drawee_bank2">
                            </div>

                            <div class="form-group col-sm-12 col-lg-6">
                                <label>Drawee Bank Numer</label>
                                <input type="text" name="drawee_bank_number" class="form-control" required
                                       id="drawee_bank_number2">
                            </div>

                        </div>

                        <div class="form-group tax-drawee2" style="display: none;">
                            <label>Drawee Bank Date</label>
                            <input type="date" name="drawee_bank_date" class="form-control" required
                                   id="drawee_bank_date2">
                        </div>


                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                        <hr>

                    </form>
                </div>

            </div>
        </div>
    </div>



    <div class="modal fade" id="taxPaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tax Payment Information</h5>

                </div>
                <div class="modal-body">
                    <form class="user" action="{{ route('treasurer.store-tax-payment') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nature of Collection</label>
                            <input type="text" name="nature_of_collection" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Account Code</label>
                            <input type="text" name="account_code" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" name="amount" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Agency</label>
                            <input type="text" name="agency" class="form-control" required>
                        </div>


                        <label>Payor</label>
                        <select class="form-control" name="payor" required id="payor">
                            <option value=""></option>
                            @foreach($citizens as $citizen)
                                <option
                                    value="{{ $citizen->id }}">{{ $citizen->first_name. ' '. $citizen->middle_name. ' '. $citizen->last_name }}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <label>Fund</label>
                            <input type="text" name="fund" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Payment Method</label>
                            <select class="form-control" name="payment_method" required id="tax_payment_method">
                                <option value=""></option>
                                <option value="Cash">Cash</option>
                                <option value="Check">Check</option>
                                <option value="Money Order">Money Order</option>
                            </select>
                        </div>


                        <div class="row tax-drawee" style="display: none;">

                            <div class="form-group col-sm-12 col-lg-6">
                                <label>Drawee Bank</label>
                                <input type="text" name="drawee_bank" class="form-control" required id="drawee_bank">
                            </div>

                            <div class="form-group col-sm-12 col-lg-6">
                                <label>Drawee Bank Numer</label>
                                <input type="text" name="drawee_bank_number" class="form-control" required
                                       id="drawee_bank_number">
                            </div>

                        </div>

                        <div class="form-group tax-drawee" style="display: none;">
                            <label>Drawee Bank Date</label>
                            <input type="date" name="drawee_bank_date" class="form-control" required
                                   id="drawee_bank_date">
                        </div>


                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                        <hr>

                    </form>
                </div>

            </div>
        </div>
    </div>


    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function () {
                $("#tax_payment_method").change(function () {
                    let payment_method = $(this).val();
                    if (payment_method === 'Check' || payment_method === 'Money Order') {
                        $("#drawee_bank").attr("type", "text");
                        $("#drawee_bank_number").attr("type", "text");
                        $("#drawee_bank_date").attr("type", "date");

                        $(".tax-drawee").show();
                        return;
                    }
                    $("#drawee_bank").attr("type", "hidden");
                    $("#drawee_bank_number").attr("type", "hidden");
                    $("#drawee_bank_date").attr("type", "hidden");
                    return;
                });

                $("#tax_payment_method2").change(function () {
                    let payment_method = $(this).val();
                    if (payment_method != 'Cash') {
                        $("#drawee_bank2").attr("type", "text");
                        $("#drawee_bank_number2").attr("type", "text");
                        $("#drawee_bank_date2").attr("type", "date");

                        $(".tax-drawee2").show();

                    } else {

                        $("#drawee_bank2").attr("type", "hidden");
                        $("#drawee_bank_number2").attr("type", "hidden");
                        $("#drawee_bank_date2").attr("type", "hidden");


                    }
                });


                $(".edit").click(function () {
                    var incident_id = $(this).val();
                    $("#date_incident").val(data.date_incident);
                    $("#time_incident").val(data.time_incident);
                    $("#details_incident").val(data.details_incident);
                    $("#location").val(data.location);
                    $("#type_incident").val(data.type_incident);
                    $("#people_involve").val(data.people_involve);
                    $("#incident_id").val(data.id);
                });
            });
        </script>
    @endpush
@endsection
