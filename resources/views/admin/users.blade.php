<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ secure_asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                    <img src="../images/logo_naga.png" class="" style="width:55px;height:55px;">
                </div>
                <div class="sidebar-brand-text mx-3 text-capitalize">Barangay Records Management</div>
            </a>

            @include('michael.barangay_web.resources.views.shared.admin_sidebar')

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="{{URL::to('img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="{{route('admin_profile')}}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                TOTAL USERS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_user}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                ACTIVE ACCOUNTS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_user_active}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas  fa-check-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            INACTIVE ACCOUNTS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_user_deactivated}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas  fa-times-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary float-left">User Accounts</h6>
                            <button class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#createUserModal">Add User</button>
                        </div>
                        <div class="card-body">
                            @if( $errors->any() )
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>

                            @endif
                            @include('michael.barangay_web.resources.views.shared.notification')
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->first_name}} {{$user->last_name}}</td>

                                            <td>{{$user->contact}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{ucfirst($user->getRoleNames()[0])}}</td>
                                            <td>
                                                @if($user->status_id == 1)
                                                    <p>ACTIVE</p>
                                                @else
                                                    <p>INACTIVE</p>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-sm edit" value="{{$user->id}}" data-toggle="modal" data-target="#editUserModal">EDIT</button>
                                                @if($user->status_id == 1)
                                                    <a href="{{route('admin_user_deactiave',$user->id)}}" class="btn btn-danger btn-sm">DEACTIVATE</a>
                                                @else
                                                    <a href="{{route('admin_user_activate',$user->id)}}" class="btn btn-success btn-sm">ACTIVATE</a>
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
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('admin_logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

     <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>

                </div>
                <div class="modal-body">
                    <form class="user" action="{{route('register_check')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control" id="exampleFirstName"
                                            placeholder="First Name" name="first_name" value="{{old('first_name')}}" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control" id="exampleLastName"
                                            placeholder="Last Name" name="last_name" value="{{old('last_name')}}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control" id="exampleInputEmail"
                                        placeholder="Address" name="address" value="{{old('address')}}" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control" id="exampleInputEmail"
                                        placeholder="Email Address" name="email" value="{{old('email')}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control" id="exampleInputEmail"
                                        placeholder="Contact Number" name="contact" value="{{old('contact')}}" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control"
                                            id="exampleInputPassword" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="col-sm-6">

                                        <input type="password" class="form-control form-control"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="repeat_password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control form-control" id="calendar"
                                        placeholder="Date of Birth" name="dob" required>
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender" required>
                                        <option value=""></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>User Type</label>
                                    <select class="form-control" name="user_type" required>
                                        <option value=""></option>
                                        <option value="captain">Captain</option>
                                        <option value="secretary">Secretary</option>
                                        <option value="treasurer">Treasurer</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                                <hr>

                            </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>

                </div>
                <div class="modal-body">
                    <form class="user" action="{{route('admin_update_user')}}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" id="user_id">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control" id="first_name"
                                            placeholder="First Name" name="first_name" value="{{old('first_name')}}" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control" id="last_name"
                                            placeholder="Last Name" name="last_name" value="{{old('last_name')}}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control" id="address"
                                        placeholder="Address" name="address" value="{{old('address')}}" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control" id="email"
                                        placeholder="Email Address" name="email" value="{{old('email')}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control" id="contact"
                                        placeholder="Contact Number" name="contact" value="{{old('contact')}}" required>
                                </div>
                               <!--  <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control"
                                            id="exampleInputPassword" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="col-sm-6">

                                        <input type="password" class="form-control form-control"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="repeat_password" required>
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control form-control" id="dob"
                                        placeholder="Date of Birth" name="dob" required>
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender" id="gender" required >
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>User Type</label>
                                    <select class="form-control" name="user_type" id="user_type" required>
                                        <option value="captain">Captain</option>
                                        <option value="secretary">Secretary</option>
                                        <option value="treasurer">Treasurer</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control" id="contact"
                                        placeholder="New Password" name="password" value="{{old('password')}}" >
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Update Account</button>
                                <hr>

                            </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ secure_asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ secure_asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ secure_asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ secure_asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ secure_asset('js/demo/datatables-demo.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var get_user_info = '{{route('admin_get_user')}}';
            var token = '{{Session::token()}}';

            $(".edit").click(function(){
                var user_id = $(this).val();
                $.ajax({
                   type:'POST',
                   url: get_user_info,
                   data: {_token: token, user_id : user_id},
                   success:function(data) {
                      console.log(data);
                      $("#user_id").val(data.id);
                      $("#first_name").val(data.first_name);
                      $("#last_name").val(data.last_name);
                      $("#email").val(data.email);
                      $("#address").val(data.address);
                      $("#contact").val(data.contact);
                      $("#dob").val(data.dob);
                      $("#gender").val(data.gender);
                      $("#user_type").val(data.role_name);

                   }
                });
            });
        });
    </script>

</body>

</html>
