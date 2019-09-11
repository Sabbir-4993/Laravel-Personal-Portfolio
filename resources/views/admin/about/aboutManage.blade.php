@extends('admin.home.homecontent')

@section('title')
About - Manage
@endsection

@section('content-heading')
About control area
<br>
{{ Session::get('message')}}
@endsection

@section('mainContent')
    
<div class="panel-body">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Location</th>
                <th>Description</th>
                <th>Expeience</th>
                <th>Project</th>
                <th class="center">Service Name</th>
                <th>Service Details</th>
                <th>Client Name</th>
                <th>Client Designation</th>
                <th>Client Comment</th>
                <th>CV</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
        <?php 
            $i = 0;
        ?>
             @foreach($aboutm as $aboutrow)
            <tr class="odd gradeX">
                <td>{{ ++$i }}</td>
                <td>{{ $aboutrow['name']}}</td>
                <td>{{ $aboutrow['location']}}</td>
                <td>{{ $aboutrow['description']}}</td>
                <td>{{ $aboutrow['exprience']}}</td>
                <td>{{ $aboutrow['project']}}</td>
                <td>{{ $aboutrow['serviceName']}}</td>
                <td>{{ $aboutrow['serviceDetails']}}</td>
                <td>{{ $aboutrow['clientName']}}</td>
                <td>{{ $aboutrow['clientDesignation']}}</td>
                <td>{{ $aboutrow['clientComment']}}</td>
                <td>{{ $aboutrow['file']}}</td>
                <td>
                    <a href="{{url('/about/edit/'.$aboutrow->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('/about/delete/'.$aboutrow->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
