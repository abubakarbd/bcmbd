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
          <form action="{{ route('agentForm.Save') }}" method="POST">
            @csrf
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Agent Name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="company">Company Name</label>
                <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" id="company" placeholder="Company Name" value="{{ old('company') }}">
                @error('company')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-Mail Address" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
         
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" id="mobile" placeholder="Agent Mobile" value="{{ old('mobile') }}">
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
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection