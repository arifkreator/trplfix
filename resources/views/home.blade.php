@if(Auth::user()->level==1)
	@include('home2')	
@else
	@include('homepage')
@endif