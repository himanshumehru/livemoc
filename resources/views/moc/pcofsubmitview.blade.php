@extends('frontend.app')
@section('title')
Submission Complete
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-sm-12 col-md-8"><div class="card">
			<div class="card-header"><h1>Your submission is now compelete!</h1></div>
			<div class="card-body"><p>Here are your responses:</p>
				<ol>
					@foreach ($newSubmission->answers as $key => $value)
					<li>{{$key}}:
					 
						@if (is_array($value))
						<li>
							<ul>
							@for ($i = 0; $i < count($value); $i++)
							  <li> {{ array_values($value)[$i]}} </li>
							@endfor
							</ul>
						</li>
						@else
  					  {{$value}}</li>
  					  @endif
					@endforeach

				</ol>

			</div>
		</div></div>
	</div>
</div>





@endsection
