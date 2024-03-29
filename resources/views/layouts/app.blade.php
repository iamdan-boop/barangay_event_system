<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css" rel="stylesheet">


    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ secure_asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-gradient-primary">

@yield('section')

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
@stack('scripts')

<script src="{{ secure_asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
<script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ secure_asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{secure_asset('js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{ secure_asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ secure_asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ secure_asset('js/demo/datatables-demo.js')}}"></script>
<script type="text/javascript" src="{{ secure_asset('js/webcam.min.js')}}"></script>

</body>
</html>
