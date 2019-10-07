@extends('frontend.app')

@section('title')

UWFMC

@endsection


@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
			<h1>Welcome to the UWFMC Teaching MOC. </h1>
			<p>Presented to you by Family Medicine Clerkship at the University of Washington School of Medicine</p>
<!-- 			<p>Please <a href="{{url('/login')}}">login</a> or <a href="{{url('/register')}}">register</a> to create an account</p>
 -->		</div>
	
	</div>
	@include('auth.loginform')
@endsection