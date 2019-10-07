@extends('layouts.app')
@section('title')
Edit Your Profile
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-12 col-md-8">
			<div class="card">
				<div class="card-header">Edit your profile</div>
				<div class="card-body">
					   <form method="POST" action="{{ route('user.update', $user->id) }}">
              @method('PATCH')
              @csrf
      <div class="form-group row">
        <label for="firstname" class="col-4 col-form-label">First Name</label> 
        <div class="col-8">
          <input id="firstname" name="firstname" type="text" class="form-control" value="{{$user->firstname}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="lastname" class="col-4 col-form-label">Last Name</label> 
        <div class="col-8">
          <input id="lastname" name="lastname" type="text" class="form-control" value="{{$user->lastname}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="abfmnumber" class="col-4 col-form-label">ABFM Number<span class="text-primary">*</span></label> 
        <div class="col-8">
          <input id="abfmnumber" name="abfmnumber" type="text" class="form-control"readonly value="{{$user->abfmnumber}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
          <input id="email" name="email" type="text" class="form-control" value="{{$user->email}}">
        </div>
      </div>
      <!-- <div class="form-group row">
        <label for="edit_password" class="col-4 col-form-label">Password</label> 
        <div class="col-8">
          <input id="edit_password" name="edit_password" type="password" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="edit_password_confirmation" class="col-4 col-form-label">Confirm Password</label> 
        <div class="col-8">
          <input id="edit_password_confirmation" name="edit_password_confirmation" type="password" class="form-control">
        </div>
      </div> -->
      <div class="form-group row">
        <label for="age" class="col-4 col-form-label">Birth Year</label> 
        <div class="col-8">
          <select id="age" name="age" class="custom-select">
            <option value=""></option>
                                  <option value="1995" {{$user->age=='1995'? 'selected' : ''}}>1995</option>

  <option value="1994" {{$user->age=='1994'? 'selected' : ''}}>1994</option>

  <option value="1993" {{$user->age=='1993'? 'selected' : ''}}>1993</option>

  <option value="1992" {{$user->age=='1992'? 'selected' : ''}}>1992</option>

  <option value="1991" {{$user->age=='1991'? 'selected' : ''}}>1991</option>

  <option value="1990" {{$user->age=='1990'? 'selected' : ''}}>1990</option>

  <option value="1989" {{$user->age=='1989'? 'selected' : ''}}>1989</option>

  <option value="1988" {{$user->age=='1988'? 'selected' : ''}}>1988</option>

  <option value="1987" {{$user->age=='1987'? 'selected' : ''}}>1987</option>

  <option value="1986" {{$user->age=='1986'? 'selected' : ''}}>1986</option>

  <option value="1985" {{$user->age=='1985'? 'selected' : ''}}>1985</option>

  <option value="1984" {{$user->age=='1984'? 'selected' : ''}}>1984</option>

  <option value="1983" {{$user->age=='1983'? 'selected' : ''}}>1983</option>

  <option value="1982" {{$user->age=='1982'? 'selected' : ''}}>1982</option>

  <option value="1981" {{$user->age=='1981'? 'selected' : ''}}>1981</option>

  <option value="1980" {{$user->age=='1980'? 'selected' : ''}}>1980</option>

  <option value="1979" {{$user->age=='1979'? 'selected' : ''}}>1979</option>

  <option value="1978" {{$user->age=='1978'? 'selected' : ''}}>1978</option>

  <option value="1977" {{$user->age=='1977'? 'selected' : ''}}>1977</option>

  <option value="1976" {{$user->age=='1976'? 'selected' : ''}}>1976</option>

  <option value="1975" {{$user->age=='1975'? 'selected' : ''}}>1975</option>

  <option value="1974" {{$user->age=='1974'? 'selected' : ''}}>1974</option>

  <option value="1973" {{$user->age=='1973'? 'selected' : ''}}>1973</option>

  <option value="1972" {{$user->age=='1972'? 'selected' : ''}}>1972</option>

  <option value="1971" {{$user->age=='1971'? 'selected' : ''}}>1971</option>

  <option value="1970" {{$user->age=='1970'? 'selected' : ''}}>1970</option>

  <option value="1969" {{$user->age=='1969'? 'selected' : ''}}>1969</option>

  <option value="1968" {{$user->age=='1968'? 'selected' : ''}}>1968</option>

  <option value="1967" {{$user->age=='1967'? 'selected' : ''}}>1967</option>

  <option value="1966" {{$user->age=='1966'? 'selected' : ''}}>1966</option>

  <option value="1965" {{$user->age=='1965'? 'selected' : ''}}>1965</option>

  <option value="1964" {{$user->age=='1964'? 'selected' : ''}}>1964</option>

  <option value="1963" {{$user->age=='1963'? 'selected' : ''}}>1963</option>

  <option value="1962" {{$user->age=='1962'? 'selected' : ''}}>1962</option>

  <option value="1961" {{$user->age=='1961'? 'selected' : ''}}>1961</option>

  <option value="1960" {{$user->age=='1960'? 'selected' : ''}}>1960</option>

  <option value="1959" {{$user->age=='1959'? 'selected' : ''}}>1959</option>

  <option value="1958" {{$user->age=='1958'? 'selected' : ''}}>1958</option>

  <option value="1957" {{$user->age=='1957'? 'selected' : ''}}>1957</option>

  <option value="1956" {{$user->age=='1956'? 'selected' : ''}}>1956</option>

  <option value="1955" {{$user->age=='1955'? 'selected' : ''}}>1955</option>

  <option value="1954" {{$user->age=='1954'? 'selected' : ''}}>1954</option>

  <option value="1953" {{$user->age=='1953'? 'selected' : ''}}>1953</option>

  <option value="1952" {{$user->age=='1952'? 'selected' : ''}}>1952</option>

  <option value="1951" {{$user->age=='1951'? 'selected' : ''}}>1951</option>

  <option value="1950" {{$user->age=='1950'? 'selected' : ''}}>1950</option>

  <option value="1949" {{$user->age=='1949'? 'selected' : ''}}>1949</option>

  <option value="1948" {{$user->age=='1948'? 'selected' : ''}}>1948</option>

  <option value="1947" {{$user->age=='1947'? 'selected' : ''}}>1947</option>

  <option value="1946" {{$user->age=='1946'? 'selected' : ''}}>1946</option>

  <option value="1945" {{$user->age=='1945'? 'selected' : ''}}>1945</option>

  <option value="1944" {{$user->age=='1944'? 'selected' : ''}}>1944</option>

  <option value="1943" {{$user->age=='1943'? 'selected' : ''}}>1943</option>

  <option value="1942" {{$user->age=='1942'? 'selected' : ''}}>1942</option>

  <option value="1941" {{$user->age=='1941'? 'selected' : ''}}>1941</option>

  <option value="1940" {{$user->age=='1940'? 'selected' : ''}}>1940</option>



          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="gender" class="col-4 col-form-label">Gender</label> 
        <div class="col-8">
          <select id="gender" name="gender" class="custom-select">
            <option value="male" {{ $user->gender == 'male'? 'selected': '' }} >Male</option>
            <option value="female"{{ $user->gender == 'female'? 'selected': '' }}>Female</option>
            <option value="other"{{ $user->gender == 'other'? 'selected': '' }}>Other</option>
            <option value="notsay"{{ $user->gender == 'notsay'? 'selected': '' }}>I'd rather not say</option>
          </select>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Update Profile</button>
        </div>
      </div>
    </form>
    <div class="col-sm-12 col-md-8">
      <p><span class="text-primary">*</span>Please <a href="mailto:moc@mehrutherm.com">contact admin</a> if you need to change this value.</p>
    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection