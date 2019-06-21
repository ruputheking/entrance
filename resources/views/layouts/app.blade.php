
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'MyEntrance')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/backend/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/backend/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css">
  <link rel="stylesheet" href="/backend/plugins/jasny-bootstrap/css/jasny-bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/backend/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  {{-- <link rel="stylesheet" href="/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> --}}
  <link rel="stylesheet" href="/backend/plugins/simplemde/simplemde.min.css">
  <link rel="stylesheet" href="/backend/css/custom.css">
  @yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper" style="background-color:#ecf0f5;">

    @include('layouts.navbar')

    @yield('content')

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a>ForeTech Nepal</a>.</strong> All rights
    reserved.
  </footer>

  </div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/backend/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/backend/js/bootstrap.min.js"></script>
<script src="/backend/plugins/simplemde/simplemde.min.js"></script>
<script type="text/javascript" src="/backend/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/backend/js/app.min.js"></script>
@yield('script')
</body>
</html>
