        <div class="col-sm-12 col-md-5 ">
            <div class="card">
                <div class="card-header">Your Profile 
                    <div class="settings-icon" style="float: right;"><a href="{{route('user.edit', $user->id)}}"><i class="fa fa-cogs" aria-hidden="true"></i></a></div>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>First Name:</strong> {{$user->firstname}}</li>
                        @if(!empty($user->middlename))
                         <li><strong>Middle Name:</strong> {{$user->middlename}}</li>
                        @endif
                        <li><strong>Last Name:</strong> {{$user->lastname}}</li>
                        <li><strong>ABFM ID:</strong> {{$user->abfmid}}</li>
                        <li><strong>Email:</strong> {{$user->email}}</li>
                        <li><strong>Birthday:</strong> {{$user->birthday}}</li>
                        <li><strong>Gender:</strong> {{$user->gender == 'notsay'?"I'd rather not say":ucfirst($user->gender)}}</li>
                        
                    </ul>
                </div>
            </div>
        </div>