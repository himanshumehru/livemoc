<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register | UWFMCMOC</title>
    <meta name="description" content="CoreUI Template - InfyOm Laravel Generator">
    <meta name="keyword" content="CoreUI,Bootstrap,Admin,Template,InfyOm,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
   

   <!-- Datepicker scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#birthday" ).datepicker({
        dateFormat:'mm/dd/yy',
        showAnim:'blind',
        maxDate:'-20y',
        minDate:'-85y',
        defaultDate:'-45y',
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true
    });
  } );
  </script>


</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <form method="post" action="{{ url('/register') }}">

                        {!! csrf_field() !!}
                        <h1>Register <span class="pull-right"><a href="{{url('/')}}" class="btn btn-outline-primary">Home</a></span></h1>
                        <p class="text-muted">Create your account</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control {{ $errors->has('firstname')?'is-invalid':'' }}" name="firstname" value="{{ old('firstname') }}"
                                   placeholder="First Name" required>
                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
                        </div>

                         <div class="input-group mb-3">
                            <input type="text" class="form-control {{ $errors->has('middlename')?'is-invalid':'' }}" name="middlename" value="{{ old('middlename') }}"
                                   placeholder="Middle Name (optional)">
                            @if ($errors->has('middlename'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('middlename') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control {{ $errors->has('lastname')?'is-invalid':'' }}" name="lastname" value="{{ old('lastname') }}"
                                   placeholder="Last Name" required>
                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>




          <div class="input-group mb-3">
              <input id="birthday" type="text" class="date form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="birthday" placeholder="Birthday: MM/DD/YYYY" required>
            @error('birthday')
            <span class="text-danger" role="alert">
              <small><strong>{{ $message }}</strong></small>
            </span>
            @enderror       
          </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control {{ $errors->has('abfmid')?'is-invalid':'' }}" name="abfmid" value="{{ old('abfmid') }}"
                                   placeholder="ABFM ID" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off required>
                            @if ($errors->has('abfmid'))
                                <span class="invalid-feedback">
                                    <strong>{{ str_replace('abfmid', 'ABFM ID', $errors->first('abfmid')) }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="input-group mb-3">
                            <input type="text" class="form-control {{ $errors->has('abfmid_confirmation')?'is-invalid':'' }}" name="abfmid_confirmation" value="{{ old('abfmid_confirmation') }}"
                                   placeholder="Confirm ABFM ID" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off required>
                        </div>










                <div class="input-group mb-3">
                          
                          <div class="form-check form-check-inline">
                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" value="male" {{ old('gender')=='male'? 'checked' : '' }} required >
                            <label class="form-check-label" for="male">Male </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" value="female" {{ old('gender')=='female'? 'checked' : '' }}>
                            <label class="form-check-label" for="female">Female </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="other" value="other" {{ old('gender')=='other'? 'checked' : '' }}>
                            <label class="form-check-label" for="other">Other </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="notsay" value="notsay" {{ old('gender')=='notsay'? 'checked' : '' }}>
                            <label class="form-check-label" for="notsay">I'd rather not say </label>

                          </div>

            @error('gender')
              <span class="text-danger" role="alert">
                <small><strong>{{ $message }}</strong></small>
              </span>
             @enderror
                          
                        </div>


















                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="icon-lock"></i>
                              </span>
                            </div>
                            <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':''}}" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="icon-lock"></i>
                              </span>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="Confirm password" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                               </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>

                    </form>

                    <div class="text-center"><a href="{{ url('/login') }}" class="text-center">Already have an account? Login Now!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.js"></script>
</body>
</html>
