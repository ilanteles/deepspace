<!DOCTYPE html>
<html>

<head>
    <title>404 - Page not found!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="http://localhost/deepspace/public/icons/solar-system2.png">
    <link rel="stylesheet" type="text/css" href="http://localhost/deepspace/public/css/style.css">
</head>

<style>
    .main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}
</style>
<!--style="overflow: hidden"-->
<body class="body"/>

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
                <img src="http://localhost/deepspace/public/icons/br.png" style="width: 30px">
                <img src="http://localhost/deepspace/public/icons/usa.png" style="width: 30px">
            </li>
            </ul>
            <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            </div>
        </nav>
        </div>
    
    <div class="main">
            <img src="../imagens/astronaut.png" width="25%" height="25%">

            <h2 style="margin-bottom: 0px;">OOPS! PÁGINA NÃO ENCONTRADA.</h2>
            <h2 style="font-size: 20px"> Parece que essa página se perdeu na imensidão do espaço sideral.</h2>
        
            <a href="{{route('site.mapa')}}"><button class="button">Voltar</button></a>
    </div>

<script src="http://localhost/deepspace/public/js/script.js"></script>

</body>

</html>