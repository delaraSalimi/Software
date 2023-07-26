@extends('layouts.header')
@section('content')
 <!-- <style>
    h3{
        text-align: center;
        color: #39424e;
        font-weight: 700;
        font-size: 29px;
        line-height: 1.4;
        margin-top:50px;
    }
    p{
        text-align:center;
        font-size: 17px;
        color: #3e3e3e;
    }
 </style>
 <h3>For <span style="color:#068932">Companies</span></h3>
 <p>Get started hiring with HackerRank</p>
<div class="modalRegister">
       <div class="title clearfix">
           <a href="{{ route('registerCompany') }}" class="login">Sign Up</a>
           <a href="{{ route('loginCompany') }}" class="register">Login</a>
       </div>
       <div class="content">
           @include('partials.errors')
           @if(session('registerSuccess'))
           <p class="alert alert-success">
               Welcome! You are Registered 
           </p>
           @endif
           @if(session('loginError'))
                    <p class="alert alert-danger">User and Password are Wrong</p>
           @endif
           <form action="" method="post">
               {{ csrf_field() }}
              <input type="text" placeholder="Email" name="email">
              <input type="password" placeholder="Password" name="password">
              <input type="submit" value="Login"/>
            </form>
       </div>
</div> -->

<style>
.containerLogin {
    position: relative;
    h eight: 550px;
}

.right,
.left {
    position: absolute;
    wi dth: 50%;
    transition: transform 1s;
}

.right {
    right: 0;
    transform: translateX(0%);
    z-index: 99;
}

.left {
    left: 0;
    transform: translateX(0%);
}

.containerLogin.flipped .right {
    transform: translateX(-185%);
}

.containerLogin.flipped .left {
    transform: translateX(60%);
}



    .containerLogin{
        width: 65%;
        margin: 80px auto;
        box-shadow: 0px 0px 24px #d9d5d5;
    }
    .right{
        float:right;
        width:35%;
        background: #6c1234;
        height:100%;
        text-align:center;
    }
    .right h1{
        margin-top:160px;
        color:White;
    }
    .right p{
        font-size: 17px;
        color: white;
        margin-top: 22px;
    }
    .right .link{
        background: white;
        padding: 6px 45px;
        border-radius: 20px;
        display: table;
        margin: 29px auto;
        font-size: 16px;
        color: #3d3d3d;
        cursor: pointer;
    }
    .right .link1{
        background: white;
        padding: 6px 45px;
        border-radius: 20px;
        display: table;
        margin: 29px auto;
        font-size: 16px;
        color: #3d3d3d;
        cursor: pointer;
    }
    .socialIcon img{
        width: 35px;
        margin:0 5px;
    }
    .left{
        text-align:Center;
        width:63%;
    }
    .containerLogin  .left h1{
        margin-top:110px;
        color: #6c1234;
    }
    .left p{
        color: #343434;
        margin-top: 22px;
        margin-bottom:4px;
    }
    .left form{
        border-top: solid #e6e6e6 2px;
        display: table;
        margin: 25px auto;
        padding-top: 30px;
        position: relative;
        width:60%;
    }
    .left .or{
        position: absolute;
        left: 0;
        right: 0;
        top: -12px;
        background: white;
        display: table;
        margin: auto;
        padding: 0 10px;
        font-size: 13px;
        color:#8d8d8d;
    }
    .left input{
        width: 100%;
        background: #f3f7f7; 
        border: solid #d8d8d8 1px;
        border-radius: 7px;
        height: 40px;
        color: #232323;
        padding-left: 10px;
        margin-top: 15px;
        font-size: 14px;
    }
    .left input::placeholder{
        color:gray;
        opacity:1;
    }
    .left input[type="submit"]{
        background: #6c1234;
        color: white;
        display: table;
        border:0;
    }
</style>
<div class="containerLogin clearfix">
   <div class="clearfix" style="height:100%;">
     <div class="right" id="rightDiv">
        <div class="login" style="display:none">
            <h1>Welcome Back</h1>
            <p>Let's Continue Enhancing Your Skills</p>
            <a class='link'>Sign In</a>
        </div>
        <div class="register">
            <h1>New Here?</h1>
            <p>Sign up and discover a great amount of opportunities</p>
            <a class='link'>Sign up</a>
        </div>
     </div>
    <div class='left' id="leftDiv">
        <div class="login">
            <h1>Log in to your account</h1>
            <p>login using your social networks</p>
            <div class="socialIcon">
                <img src="/files/images/facebook.png" />
                <img src="/files/images/google.png" />
                <img src="/files/images/linkedin.png" />
                <img src="/files/images/twitter.png" />
            </div>
            <div class="notif" style="width:60%;margin:auto;">
                @include('partials.errors')
                @if(session('registerSuccess'))
                <p class="alert alert-success">
                    Welcome! You are Registered 
                </p>
                @endif
            </div>
            <form method="post" action="">
                {{csrf_field()}}
                <span class='or'>OR</span>
            <input name="email" style='margin-top:0'type="text" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <input type="submit" value="SIGN IN">
            </form>
        </div>
        <div class="register" style="display:none">
            <h1>Create your account</h1>
            <p>singin using your social networks</p>
            <div class="socialIcon">
                <img src="/files/images/facebook.png" />
                <img src="/files/images/google.png" />
                <img src="/files/images/linkedin.png" />
                <img src="/files/images/twitter.png" />
            </div>
            <div class="notif" style="width:60%;margin:auto;">
                @include('partials.errors')
                @if(session('registerSuccess'))
                <p class="alert alert-success">
                    Welcome! You are Registered 
                </p>
                @endif
                @if(session('loginError'))
                            <p class="alert alert-danger">User and Password are Wrong</p>
                @endif
            </div>
            <form method="post" action="{{ route('doregisterCompany') }}">
                {{csrf_field()}}
                <span class='or'>OR</span>
            <input name="name" style='margin-top:0'type="text" placeholder="Name">
            <input name="email" type="text" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <input name="role" type="hidden" value="C">
            <input type="submit" value="SIGN Up">
            </form>
        </div>
        
    </div>
   </div>
</div>
 <script>
$(".link").click(function() {
    $(".containerLogin").addClass("flipped");
    $('.right .login .link').addClass("link1");
    $(".right .login").slideDown();
    $(".right .register").slideUp();
    $(".left .register").show();
    $(".left .login").hide();
    $(".notif").fadeOut();
});
$(document).on('click','.link1',function() {
    $(this).removeClass('link1');
    $('.right .login .link').addClass("link");
    $(".containerLogin").removeClass("flipped");
    $(".right .login").slideUp();
    $(".right .register").slideDown();
    $(".left .register").hide();
    $(".left .login").show();
    $(".notif").fadeOut();

});

 </script>
@endsection