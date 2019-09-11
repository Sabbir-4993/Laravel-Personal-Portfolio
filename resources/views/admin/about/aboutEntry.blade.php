@extends('admin.master')

@section('title')
About - Entry
@endsection

@section('content-heading')
About Entry
<br>
{{ Session::get('message')}}
@endsection


@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                About Entry Form
            </div>
            <div class="panel-body">
                <div class="row ">
                    <div class="col-md-6">
                        <!-- <form role="form"> -->
                        {!! Form::open(['url'=>'/about/insert', 'method'=>'post', 'role'=>'form']) !!}
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" placeholder="Enter Name" name="name">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input class="form-control" placeholder="area" name="location">
                            </div>
                            <div class="form-group">
                                <label>About Myself</label>
                                <textarea class="form-control" placeholder="details" rows="3" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Exprience</label>
                                <input class="form-control" placeholder="Enter Exprience" name="exprience">
                            </div>
                            <div class="form-group">
                                <label>project</label>
                                <input class="form-control" placeholder="Enter completed project" name="project">
                            </div>
                            <div class="form-group">
                                <label>Service Name</label>
                                <input class="form-control" placeholder="Enter Service Name" name="serviceName">
                            </div>
                            <div class="form-group">
                                <label>Service Details</label>
                                <textarea class="form-control" placeholder="Enter Service Details" rows="3" name="serviceDetails"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Client Name</label>
                                <input class="form-control" placeholder="Enter Client Name" name="clientName">
                            </div>
                            <div class="form-group">
                                <label>Client Designation</label>
                                <input class="form-control" placeholder="Enter Client Designation" name="clientDesignation">
                            </div>
                            <div class="form-group"> 
                                <label>Client Comment</label>
                                <textarea class="form-control" placeholder="Enter Client Comment" rows="3" name="clientComment"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Select Portfolio to upload</label>
                                <input type="file" name="file">
                            </div>
                            <!-- <button type="submit" value="submit" class="btn btn-block btn-primary">Submit</button> -->
                            <div class="form-group">
                                <input type="submit" value="submit" class="btn btn-block btn-primary">
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
        </div>
    </div>
</div>


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
