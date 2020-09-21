@extends('layouts.agent')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>User Edit From</h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('Agent.dashBoard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('user.index') }}"><i class="fa fa-users"></i> Client</a></li>
        <li><a href=""><i class="fa fa-users"></i> Client</a></li>
        <li class="active"><i class="fa fa-fw fa-plus-square"></i> Client Edit From</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	      <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border bg-info">
          <h3 class="box-title">User Edit From</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          @include('includes.message')
          <form action="{{ route('user.Update') }}" method="POST">
            @csrf
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="hidden" name="id" value="{{ $user->id }}">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $user->name }}">
                @error('name')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ $user->username }}">
                @error('username')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Account Type</label>
                 <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio" class="form-check-input" name="type" value="1" {{ $user->type == 1 ? 'checked':'' }}>
                        </span>
                    <input type="text" readonly value="Corporate" class="form-control @error('type') is-invalid @enderror">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio" class="form-check-input" name="type" value="2" {{ $user->type == 2 ? 'checked':'' }}>
                        </span>
                    <input type="text" readonly value="Individual" class="form-control @error('type') is-invalid @enderror">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
                @error('type')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="package">Package</label>
                <input type="text" name="package" class="form-control @error('package') is-invalid @enderror" id="package" value="{{ $user->package }}">
                @error('package')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" id="mobile" value="{{ $user->mobile }}">
                @error('mobile')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ $user->password }}">
                @error('password')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="ip">IP</label>
                <input type="text" name="ip" class="form-control @error('ip') is-invalid @enderror" id="ip" value="{{ $user->ip }}">
                @error('ip')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="mbill">Monthly Bill</label>
                <input type="text" name="mbill" class="form-control @error('mbill') is-invalid @enderror" id="mbill" value="{{ $user->mbill }}">
                @error('mbill')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-12">
              <div class="form-group">
                  <label>Address</label>
                  <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3">
                    {{ $user->address }}
                  </textarea>
                  @error('address')
                    <span class="text-danger mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

            <div class="box-footer pr-2">
                <button type="submit" class="btn btn-info pull-right">Update User</button>
              </div>
            <!-- /.col -->
          </form>
          
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection