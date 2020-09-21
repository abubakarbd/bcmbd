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
			@if($errors->any())
				@foreach($errors->all() as $error)
				<div class="callout callout-danger alert alert-dismissible">
			        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			        <i class="icon fa fa-ban"></i> {{$error}}
			      </div>
				@endforeach
			@endif
		</div>
		<!-- /.box-header -->
		<div class="box-body table-responsive">
		  <table id="example1" class="table table-bordered table-striped">
		    <thead>
		    <tr>
		      <th style="width: 10%">No</th>
		      <th style="width: 15%">Name</th>
		      <th style="width: 15%">Mobile</th>
		      <th style="width: 20%">Month</th>
		      <th style="width: 10%">Pay</th>
		      <th style="width: 10%">Bill</th>
		      <th style="width: 10%">Action</th>
		    </tr>
		    </thead>
		    <tbody>
		   @php($i = 1)
		  @foreach($bill as $row)
		    <tr>
		      <td>{{ $i}}</td>
		      <form action="{{ route('bill.save') }}" method="POST">
		      	@csrf
		      	<input type="hidden" name="user_id" value="{{ $row->id }}">
		      	<input type="hidden" name="name" value="{{ $row->name }}">
		      	<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      	<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      <td>{{ $row->name }}<input type="hidden" name="name" value="{{ $row->name }}"></td>
		      <td>{{ $row->mobile }}<input type="hidden" name="mobile" value="{{ $row->mobile }}"></td>
		      <td><input class="form-control @error('bill_date') is-invalid @enderror" type="date" name="bill_date"></td>
		      <td><input class="form-control @error('bill') is-invalid @enderror" style="width: 80px;" type="text" name="bill"></td>
		      <td><b>{{ $row->mbill }}</b></td>
		      <td><input type="submit" class="btn btn-info" value="Pay Naw"></td>
		      </form>
		    </tr>
		    @php($i++)
		    @endforeach
		    </tbody>
		    <tfoot>
		    <tr>
		      <th></th>
		      <th></th>
		      <th></th>
		      <th></th>
		      <th></th>
		      <th></th>
		      <th></th>
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