@extends('layouts.agent')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1> Munthly Bill Shit </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('Agent.dashBoard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-users"></i> Bill Shit</li>
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
		      <th>January</th>
		      <th>February</th>
		      <th>March</th>
		      <th>April</th>
		      <th>May</th>
		      <th>June</th>
		      <th>July</th>
		      <th>August</th>
		      <th>September</th>
		      <th>October</th>
		      <th>November</th>
		      <th>December</th>
		    </tr>
		    </thead>
		    <tbody>
		   @php($i = 1)
		   @php($tsum = 0)
		  @foreach($bill as $row)
		    <tr class="text-center">
		      <td>{{ $i}}</td>
		      <td>{{ $row->name }}</td>
		      <td>{{ $row->mobile }}</td>

		      @if($row->january == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.january') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{ $row->id }}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->february == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.february') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{ $row->id }}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="hidden" name="february" value="1">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->march == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.march') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{$row->user_id}}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="hidden" name="march" value="1">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->april == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.april') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{$row->user_id}}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="hidden" name="april" value="1">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->may == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.may') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{$row->user_id}}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="hidden" name="may" value="1">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->june == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.june') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{$row->user_id}}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="hidden" name="june" value="1">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->july == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.july') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{ $row->user_id }}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="hidden" name="july" value="1">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->august == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.august') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{$row->user_id}}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="hidden" name="august" value="1">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->september == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.september') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{ $row->id }}">
		      		<input type="hidden" name="user_id" value="{{ $row->user_id }}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      	
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->october == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.october') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{ $row->id }}">
		      		<input type="hidden" name="user_id" value="{{ $row->user_id }}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->november == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.november') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{$row->id }}">
		      		<input type="hidden" name="user_id" value="{{$row->user_id }}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="hidden" name="november" value="1">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif

		      @if($row->december == 1)
		      <td><span class="btn btn-success">Paid</span></td>
		      @else
		      <td>
		      	<form action="{{ route('user.bill.pay.december') }}" method="POST">
		      	@csrf
		      		<input type="hidden" name="id" value="{{$row->id}}">
		      		<input type="hidden" name="user_id" value="{{$row->user_id}}">
		      		<input type="hidden" name="name" value="{{ $row->name }}">
		      		<input type="hidden" name="mobile" value="{{ $row->mobile }}">
		      		<input type="hidden" name="bm_mobile" value="{{ Auth::user()->mobile }}">
		      		<input type="hidden" name="december" value="1">
		      		<input type="text" class="form-control" style="width: 60px; border-radius: 5px;" name="bill" value="{{ $row->bill }}">
		      		<input onclick="alert('Did you get the Money?')" type="submit" class="btn btn-danger" value="Due">
		      	</form>
		      </td>
		      @endif
		    </tr>
		     @php($tsum = $tsum+ $row->bill)
		    @php($i++)
		    @endforeach
		    </tbody>
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