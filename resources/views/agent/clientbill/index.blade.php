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
		      <th>Month</th>
		      <th>Pay</th>
		      <th></th>
		      <th></th>
		    </tr>
		    </thead>
		    <tbody>
		   @php($i = 1)
		  @foreach($bill as $row)
		    <tr>
		      <td>{{ $i}}</td>
		      <td>{{ $row->name }}</td>
		      <td>{{ $row->mobile }}</td>
		      <td>{{ $row->mbill }}</td>
		      <td>{{ $row->mbill }}</td>
		      <td><input type="text" name="tk"></td>
		      <td><input type="submit" class="btn btn-info" value="Pay Naw"></td>
		      @if($row->status == 1)
		      @php($x=0)
		      @php($y=1)
		      <td><a onclick="alert('You really want to Inactive')" href="{{ route('user.inActive',$row->id) }}" class="btn btn-success" data-toggle="tooltip" data-container="body" title="Inactive">Active</a></td>
		      @else
		      <td><a onclick="alert('You really want to Active')" href="{{ route('user.Active', $row->id) }}" class="btn btn-danger" data-toggle="tooltip" data-container="body" title="Active">Inactive</a></td>
		      @endif
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
		      <th>Active</th>
		      <th>Active</th>
		      <th>Bill Pay</th>
		      <th>Action</th>
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