<html>

<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/deepspace/public/icons/solar-system2.png">
    <link rel="stylesheet" type="text/css" href="/deepspace/public/css/style.css">
    <script src="/deepspace/public/js/quiz.js"></script>
</head>

<body class="body">

    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>

<div class="navbar">
    <nav>
        <div class="logo">
        <a href="{{route('site.mapa')}}">DeepSpace</a>
        </div>
        <ul class="nav-links">
        <li>
            <a href="{{route('site.mapa')}}">Mapa</a>
        </li>
        <li>
            <a href="{{route('site.questionario')}}">Quiz</a>
        </li>
        <li>
            <a href="{{route('site.contato')}}">Contato</a>
        </li>
        <li>
            <img src="/deepspace/public/icons/br.png" style="width: 30px">
            <img src="/deepspace/public/icons/usa.png" style="width: 30px">
        </li>
        <li>
            <img class ="img_modal" id="loginBtn" src="/deepspace/public/icons/login.png" style="width: 30px">
        </li>
        </ul>
        <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        </div>
    </nav>
    </div>

    <div id="loginModal" class="lmodal">
    <div class="div-login-form">
        <form class="login-form" action="{{route('site.login.entrar')}}" method="post">
            {{ csrf_field() }}
            <span class="loginClose">&times;</span>
            <h1 class="branco">Login</h1>
    
            <div class="txtb">
                <input type="text" placeholder="E-mail" name="email">
                <span class="branco"></span>
            </div>
    
            <div class="txtb">
                <input type="password" placeholder="Senha" name="senha">
                <span class="branco"></span>
            </div>
            <div align="center">
                <button class="button">Entrar</button>
            </div>
    
        </form>
    </div>
</div>

    @yield('conteudo')

<script src="/deepspace/public/js/script.js">
    
</script>

</body>

</html>