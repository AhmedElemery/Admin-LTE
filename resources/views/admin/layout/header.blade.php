<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('/design/adminPanel/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/design/adminPanel/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('/design/adminPanel/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  @if (direction() == 'ltr')
  <link rel="stylesheet" href="{{ url('/design/adminPanel/dist/css/AdminLTE.min.css') }}">
  @else
  <link rel="stylesheet" href="{{ url('/design/adminPanel/dist/rtl/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ url('/design/adminPanel/dist/rtl/bootstrap-rtl.min.css') }}">
  <link rel="stylesheet" href="{{ url('/design/adminPanel/dist/rtl/profile.css') }}">
  <link rel="stylesheet" href="{{ url('/design/adminPanel/dist/rtl/rtl.css') }}">
  @endif
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('/design/adminPanel/dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ url('/design/adminPanel/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ url('/design/adminPanel/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ url('/design/adminPanel/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('/design/adminPanel/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url('/design/adminPanel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
<link rel="stylesheet" href="{{ url('/design/adminPanel/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
