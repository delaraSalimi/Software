@extends('layouts.header')
@section('content')
   <div class="getStartedContainer clearfix">
     <div class="getStartedLeft">
        <h2>How do you want to use HackerRank?</h2>
        <p>We’ll personalize your setup experience accordingly.</p>
        <a href="{{ route('registerCompany') }}" class='getStartedCompany'>
            <h4><i class="fas fa-search"></i> I’m here to hire tech talent  <span class='free'>free trial</span></h4>
            <p style="color:#767178;fon t-weight:bold"> Evaluate tech skills at scale</p>
        </a>
        <a href="{{ route('registerDeveloper') }}" class='getStartedDeveloper'>
            <h4><i class="fas fa-chevron-right"></i> I’m here to practice and prepare</h4>
            <p style="color:#767178;fo nt-weight:bold">  Solve problems and learn new skills</p>
        </a>
     </div>
     <div class='getStartedRight'>
        <img src="./files/images/login.png" alt="">
     </div>
   </div>
@endsection