@extends('layouts.app')


@section('section')
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css" rel="stylesheet">
    @endpush

@section('section')
    <div id="page-top">
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
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                @include('shared.navbar')
                <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid col-xl-8 col-lg-7">

                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-12 col-md-12 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    CITIZENS
                                                </div>
                                                <div
                                                    class="h5 mb-0 font-weight-bold text-gray-800">{{ 10 }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div id='calendar'></div>


                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->


                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <form>
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Event</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 p-2 mr-3">
                                    <h5 for="ex3">Add Event</h5>
                                    <input type="hidden" value="0.0" id="startDate" name="start">
                                    <input type="hidden" value="0.0" id="endDate" name="end">
                                    <input class="form-control ml-1 mr-5" id="event_title" name="event_title"
                                           type="text">
                                </div>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" id="event_save" class="btn btn-success" data-save="modal">Save
                                </button>
                                <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div id="myEditModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <form>
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Event</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 p-2 mr-3">
                                    <h5 for="ex3">Add Event</h5>
                                    <input type="hidden" value="0" id="edit_id">
                                    <input class="form-control ml-1 mr-5" id="event_edit_title" name="event_title"
                                           type="text">
                                </div>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" id="event_edit" class="btn btn-success" data-save="modal">Save
                                </button>
                                <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id='calendar'></div>

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                            <button type="submit" class="btn btn-primary">Logout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });

            $('#event_save').click(function () {
                const startDate = $('#startDate').val();
                const event = $('#event_title').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('add-event') }}",
                    data: {
                        start: startDate,
                        event_title: event,
                    },
                    success: function (data) {
                        $('#myModal').modal('toggle');
                        location.reload();
                    }
                })
            });


            $('#event_edit').click(function () {
                const event = $('#event_edit_title').val();
                const eventId = $('#edit_id').val();


                $.ajax({
                    type: "POST",
                    url: "{{ route('edit-event') }}",
                    data: {
                        title: event,
                        event_id: eventId
                    },
                    success: function (data) {
                        $('#myEditModal').modal('toggle');
                        location.reload();
                    }
                })
            });

            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: @json($events),
                dateClick: function (info) {
                    $('#myModal').modal('toggle')

                    $('#startDate').val(info.dateStr);
                },
                eventClick: function (info) {
                    $('#myEditModal').modal('toggle');
                    $('#event_edit_title').val(info.event.title);
                    $('#edit_id').val(info.event.id);
                }
            });

            calendar.render();

            {{--console.log(@json($data));--}}

            {{--const baseURL = "{{ url('/') }}";--}}
            {{--const startDate = null;--}}
            {{--const endDate = null;--}}




            {{--const calendar = $('#calendar').fullCalendar({--}}
            {{--    editable: true,--}}
            {{--    events: @json($data),--}}
            {{--    displayEventTime: false,--}}
            {{--    editable: true,--}}
            {{--    eventRender: function (event, element, view) {--}}
            {{--        if (event.allDay === 'true') {--}}
            {{--            event.allDay = true;--}}
            {{--        } else {--}}
            {{--            event.allDay = false;--}}
            {{--        }--}}
            {{--    },--}}
            {{--    selectable: true,--}}
            {{--    selectHelper: true,--}}

            {{--    select: function (start, end, allDay) {--}}
            {{--        $('#myModal').appendTo("body").modal('show');--}}
            {{--        $('#startDate').val($.fullCalendar.formatDate(start, "Y-MM-DD"));--}}
            {{--        $('#endDate').val($.fullCalendar.formatDate(end, "Y-MM-DD"));--}}

            {{--        calendar.fullCalendar('unselect');--}}
            {{--    },--}}
            {{--    eventClick: function (event) {--}}
            {{--        var deleteMsg = confirm("Do you really want to delete?");--}}
            {{--        if (deleteMsg) {--}}
            {{--            $.ajax({--}}
            {{--                type: "POST",--}}
            {{--                url: "{{ url('captain/fullcalenderAjax') }}",--}}
            {{--                data: {--}}
            {{--                    id: event.id,--}}
            {{--                    type: 'delete'--}}
            {{--                },--}}
            {{--                success: function (response) {--}}

            {{--                }--}}
            {{--            });--}}
            {{--        }--}}
            {{--    }--}}
            {{--});--}}


            // eventDrop: function (event, delta) {
//     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
//     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

//     $.ajax({
//         url: "{{ url('captain/fullcalenderAjax') }}",
//         data: {
//             title: event.title,
//             start: start,
//             end: end,
//             id: event.id,
//             type: 'update'
//         },
//         type: "POST",
//         success: function (response) {
//             console.log(response);
//             displayMessage("Event Updated Successfully");
//         }
//     });


// select: function (start, end, allDay) {
//     var title = prompt('Event Title:');
//     if (title) {
//         var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
//         var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
//         $.ajax({
//             url: "{{ url('captain/fullcalenderAjax') }}",
//             data: {
//                 title: title,
//                 start: start,
//                 end: end,
//                 type: 'add'
//             },
//             type: "POST",
//             success: function (data) {

//                 displayMessage("Event Created Successfully");

//                 calendar.fullCalendar('renderEvent',
//                     {
//                         id: data.id,
//                         title: title,
//                         start: start,
//                         end: end,
//                         allDay: allDay
//                     },true);

//                 calendar.fullCalendar('unselect');
//             }
//         });
//     }
// },

// },
// eventClick: function (event) {
//     var deleteMsg = confirm("Do you really want to delete?");
//     if (deleteMsg) {
//         $.ajax({
//             type: "POST",
//             url: "{{ url('captain/fullcalenderAjax') }}",
//             data: {
//                     id: event.id,
//                     type: 'delete'
//             },
//             success: function (response) {
//                 console.log(response);
//                 calendar.fullCalendar('removeEvents', event.id);
//                 displayMessage("Event Deleted Successfully");
//             }
//         });
//     }
// }


// function displayMessage(message) {
//     toastr.success(message, 'Event');
// }


        });
    </script>

@endpush
@endsection
