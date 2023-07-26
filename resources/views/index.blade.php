@extends('layouts.header')
@section('content')
<div class="main" style="margin-top:80px;">
    <h1>Skills speak louder <br> than words</h1>
    <h3>We assist businesses in building the most formidable tech crews.<br> We support individuals in honing their tech capabilities and seeking employment prospects</h3>
    <div  class="container_link">
        <a  href="{{route('requestDemo')}}"  class="link" style="background: white;color: #3e3e3e;border: solid 1px #8a8a8a;">Request Demo</a>
        <a  href="{{ route('GetStarted') }}" class="link">Get Started</a>
    </div>
    <h4>More than 40% of developers globally, along with 3,000 firms, utilize HackerRank.</h4>
    <div class="companies">
        @for($i=1;$i<8;$i++)
           <img  src="/files/images/{{$i}}.png" /> 
        @endfor
    </div>
</div>
@endsection