@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    
    Agent List
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-users"></i> Agent</li>
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
		      <th>Pakage</th>
		      <th>Bill</th>
		      <th>Active</th>
		    </tr>
		    </thead>
		    <tbody>
		   @php($i = 1)
		  @foreach($pakage as $row)
		    <tr>
		      <td>{{ $i}}</td>
		      <td>{{ $row->name }}</td>
		      <td>{{ $row->mobile }}</td>
		      <td>{{ $row->pakage }}</td>
		      <td>{{ $row->bill }}</td>
		      <td>
		      	<div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn bg-teal btn-sm" data-toggle="tooltip" data-container="body" title="Edit">
                    <a href="{{ route('pakage.Edit', $row->id) }}" class="h5"><i class="fa fa-fw fa-edit"></i></a></button>
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
		      <th>Email</th>
		      <th>Status</th>
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