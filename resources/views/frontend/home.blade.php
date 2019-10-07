@extends('frontend.app')
@section('title')
Home
@endsection


@section('content')
<div class="row justify-content-center">
		<div class="col-sm-12 col-md-10">
			<h1 class="text-center">UW FMC Teaching MOC</h1>
			<p>The Department of Family Medicine at the University of Washington School of Medicine is pleased is present the following Maintenance of Certification options that have been approved by American Board of Family Medicine.</p>
		</div>
	</div>
    <div class="row justify-content-center">
    	<div class="col-sm-12 col-md-6">
        <div class="card text-center">
  			<a href="{{url('/pcof')}}"><img class="card-img-top" src="{{ asset('img/pcof-intro.jpg') }}" alt="Card image cap"></a>
			<div class="card-body">
			    <h5 class="card-title"><strong>Patient Centered Observation Form MOC</strong></h5>
<!-- 			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 -->			    <a href="{{url('/pcof')}}" class="btn btn-primary">Get Started</a>
			</div>
 		</div>
		</div>
		
	</div> <!-- end row -->

	<div class="row" style="margin-top:20px;">
		
		<div class="col-sm-12">
			<h2 class="text-center">Coming Soon</h2>
		</div>
	</div>
		<div class="row " style="margin-top:20px;">	
		<div class="col-sm-12 col-md-2"></div>		
			<div class="col-sm-12 col-md-4">
        		<div class="card text-center">
    				<img class="card-img-top" src="{{ asset('img/stfm-intro.jpeg') }}" alt="Card image cap">

			 		 <div class="card-body">
			    		<h5 class="card-title">Teaching Physician MOC</h5>
<!-- 			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 -->			   		 <a href="#" class="btn btn-primary disabled">Coming Soon</a>
			  		</div>
 				</div>
			</div>
		<div class="col-sm-12 col-md-4">
        <div class="card">
   			  <img class="card-img-top" src="{{ asset('img/som-intro.png') }}" alt="Card image cap">
			  <div class="card-body text-center">
			   <h5 class="card-title">In Development</h5>
<!-- 			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 -->			    <a href="{{url('/uwfmcmoc')}}" class="btn btn-primary disabled">Coming Soon</a>
			  </div>
 		</div>
		</div>
		
		
     </div> <!-- end row -->

@endsection