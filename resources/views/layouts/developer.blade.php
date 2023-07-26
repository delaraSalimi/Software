@if(!\Illuminate\Support\Facades\Auth::check() ) 
  {{ redirect()->route('index') }}
@endif
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' href='/css/style.css' />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="/js/jquery.js" ></script>
    <title>Developer Dashboard</title>
    <style>
           .top-header{
            height: 65px;
            background: #0e141e;
           }
           .top-header .container a >img{
               width:90px;
               float:left;
           }
           .top-header .container a > .logo{
            margin-top: 12px;
            float: left;
            color: white;
            font-size: 24px;
           }
           .top-header .dropdown {
            float:left;
           }
           .top-header .dropdown i{
            margin-left: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background-color: #e7eeef;
            text-align: center;
            padding-top: 10px;
            margin-top: 13px;
            font-size: 19px;
            color:Black;
           }
           .top-header .dropdown .title{
            font-size: 15px;
            font-weight: bold;
            margin: 0 2px 0 4px;
           }
           .top-header .dropdown .fa-user{
            font-size: 17px;
           }
           .top-header .dropdown .fa-sort-down{
            margin-top: 2px;
            float: right;
            margin-left: 6px;
           }
           .dropdown-body{
            position: absolute;
            background: white;
            color: black;
            width: 350%;
            top: 127%;
            right: -75px;
            box-shadow: 0 6px 10px 0 rgba(0,0,0,.2);
            display: none;
            padding: 0px 15px;
            border-radius: 5px;
            border: solid #ccc 1px;
            z-index:5;
           }
           .dropdown ul li{
             padding:9px 0px  !important;
             width:100%;
           }
           .dropdown ul {
              margin:0 !important;
           }

           .hackos{
            display: block;
            text-align: center;
            margin: 20px 0;
            background: #4691f6;
            color: white;
            padding: 8px 0px;
            border-radius: 3px;
            font-size: 17px;
            width: 100%;
           }
           .dropdown-body ul li{
           
           }
           .dropdown-body ul li i{
             margin:0 !important;
             background:none !important;
           }
           .dropdown-body ul li a{
            color: #424242;
            border-bottom: solid #a0a0a0 1px;
            pad ding: 7px 0;
            ma rgin: 12px 0;
            font-size: 16px;
            display: block;
           }
           .dropdown ul li i{
            font-size: 15px;
            margin-right: 7px;
            color: #565656;
           }
           .top-header ul{
            color: #b7c9cc;
            marg in-left: 50px;
            float: left;
           }
           .top-header ul li{
            float: left;
            padding: 25px 20px 12px;
            cursor: pointer;
           }
           .top-header ul li:hover{
            color:White;
           }
           .searchContainer{
            floaT: left;
            margin-left: 25%;
            margin-top: 15px;
            background: #39424e;
            border: 1px solid #576871;
            border-radius: 5px;
            width:20%;
           }
           .searchContainer input{
            height: 32px;
            border-radius: 4px;
            color: #fff;
            font-size: 14px;
            background: transparent;
            border: 0;
            outline:none;
           }
           .searchContainer i{
            color: white;
            margin: 9px;
           }
           .icons{
            float: left;
            margin-left: 30px;
            margin-top: 20px;
           }
           .icons i{
            color: #b7c9cc;
                font-size: 20px;
                padding: 5px 12px;
                cursor: pointer;
           }
    </style>
</head>
<body style="background:#f3f7f7">
    <div class="top-header">
        <div class="container">
            <a href="{{route('index')}}"><img src="/files/images/loog.png" alt=""></a>
            <ul>
                <li style="border-bottom:solid #2ec866 4px;margin-left:50px;">Prepare</li>
                <li>Certify</li>
                <li>Compete</li>
            </ul>
            <div class="searchContainer">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search">
            </div>
            <div class="icons">
                <i class="far fa-comment-alt"></i>
                <i class="far fa-bell" style="border-right: solid #b7c9cc 1px;padding-right: 20px;"></i>
            </div>
            <i style="color: #b7c9cc;cursor:pointer;float: left;margin: 24px 30px;font-size: 21px;" class="fas fa-th"></i>
            <div class="dropdown">
                <i class="far fa-user"></i>
                <!-- <span class='title'>{{ Illuminate\Support\Facades\Auth::user()->name }}</span> -->
                <!-- <i class="fas fa-sort-down"></i> -->

                <div class="dropdown-body">
                    <!-- <span class="hackos">HackoS:101</span> -->
                    <ul>
                        @if(Illuminate\Support\Facades\Auth::user()->role == 'D' )
                            <li><a href="{{ route('developerDashboard') }}"><i class="fas fa-clipboard-list"></i>Dashboard</a></li>
                            <li><a href="{{ route('profileDeveloper') }}"><i class="far fa-address-card"></i>Profile</a></li>
                            <li><a href="{{ route('logoutDeveloper') }}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                        @endif
                        @if(Illuminate\Support\Facades\Auth::user()->role == 'C' )
                            <li><a href="{{ route('companyDashboard') }}"><i class="fas fa-clipboard-list"></i>Dashboard</a></li>
                            <li><a href="{{ route('profileCompany') }}"><i class="far fa-address-card"></i>Profile</a></li>
                            <li><a href="{{ route('logoutCompany') }}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>
         </div>
    </div>
    @yield('content')
    <script>
        $('.dropdown').click(function(){
            $(this).find('.dropdown-body').slideToggle();
        })
    </script>
</body>
</html>