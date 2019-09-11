@extends('admin.home.homecontent')


@section('title')
About - Edit
@endsection

@section('content-heading')
About Edit
@endsection


@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                About Edit Form
            </div>
            <div class="panel-body">
                <div class="row ">
                    <div class="col-md-6">
                        <!-- <form role="form"> -->
                        {!! Form::open(['url'=>'/about/edit', 'method'=>'post', 'role'=>'form']) !!}
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" value="{{ $about->name}}">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input class="form-control" name="location" value="{{ $about->location}}">
                            </div>
                            <div class="form-group">
                                <label>About Myself</label>
                                <textarea class="form-control" rows="3" name="description">{{ $about->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Exprience</label>
                                <input class="form-control" name="exprience" value="{{ $about->exprience}}">
                            </div>
                            <div class="form-group">
                                <label>project</label>
                                <input class="form-control" name="project" value="{{ $about->project}}">
                            </div>
                            <div class="form-group">
                                <label>Service Name</label>
                                <input class="form-control" name="serviceName" value="{{ $about->serviceName}}">
                            </div>
                            <div class="form-group">
                                <label>Service Details</label>
                                <textarea class="form-control" rows="3" name="serviceDetails">{{ $about->serviceDetails }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Client Name</label>
                                <input class="form-control" name="clientName" value="{{ $about->clientName}}">
                            </div>
                            <div class="form-group">
                                <label>Client Designation</label>
                                <input class="form-control" name="clientDesignation" value="{{ $about->clientDesignation}}">
                            </div>
                            <div class="form-group"> 
                                <label>Client Comment</label>
                                <textarea class="form-control" rows="3" name="clientComment">{{ $about->clientComment }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Select Portfolio to upload</label>
                                <input type="file" name="file" value="{{ $about->file}}">
                            </div>
                            <input type="hidden" name="id" value='{{$about->id}}'>
                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-block btn-primary">
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








