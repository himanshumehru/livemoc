@extends('frontend.app')
@section('title')
PCOF MOC
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header">Patient Centered Observation Form MOC</div>

                <div class="card-body">

                    <p>Thank you for participating in the Patient Centered Observation Educational Quality Improvement module. 

This module has 5 requirements:
 </p>

                         <ol>
                        
                        <li><a href="{{url('/pre-test')}}" @if(auth()->user()->isPretestComplete())style="text-decoration: line-through;color: gray;pointer-events: none;"@endif>Complete a short pre-test </a>@if(auth()->user()->isPretestComplete())<span class="text-success"> Complete </span>@endif</li>
                        <li>Complete the Patient Centered Observation Form (PCOF) online training module, available at <a href="http://www.pcof.us" target="_blank">www.pcof.us</a></li>
                                                <li><a href="{{url('/one-pager')}}">Read this one-pager about Patient Centered Observation</a></li>

                        <li>Observe the same student 4 times over the course of 6 weeks using the  <a href="https://docs.google.com/forms/d/e/1FAIpQLSeODysWVM9WrwgY4Y9LNUJybK4STc53S9uj_FHd27r10p9ukA/viewform" target="_blank">PCOF</a></li>
                        <li><a href="{{url('/post-test')}}"@if(auth()->user()->isPosttestComplete())style="text-decoration: line-through;color: gray;pointer-events: none;"@endif @if(!auth()->user()->isPretestComplete())style="color:gray; pointer-events:none;"@endif >Complete a short post-test @if(!auth()->user()->isPretestComplete()) (must complete pre-test first) </span>@endif</a>@if(auth()->user()->isPosttestComplete())<span class="text-success"> Complete </span>@endif</li>
                    </ol>
    


 

<p>After completing all parts of this module, you will have fulfilled an ABFM Part IV requirement and we will submit your name and information to the ABFM for credit.</p>



                </div>
            </div>
        </div>


    </div>

@endsection
