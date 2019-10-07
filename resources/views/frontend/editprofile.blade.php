@extends('frontend.app')

@section('content')


{!! Form::model(Auth::user(), ['route' => ['user.update', Auth::user()->id], 'method'=>'patch'])!!}


<div class="form-group">
	{!! Form::label('firstname', 'First Name:')!!}
{!!Form::text('firstname',null, ['class' => 'form-control'])!!}

</div>


<div class="form-group">
	{!! Form::label('middlename', 'Middle Name:')!!}
{!!Form::text('middlename', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">{!! Form::label('lastname', 'Last Name:')!!}
{!!Form::text('lastname', null, ['class' => 'form-control'])!!}</div>

<div class="form-group">{!! Form::label('email', 'E-Mail Address:')!!}
{!!Form::text('email', null, ['class' => 'form-control'])!!}</div>
<!-- <div class="form-group">{!! Form::label('password', 'Password:')!!}
{!!Form::password('password', ['class' => 'form-control'])!!}
{!! Form::label('password_confirmation', 'Confirm Password:')!!}
{!!Form::password('password', ['class' => 'form-control'])!!}</div> -->

<div class="form-group">{!!Form::submit('Update Profile', ['class' => 'btn btn-primary'])!!}</div>



{!! Form::close() !!}

@endsection