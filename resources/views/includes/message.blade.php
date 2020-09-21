@if(Session('msg'))
	<div class="callout alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-check"></i> {{ Session('msg') }}
      </div>
@endif

@if(Session('umsg'))
	<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-ban"></i> {{Session('umsg')}}
      </div>
@endif

<!-- @if($errors->any())
	@foreach($errors->all() as $error)
	<div class="callout callout-danger alert alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-ban"></i> {{$error}}
      </div>
	@endforeach
@endif -->
