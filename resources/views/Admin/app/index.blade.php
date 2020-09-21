@extends('layouts.admin')
@section('title', 'Apps')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1> App</h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-users"></i> App</li>
  </ol>
  </section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-6">

		<div class="box">
				<div class="box-header with-border bg-info">
          <h3 class="box-title">App List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
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
		      <th>Location</th>
		      <th>Status</th>
		      <th>Action</th>
		    </tr>
		    </thead>
		    <tbody>
		   @php($i = 1)
		  @foreach($app as $row)
		    <tr>
		      <td>{{ $i }}</td>
		      <td>{{ $row->name }}</td>
		      <td>{{ $row->location }}</td>
		      @if($row->status == 1)
		      @php($x=0)
		      @php($y=1)
		      <td><a onclick="alert('You really want to Inactive')" href="{{ route('agent.inactive',$row->id) }}" class="btn btn-success" data-toggle="tooltip" data-container="body" title="Inactive">Active</a></td>
		      @else
		      <td><a onclick="alert('You really want to Active')" href="{{ route('agent.active', $row->id) }}" class="btn btn-danger" data-toggle="tooltip" data-container="body" title="Active">Inactive</a></td>
		      @endif
		      <td>
		      	<div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                <!-- /.btn-group -->
                  <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-container="body" title="Pakage Active">
                    <a href="{{ route('agent.Form.pakage.create', $row->id) }}" class="h5"><i class="fa fa-fw fa-bell text-default"></i></a></button>

                  <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <a onclick="alert('You really want to Delete')" href="{{ route('mane.Delete', $row->id) }}" class="h5"><i class="fa fa-trash-o"></i></a></button>
                </div>
              </div>
		      </td>
		    </tr>
		    @endforeach
		    </tbody>
		  </table>
		</div>
		<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-xs-6">
		<div class="box box-info">
        <div class="box-header with-border bg-info">
          <h3 class="box-title">App From</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          @include('includes.message')
          <form action="{{ route('linemaneForm.save') }}" method="POST">
            @csrf
            <div class="col-md-12">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Client Name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
         
            <div class="form-group">
                <label for="mobile">File</label>
                <input type="file" name="mobile" class="form-control @error('mobile') is-invalid @enderror" id="mobile" placeholder="Enter Client Mobile" value="{{ old('mobile') }}">
                @error('mobile')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

               <div class="box-footer pr-2">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
            </div>
          </form>
          
        </div>
        <!-- /.box-body -->
      </div>
	</div>
</div>
</section>
</div>
@endsection