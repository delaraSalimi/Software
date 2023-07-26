@extends('layouts.header')
@section('content')
   <div class="getStartedContainer clearfix">
     <div class="getStartedLeft">
        <h2>Ready to Unleash Your Skills? Log in </h2>
        <p style="text-align:Center;">Welcome Back! Let's Continue Enhancing Your Skills</p>
        <a href="{{ route('loginCompany') }}" class='getStartedCompany' style="b ackground-image:linear-gradient(270deg, #f5cbf5 0%, #a9e7df 100%)">
            <h4 style="text-align:center"> For <span style='color:#6c1234'>Companies</span> </h4>
            <p style="padding: 0 10%;
font-size: 17px;
margin-top: 14px;
color: #313131;
line-height: 29px;
text-align: center;"> We are the market–leading technical interview platform to identify and hire developers with the right skills.</p>
        </a>
        <a href="{{ route('loginDeveloper') }}" class='getStartedDeveloper' style="width:93%;b ackground-image: linear-gradient(270deg, #f5cbf5 0%, #8EC5FC 100%);">
            <h4 style="text-align:center;"> For <span style="color: #097BBF;">Developers</span></h4>
            <p style="padding: 0 10%;
font-size: 17px;
margin-top: 14px;
color: #313131;
line-height: 29px;
text-align: center;">  Join over 21 million developers, practice coding skills, prepare for interviews, and get hired.</p>
        </a>
     </div>
     <div class='getStartedRight'>
        <img src="./files/images/login.jpg" style="width: 75%;margin-top: 60px;float: right;margin-right: 55px;" alt="">
     </div>
   </div>
@endsection