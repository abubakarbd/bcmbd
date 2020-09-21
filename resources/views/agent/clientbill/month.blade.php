@extends('layouts.agent')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Client Munthly Bill Info
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('Agent.dashBoard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-users"></i> Munthly Bill - {{ date('M') }}</li>
  </ol>
  </section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
		<div class="box">
		<div class="box-header">
         <div class="mb-3">
            <a href="{{ route('bill.month.index', '01') }}" class="btn btn-info">January</a>
            <a href="{{ route('bill.month.index', '02') }}" class="btn btn-primary">February</a>
            <a href="{{ route('bill.month.index', '03') }}" class="btn btn-success">March</a>
            <a href="{{ route('bill.month.index', '04') }}" class="btn btn-warning">April</a>
            <a href="{{ route('bill.month.index', '05') }}" class="btn btn-info">May</a>
            <a href="{{ route('bill.month.index', '06') }}" class="btn btn-success">June</a>
            <a href="{{ route('bill.month.index', '07') }}" class="btn btn-danger">July</a>
            <a href="{{ route('bill.month.index', '08') }}" class="btn btn-primary">August</a>
            <a href="{{ route('bill.month.index', '09') }}" class="btn btn-info">September</a>
            <a href="{{ route('bill.month.index', '10') }}" class="btn btn-success">October</a>
            <a href="{{ route('bill.month.index', '11') }}" class="btn btn-warning">November</a>
            <a href="{{ route('bill.month.index', '12') }}" class="btn btn-danger">December</a>
        </div>
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
		      <th>Pay Date</th>
		      <th>Amount</th>
		      <th>Status</th>
		    </tr>
		    </thead>
		    <tbody>
		   @php($i = 1)
		   @php($tsum = 0)
		  @foreach($bill as $row)
		    <tr>
		      <td>{{ $i}}</td>
		      <td>{{ $row->name }}</td>
		      <td>{{ $row->mobile }}</td>
		      <td>{{ $row->bill_date }}</td>
		      <td>{{ $row->bill }}</td>
		      @if($row->bill_date )
		      @php($x=0)
		      @php($y=1)
		      <td><a onclick="alert('You really want to Inactive')" href="{{ route('user.inActive',$row->id) }}" class="btn btn-success" data-toggle="tooltip" data-container="body" title="Inactive">Paid</a></td>
		      @else
		      <td><a onclick="alert('You really want to Active')" href="{{ route('user.Active', $row->id) }}" class="btn btn-danger" data-toggle="tooltip" data-container="body" title="Active">Due</a></td>
		      @endif
		    </tr>
		     @php($tsum = $tsum+ $row->bill)
		    @php($i++)
		    @endforeach
		    </tbody>
		    <tfoot>
		    <tr>
		      <th>No</th>
		      <th>Name</th>
		      <th>Mobile</th>
		      <th>Pay Date</th>
		      <th>{{ $tsum }} TK</th>
		      <th>Status</th>
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