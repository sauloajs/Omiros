<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Omiros</title>

        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <style>
            body {
                background-image: url(" {{ asset('img/bg1.jpg') }} ");
                height: 500px;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                overflow-x: hidden;
            }
            .menu-superior {
                background-color: #15C164;
            }

            .white-t {
                color: #fff!important;
                text-shadow: 1px 1px #ccc;
            }

            .carousel .carousel-item {
                transition-duration: 2s!important;
            }
        </style>
    </head>
    <body>
        <div class="row menu-superior p-2">
            <div class="container">
                <div class="row">
                    <div class="col-4 pt-1">
                        <span class="text-light text-center h4">Omiros</span>
                    </div>
                    <ul class="nav justify-content-end col-4 offset-4">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link btn btn-light" href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item pr-2">
                                <a class="nav-link btn btn-light" href="{{ route('login') }}">Entrar</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-light" href="{{ route('register') }}">Registrar-se</a>
                                </li>
                            @endif
                        @endauth
                    </ul>    
                </div>
            </div>
        </div>

        <main class="container mangas">
            <h4 class="text-center text-light">Destaques da Semana</h4>
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($repeat as $r)
                        <div class="carousel-item {{ $r == 1 ? 'active' : '' }}">
                            <div class="row justify-content-around" style="height: 280px;">
                                <div class="card col-lg-2" style="background-image: url('{{ $links[rand(0, 11)] }}'); backgorund-size: cover;">
                                    <div class="card-body d-flex align-items-end justify-content-center">
                                        
                                    </div>
                                </div>
                                <div class="card col-lg-2" style="background-image: url('{{ $links[rand(0, 11)] }}'); backgorund-size: cover;">
                                    <div class="card-body d-flex align-items-end justify-content-center">
                
                                    </div>
                                </div>
                                <div class="card col-lg-2" style="background-image: url('{{ $links[rand(0, 11)] }}'); backgorund-size: cover;">
                                    <div class="card-body d-flex align-items-end justify-content-center">
                
                                    </div>
                                </div>
                                <div class="card col-lg-2" style="background-image: url('{{ $links[rand(0, 11)] }}'); backgorund-size: cover;">
                                    <div class="card-body d-flex align-items-end justify-content-center">
                
                                    </div>
                                </div>
                                <div class="card col-lg-2" style="background-image: url('{{ $links[rand(0, 11)] }}'); backgorund-size: cover;">
                                    <div class="card-body d-flex align-items-end justify-content-center">
                
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>         
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script>
            $('.mangas').carousel({
                interval: 4000,
                keyboard: false,
                pause: "hover",
            });
            
        </script>
    </body>
</html>
