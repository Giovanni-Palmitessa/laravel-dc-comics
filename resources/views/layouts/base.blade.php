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

        <main>
            @yield('contents')
        </main>
        

        <div class="top-footer">
            <div class="container">
              <div class="links">
                <div class="link">
                  <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" />
                  <span>DIGITAL COMICS</span>
                </div>
        
                <div class="link">
                  <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" />
                  <span>DC MERCHANDISE</span>
                </div>
        
                <div class="link">
                  <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" />
                  <span>SUBSCRIPTION</span>
                </div>
        
                <div class="link">
                  <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" />
                  <span>COMIC SHOP LOCATOR</span>
                </div>
        
                <div class="link">
                  <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" />
                  <span>DC POWER VISA</span>
                </div>
              </div>
            </div>
        </div>
        
        <div class="bottom-footer">
            <div class="container">
              <div class="footer-content">
                <div class="footer-links">
                  <ul class="ul-option">
                    <li class="option">
                      DC COMICS
                      <ul class="ul-sub-option">
                        <li class="sub-option">Character</li>
                        <li class="sub-option">Comics</li>
                        <li class="sub-option">Movies</li>
                        <li class="sub-option">TV</li>
                        <li class="sub-option">Games</li>
                        <li class="sub-option">Videos</li>
                        <li class="sub-option">News</li>
                      </ul>
                    </li>
        
                    <li class="option">
                      DC
                      <ul class="ul-sub-option">
                        <li class="sub-option">Terms Of Use</li>
                        <li class="sub-option">Privacy Policy (New)</li>
                        <li class="sub-option">Ad Choises</li>
                        <li class="sub-option">Advertising</li>
                        <li class="sub-option">Jobs</li>
                        <li class="sub-option">Subscriptions</li>
                        <li class="sub-option">Talent Workshop</li>
                        <li class="sub-option">CPSC Certificates</li>
                        <li class="sub-option">Ratings</li>
                        <li class="sub-option">Shop Help</li>
                        <li class="sub-option">Contact Us</li>
                      </ul>
                    </li>
        
                    <li class="option">
                      SITES
                      <ul class="ul-sub-option">
                        <li class="sub-option">DC</li>
                        <li class="sub-option">MAD Magazine</li>
                        <li class="sub-option">DC Kids</li>
                        <li class="sub-option">DC Universe</li>
                        <li class="sub-option">DC Power Visa</li>
                      </ul>
                    </li>
                  </ul>
                </div>
        
                <div class="big-logo">
                  <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="Dc logo big" />
                </div>
              </div>
            </div>
        </div>
        
        <div class="additional-footer">
            <div class="container">
              <div class="additional-content">
                <div class="sign-up">SIGN UP NOW!</div>
        
                <div class="socials">
                  <span class="follow">FOLLOW US</span>
        
                  <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="Facebook" />
        
                  <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="Twitter" />
        
                  <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="Youtube" />
        
                  <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="Periscope" />
        
                  <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="Pinterest" />
                </div>
              </div>
            </div>
        </div>
    </body>
</html>
