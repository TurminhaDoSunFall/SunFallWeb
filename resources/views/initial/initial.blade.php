<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="{{asset('css/initial/initial.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/initial/carrossel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/dropmenu.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
    <style>
        body {
          font-family: "Chango", sans-serif;
        }
        </style>
    <title>Minha Galeria</title>
</head>
<body>

  <div class ="row">
   <header class="col-12">
      <div class="menu col-2">
          <img src="{{asset('img/logo.png')}}" class="image" alt="Logo">
      </div>
      <div class="menu col-7">
          <p style="font-size:3vw">BEM VINDO</p>
      </div>
      <div class="menu col-1">
        <div class="dropdown">
            <button class="dropbtn">MENU</button>
            <div class="dropdown-content">
                <a href="/Cadastrofoto">CADASTRAR FOTO</a>
                <a href="/Detalhes">DETALHES</a>
                <a href="/Galeria">GALERIA</a>
                <a href="/Minhagaleria">MINHA GALERIA<a>
                <a href="/Editar">EDITAR<a>
                <a href="/Creditos">CREDITOS</a>
                <A HREF="/Config">CONFIGURAÇÕES</a>
            </div>
        </div>
      </div>
      <div class="menu col-2">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/Usuario') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Perfil</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </div>
   </header>
   <main>
        <section class="carrossel">
            <ol>
                @foreach($imagens as $imagem)
                <li>
                    <img src="{{asset($imagem['url'])}}" alt="{{$imagem['nome']}}" />
                </li>
                @endforeach
            </ol>
        </section>
        <h1>Os pôres dos sóis mais belos que podemos vivenciar</h1>
        <a class="historia" href="/Historia">Conheça a nossa história</a>
   </main>
</body>
</html>

