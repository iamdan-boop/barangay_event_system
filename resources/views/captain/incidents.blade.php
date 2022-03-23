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
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                    TOTAL INCIDENT
                                                </div>
                                                <div
                                                    class="h5 mb-0 font-weight-bold text-gray-800">{{ $incidents->count() }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-flag fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary float-left">INCIDENT REPORTS</h6>
                                <button class="btn btn-danger btn-sm float-right" data-toggle="modal"
                                        data-target="#createIncidentModal">Add Incident
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
                                            <th>Type of Incident</th>
                                            <th>Involve</th>
                                            <th>Location</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($incidents as $incident)
                                            <tr>
                                                <td>{{$incident->type_incident}}</td>
                                                <td>{{$incident->people_involve}}</td>
                                                <td>{{$incident->location}}</td>
                                                <td>{{Carbon\Carbon::parse($incident->date_incident)->format('l jS \\of F Y ')}}</td>
                                                <td>{{Carbon\Carbon::parse($incident->time_incident)->format('h.i A')}}</td>
                                                <td>
                                                    <button class="btn btn-info btn-sm edit" value="{{$incident}}"
                                                            data-toggle="modal" data-target="#updateIncidentModal">Edit
                                                    </button>
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


        <div class="modal fade" id="updateIncidentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Incident</h5>

                    </div>
                    <div class="modal-body">
                        <form class="user" action="{{route('incident.update')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="incident_id" id="incident_id">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Date of Incident</label>
                                    <input type="date" class="form-control form-control"
                                           placeholder="First Name" name="date_incident"
                                           value="{{old('date_incident')}}" required id="date_incident">
                                </div>
                                <div class="col-sm-6">
                                    <label>Time</label>
                                    <input type="time" class="form-control form-control" name="time_incident"
                                           value="{{old('time_incident')}}" required id="time_incident">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control form-control"
                                       placeholder="Place happened" name="location" value="{{old('location')}}" required
                                       id="location">
                            </div>

                            <div class="form-group">
                                <label>Type of Incident</label>
                                <select class="form-control" required name="type_incident">
                                    <option value=""></option>
                                    @foreach($incident_types as $incident_type)
                                        <option value="{{$incident_type->name}}">{{$incident_type->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control" placeholder="Person's Name"
                                       name="people_involve" value="{{old('people_involve')}}" required
                                       id="people_involve">
                            </div>
                            <div class="form-group col-lg-4">
                                <button type="button" class="btn btn-primary clone">+</button>
                                <button type="button" class="btn btn-danger remove">-</button>
                            </div>


                        <!-- <div class="form-group">
                                    <label>People Involves, Note: For more than one people. Just separate each by comma (,). Ex: John Doe, John Wu</label>
                                    <input type="text" class="form-control form-control"
                                        placeholder="What kind of incident" name="people_involve" value="{{old('people_involve')}}" required id="people_involve">
                                </div> -->

                            <div class="form-group">
                                <label>Details of Incident</label>
                                <textarea name="details_incident" class="form-control"
                                          value="{{old('details_incident')}}" rows="7" required
                                          id="details_incident"></textarea>
                            </div>


                            <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                            <hr>

                        </form>
                    </div>

                </div>
            </div>
        </div>


        <div class="modal fade" id="createIncidentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Incident</h5>

                    </div>
                    <div class="modal-body">
                        <form class="user" action="{{route('incident.store')}}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Date of Incident</label>
                                    <input type="date" class="form-control form-control"
                                           placeholder="First Name" name="date_incident"
                                           value="{{old('date_incident')}}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label>Time</label>
                                    <input type="time" class="form-control form-control" name="time_incident"
                                           value="{{old('time_incident')}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control form-control"
                                       placeholder="Location of where incident took place" name="location"
                                       value="{{old('location')}}" required>
                            </div>

                            <div class="form-group">
                                <label>Type of Incident</label>
                                <select class="form-control" required name="type_incident">
                                    <option value=""></option>
                                    @foreach($incident_types as $incident)
                                        <option value="{{$incident->name}}">{{$incident->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="container_involve">
                                <label>People Involved</label>


                                <div class="row input_involve">
                                    <div class="form-group col-lg-8">
                                        <input type="text" class="form-control form-control"
                                               placeholder="Person's Name" name="people_involve"
                                               value="{{old('people_involve')}}" required id="people_involve">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <button type="button" class="btn btn-primary clone">+</button>
                                        <button type="button" class="btn btn-danger remove">-</button>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Details of Incident</label>
                                <textarea name="details_incident" class="form-control"
                                          value="{{old('details_incident')}}" rows="7" required></textarea>
                            </div>


                            <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                            <hr>

                        </form>
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
