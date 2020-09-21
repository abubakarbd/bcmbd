@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Agent From</h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('agent.index') }}"><i class="fa fa-users"></i> Agent</a></li>
        <li class="active"><i class="fa fa-fw fa-plus-square"></i> Agent From</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	      <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border bg-info">
          <h3 class="box-title">Agent From</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          @include('includes.message')
           @error('user_id')
           <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
          @enderror
          <form action="{{ route('agentForm.pakage.Save') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $agent->id }}">
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Agent Name" value="{{ $agent->name }}" readonly>
                @error('name')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
         
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" id="mobile" placeholder="Enter Client Mobile" value="{{ $agent->mobile }}" readonly>
                @error('mobile')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="pakage">Pakage</label>
                <input type="text" name="pakage" class="form-control @error('pakage') is-invalid @enderror" id="pakage" placeholder="Enter Client Mobile" value="{{ old('pakage') }}">
                @error('pakage')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="bill">Bill</label>
                <input type="text" name="bill" class="form-control @error('bill') is-invalid @enderror" id="bill" placeholder="Enter Client Mobile" value="{{ old('bill') }}">
                @error('bill')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

               <div class="box-footer pr-2">
                <button type="submit" class="btn btn-info pull-right">Save Mane</button>
              </div>
            </div>
          </form>
          
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection