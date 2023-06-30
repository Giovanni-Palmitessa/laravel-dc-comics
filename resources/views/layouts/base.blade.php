<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <header>
            <div class="container">
                <div class="navbar">
                  <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="Dc Logo" />
                  </div>
          
                  <div class="choose">
                    <ul>
                      <li><a>Characters</a></li>
                      <li><a>Comics</a></li>
                      <li><a>Movies</a></li>
                      <li><a>TV</a></li>
                      <li><a>Games</a></li>
                      <li><a>Collectibles</a></li>
                      <li><a>Videos</a></li>
                      <li><a>Fans</a></li>
                      <li><a>News</a></li>
                      <li><a>Shop</a></li>
                      <li><input class="form-control" type="text" placeholder="Search"></li>
                    </ul>
                  </div>
                </div>
              </div>
        </header>

        <div class="container">
            <main>
                @yield('contents')
            </main>
        </div>
        
    </body>
</html>
