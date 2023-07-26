<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' href='/css/style.css' />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="/js/jquery.js" ></script>
    <title>Hacker Rank</title>
</head>
<body>
    <!-- <div class="header-top">
        <div class="container">
             <p>contact-us</p>
             <p class="about-us">about-us</p>
        </div>
    </div> -->
    <div class="header container">
         <div class="logo">
            <a href="{{ route('index') }}"><img src="/files/images/loog.png" alt=""></a>
         </div>
         <div class="navbar">
            <ul>
                <li>Products</li>
                <li>Solutions</li>
                <li>Resources</li>
                <li>Pricing</li>
            </ul>
         </div>
         <div class="loginRegister ">
             <a style="border: solid #8c4a3f 2px;padding: 8px 12px;border-radius: 5px;" class="login" href="{{ route('accessAccount') }}" >Login</a>
             <a class="register" href="{{ route('GetStarted') }}" >Register</a>
         </div>
    </div>
    @yield('content')
</body>
</html>