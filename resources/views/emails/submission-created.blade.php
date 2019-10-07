@component('mail::message')

# New submission completed: {{$formname}}

Here is a summary:

<h3>User Details:</h3>
					First Name: {{$user->firstname}}<br />
					  @if(!empty($user->middlename))Middle Name: {{$user->middlename}}<br />@endif
					 Last Name: {{$user->lastname}}<br />
					  ABFM ID: {{$user->abfmid}}<br />
					  Email: {{$user->email}}<br />
					  Birthday: {{$user->birthday}}<br />
					  Gender: @if($user->gender == "notsay"){{"I'd rather not say"}} @else {{ucfirst($user->gender)}} <br />@endif
					<br />

 <h3>Selected Answers:</h3>
<ol>
					@foreach (json_decode($submission->answers, true) as $key => $value)
					<li>{{str_replace('_', ' ',$key)}}: 
					 
						@if (is_array($value))
						
							<ul>
							@for ($i = 0; $i < count($value); $i++)
							  <li> <strong>{{ array_values($value)[$i]}}</strong> </li>
							@endfor
							</ul>
						
						@else
  					 <strong> {{$value}}</strong></li>
  					  @endif
					@endforeach

				</ol>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
