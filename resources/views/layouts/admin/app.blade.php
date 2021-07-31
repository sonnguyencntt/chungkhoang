<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Users</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href={{asset("assets/admin/bower_components/font-awesome/css/font-awesome.min.css")}}>
  <link rel="stylesheet" href={{asset("assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css")}}>

  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"> --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" /> --}}
  <!-- Ionicons -->
  <link rel="stylesheet" href={{asset("assets/admin/bower_components/Ionicons/css/ionicons.min.css")}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("assets/admin/dist/css/AdminLTE.min.css?ver=02")}}>
  <link rel="stylesheet" href={{asset("assets/admin/dist/css/mystyle.css")}}>

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href={{asset("assets/admin/dist/css/skins/_all-skins.min.css")}}>
  <!-- Morris chart -->
  <link rel="stylesheet" href={{asset("assets/admin/bower_components/morris.js/morris.css")}}>
  <!-- jvectormap -->
  <link rel="stylesheet" href={{asset("assets/admin/bower_components/jvectormap/jquery-jvectormap.css?ver=02")}}>
  <!-- Date Picker -->
  <link rel="stylesheet"
    href={{asset("assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{asset("assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css")}}>
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href={{asset("assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}>
  <link rel="stylesheet" href={{asset("assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}>
  <!-- Select2 -->
  <link rel="stylesheet" href={{asset("assets/admin/bower_components/select2/select2.full.min.css")}}>
  <link rel="stylesheet" href={{asset("assets/admin/plugins/fileinput/fileinput.min.css")}}>
  <script src={{asset("assets/admin/bower_components/jquery/dist/jquery.min.js")}}></script>

  <script src={{asset("assets/admin/bower_components/select2/select2.full.min.js")}}></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <!-- jQuery UI 1.11.4 -->

  <!-- Bootstrap 3.3.7 -->
  <script src={{asset("assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js")}}></script>
  <script src={{asset("assets/admin/bower_components/chart/chart.js")}}></script>
  <script src={{asset("assets/admin/plugins/fileinput/fileinput.min.js")}}></script>

  <!-- Morris.js charts -->
  <!-- AdminLTE App -->
  <script src={{asset("assets/admin/dist/js/adminlte.min.js?ver=02")}}></script>

  <!-- AdminLTE for demo purposes -->
  <script src={{asset("assets/admin/dist/js/demo.js?ver=02")}}></script>



  <!-- DataTables -->
  <script src={{asset("assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js")}}></script>
  <script src={{asset("assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}></script>




</head>]
<style>
  ::-webkit-scrollbar {
    width: 3px;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #2b356b;
}
</style>


<body class="skin-blue sidebar-mini wysihtml5-supported fixed" style="height: auto; min-height: 100%;">
  <div class="wrapper" style="height: auto; min-height: 100%;">
    @include('partials.admin.header')

    <!-- Left side column. contains the logo and sidebar -->
    @include('partials.admin.sidebar')
   
  
    <!-- Content Wrapper. Contains page content -->
   @yield('content')

    <!-- /.content-wrapper -->

    <!-- create brand modal -->

    @include('partials.admin.footer')

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  </div>
  <!-- ./wrapper -->
</body>
<script src="assets/admin/dist/js/function.js?ver=03"></script>

<script src="assets/admin/dist/js/callajax.js"></script>

<script src="assets/admin/dist/js/chart.js"></script>



</html>
{{-- <head>
  <meta charset="UTF-8" />
  <title>ON-OFF Switch Button</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
</head>
<style>
  HTML CSSResult Skip Results Iframe
EDIT ON
* {
  padding: 0;
  margin: 0;
  outline: 0;
  font-family: 'IBM Plex Sans', sans-serif;
}
body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  width: 100vw;
  overflow: hidden;
}
.switch-toggle {
  display: flex;
  height: 100%;
  align-items: center;
}
.switch-btn, .layer {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.button-check {
  position: relative;
  width: 90px;
  height: 46px;
  overflow: hidden;
  border-radius: 50px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  -ms-border-radius: 50px;
  -o-border-radius: 50px;
}
.checkbox {
  position: relative;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  opacity: 0;
  cursor: pointer;
  z-index: 3;
}

.switch-btn {
  z-index: 2;
}

.layer {
  width: 100%;
  background-color: #8cf7a0;
  transition: 0.3s ease all;
  z-index: 1;
}
#button-check .switch-btn:before, #button-check .switch-btn:after {
  position: absolute;
  top: 4px;
  left: 4px;
  width: 30px;
  height: 20px;
  color: #fff;
  font-size: 10px;
  font-weight: bold;
  text-align: center;
  line-height: 1;
  padding: 9px 4px;
  background-color: #00921c;
  border-radius: 50%;
  transition: 0.3s cubic-bezier(0.18, 0.89, 0.35, 1.15) all;
  display: flex;
  align-items: center;
  justify-content: center;
}

#button-check .switch-btn:before {
  content: 'ON';
}

#button-check .switch-btn:after {
  content: 'OFF';
}

#button-check .switch-btn:after {
  right: -50px;
  left: auto;
  background-color: #F44336;
}

#button-check .checkbox:checked + .switch-btn:before {
  left: -50px;
}

#button-check .checkbox:checked + .switch-btn:after {
  right: 4px;
}

#button-check .checkbox:checked ~ .layer {
  background-color: #fdd1d1;
}
</style>
<body>
  <div class="switch-toggle">
    <div class="button-check" id="button-check">
      <input type="checkbox" class="checkbox">
      <span class="switch-btn"></span>
      <span class="layer"></span>
    </div>
  </div>
</body> --}}
{{-- <style>
  body {
  font-family: 'Rubik', sans-serif;
  padding: 0;
  margin: 0;
}

div.container {
  height: 100vh;
  width: 93.5%;
  
  display: flex;
  justify-content: center;
  align-items: center;
}

div.pop-up {
  position: relative;
  left: 128px;
  bottom: 68px;
  width: 120px;
  height: 80px;
  background-color: #3795f6;
  border-radius: 5px;
  cursor: pointer;
}

div.pop-up p {
  position: relative;
  bottom: 10px;
  text-align: center;
  color: #fff;
}

div.arrow-down {
  position: relative;
  top: 78px;
  left: 45px;
  width: 0; 
  height: 0; 
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  
  border-top: 15px solid #3795f6;
}

div.online-indicator {
  display: inline-block;
  width: 15px;
  height: 15px;
  margin-right: 10px;
  
  background-color: #0fcc45;
  border-radius: 50%;
  
  position: relative;
}
span.blink {
  display: block;
  width: 15px;
  height: 15px;
  
  background-color: #0fcc45;
  opacity: 0.7;
  border-radius: 50%;
  
  animation: blink 1s linear infinite;
}

h2.online-text {
  display: inline;
  
  font-family: 'Rubik', sans-serif;
  font-weight: 400;
  text-shadow: 0px 3px 6px rgba(150, 150, 150, 0.2);
  
  position: relative;
  cursor: pointer;
}

/*Animations*/

@keyframes blink {
  100% { transform: scale(2, 2); 
          opacity: 0;
        }
}
</style>
<div class="container">
  <div class="online-indicator">
    <span class="blink"></span>
  </div>
  <h2 class="online-text">I'm Online</h2>
</div>
 --}}

