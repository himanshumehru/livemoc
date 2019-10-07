@extends('frontend.app')
@section('title')
Your Profile
@endsection

@section('content')

	<div class="row">
		<div class="col-sm-12">

			<div class="card">
				<div class="card-header"><h1>Your Profile</h1></div>
				<div class="card-body">
					<ul class="list-group list-group-flush">
					  <li class="list-group-item">First Name: {{Auth::user()->firstname}}</li>
					  @if(!empty(Auth::user()->middlename))<li class="list-group-item">Middle Name: {{Auth::user()->middlename}}</li>@endif
					  <li class="list-group-item">Last Name: {{Auth::user()->lastname}}</li>
					  <li class="list-group-item">ABFM ID: {{Auth::user()->abfmid}}</li>
					  <li class="list-group-item">Email: {{Auth::user()->email}}</li>
					  <li class="list-group-item">Birthday: {{Auth::user()->birthday}}</li>
					  <li class="list-group-item">Gender: @if(Auth::user()->gender == "notsay"){{"I'd rather not say"}} @else {{ucfirst(Auth::user()->gender)}} @endif</li>
<!-- 					  <li class="list-group-item"><a href="{{url('/edit-profile')}}">Edit</a></li>
 -->					</ul>
				</div>
			</div>
		</div>		
	</div>


@endsection