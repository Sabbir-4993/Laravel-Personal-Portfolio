@extends('admin.master')

@section('title')
    Dashboard
@endsection

@section('content-heading')
    Home
@endsection

@section('css')
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin') }}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin') }}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin') }}/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
@endsection


@section('js')
    <!-- jQuery -->
    <script src="{{ asset('admin') }}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('admin') }}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('admin') }}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/morrisjs/morris.min.js"></script>
    <script src="{{ asset('admin') }}/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin') }}/dist/js/sb-admin-2.js"></script>
@endsection

