@extends('layouts.agent')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Client List
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('Agent.dashBoard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-users"></i> Client</li>
  </ol>
  </section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
		<div class="box">
		<div class="box-header">
			@include('includes.message')
		</div>
		<!-- /.box-header -->
		<div class="box-body table-responsive">
		  <table id="example1" class="table table-bordered table-striped">
		    <thead>
		    <tr>
		      <th>No</th>
		      <th>Name</th>
		      <th>Mobile</th>
		      <th>Username</th>
		      <th>Password</th>
		      <th>Monthly Bill</th>
		      <th>Status</th>
		      <th>Active</th>
		    </tr>
		    </thead>
		    <tbody>
		   @php($i = 1)
		  @foreach($user as $row)
		    <tr>
		      <td>{{ $i}}</td>
		      <td>{{ $row->name }}</td>
		      <td>{{ $row->mobile }}</td>
		      <td>{{ $row->username }}</td>
		      <td>{{ $row->password }}</td>
		      <td>{{ $row->mbill }} TK</td>
		      @if($row->status == 1)
		      @php($x=0)
		      @php($y=1)
		      <td><a onclick="alert('You really want to Inactive')" href="{{ route('user.inActive',$row->id) }}" class="btn btn-success" data-toggle="tooltip" data-container="body" title="Inactive">Active</a></td>
		      @elseif($row->status == 2)
		      <td><a onclick="alert('You really want to Active')" href="{{ route('user.bill.Active', $row->id) }}" class="btn btn-danger" data-toggle="tooltip" data-container="body" title="Active All">Inactive</a></td>
		      @else
		      <td><a onclick="alert('You really want to Active')" href="{{ route('user.Active', $row->id) }}" class="btn btn-danger" data-toggle="tooltip" data-container="body" title="Active">Inactive</a></td>
		      @endif
		      <td>
		      	<div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                <!-- /.btn-group -->
                  <button type="button" class="btn bg-orange btn-sm" data-toggle="tooltip" data-container="body" title="View">
                    <a href="{{ route('user.View', $row->id) }}" class="h5"><i class="fa fa-eye text-default"></i></a></button>

                  <button type="button" class="btn bg-teal btn-sm" data-toggle="tooltip" data-container="body" title="Edit">
                    <a href="{{ route('user.Edit', $row->id) }}" class="h5"><i class="fa fa-fw fa-edit"></i></a></button>

                  <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <a onclick="alert('You really want to Delete')" href="{{ route('user.Delete', $row->id) }}" class="h5"><i class="fa fa-trash-o"></i></a></button>
                </div>
              </div>
		      </td>
		    </tr>
		    @php($i++)
		    @endforeach
		    </tbody>
		    <tfoot>
		    <tr>
		      <th>No</th>
		      <th>Name</th>
		      <th>Mobile</th>
		      <th>Package</th>
		      <th>Monthly Bill</th>
		      <th>Active</th>
		    </tr>
		    </tfoot>
		  </table>
		</div>
		<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
</div>
</section>
</div>
@endsection