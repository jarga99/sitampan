<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    @csrf
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href=" {{asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}} ">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" {{asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}} ">
    <!-- Theme style -->
    <link rel="stylesheet" href=" {{asset('AdminLTE/dist/css/AdminLTE.min.css')}} ">
    <!-- iCheck -->
    <link rel="stylesheet" href=" {{asset('AdminLTE/plugins/iCheck/square/blue.css')}} ">

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">

    {{-- login box --}}
    @include('auth.login')
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src=" {{asset('AdminLTE/bower_components/jquery/dist/jquery.min.js')}} "></script>
    <!-- Bootstrap 3.3.7 -->
    <script src=" {{asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}} "></script>
    <!-- iCheck -->
    <script src=" {{asset('AdminLTE/plugins/iCheck/icheck.min.js')}} "></script>
    {{-- validator --}}
    <script src=" {{asset('js/validator.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
        $('.form-login').validator();
    </script>
</body>

</html>
