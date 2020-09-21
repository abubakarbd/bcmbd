@extends('layouts.agent')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Profile</h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('Agent.dashBoard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-fw fa-plus-square"></i>Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	      <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border bg-info">
           <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border bg-success form-group">
              <h3 class="box-title">Profile</h3>
            </div>
          @include('includes.message')
          <form action="" method="POST">
            @csrf
              <div class="form-group">
                <label for="company">Company Name</label>
                <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" id="company" placeholder="Enter Client Name" value="{{ Auth::user()->company }}" readonly>
                @error('company')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Client Name" value="{{ Auth::user()->name }}" readonly>
                @error('name')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ Auth::user()->email }}" readonly>
                @error('email')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
         
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" id="mobile" value="{{ Auth::user()->mobile }}" readonly>
                @error('mobile')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

               <div class="box-footer pr-2">
                
              </div>
          </form>
        </div>
          </div>

          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header with-border bg-danger form-group">
              <h3 class="box-title">Change Password</h3>
            </div>
            @if(Session('pmsg'))
            <div class="alert alert-{{Session('css')}} alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-ban"></i> {{Session('pmsg')}}
                </div>
          @endif
          <form action="{{ route('Admin.password') }}" method="POST">
            @csrf
            <div class="col-md-12">
              <div class="form-group">
                <label for="password">Old Password</label>
                <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" placeholder="Enter Old Password">
                @error('old_password')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="password" placeholder="Enter New Password" value="{{ old('new_password') }}">
                @error('new_password')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Enter Confirm Password" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

               <div class="box-footer pr-2">
                <button type="submit" class="btn btn-info pull-right">Change Password</button>
              </div>
            </div>
          </form>
            </div>
            </div>
          </div>
          
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection