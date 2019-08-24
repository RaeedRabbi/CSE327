<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left header-dropdowns">
                <div class="header-dropdown">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->

                <div class="header-dropdown">
                    <a href="#"><img src={{asset('images/flags/en.png')}} alt="England flag">ENGLISH</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><img src={{asset('images/flags/en.png')}} alt="England flag">ENGLISH</a></li>
                            <li><a href="#"><img src={{asset('images/flags/fr.png')}} alt="France flag">FRENCH</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->
            </div>

            <div class="header-right">
                <p class="welcome-msg">Default welcome msg! </p>

                <div class="header-dropdown dropdown-expanded">
                    <a href="#">Links</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="/dashboard">MY ACCOUNT </a></li>
                            <li><a href="#">DAILY DEAL</a></li>
                            <li><a href="#">MY WISHLIST </a></li>
                            <li><a href="blog.html">BLOG</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                                
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            @include('inc.searchPanel')

            <div class="header-center">
                <a href="/" class="logo">
                    <img src={{asset('images/logo.png')}} alt="Porto Logo">
                </a>
            </div><!-- End .headeer-center -->


            <div class="header-right">
                <div class="header-contact">
                    <span>Call us now</span>
                    <a href="tel:#"><strong>+123 5678 890</strong></a>
                </div><!-- End .header-contact -->
                @include('inc.cart')
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
    @include('inc.nav')
        

</header><!-- End .header -->
