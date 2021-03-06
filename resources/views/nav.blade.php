<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse row" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto" style="">
                <li class="nav-item col-lg-6 col-md-4 col-sm-4" style="">
                    <a class="nav-link @if($_SERVER['REQUEST_URI']==="/") active @endif" href="/" style="font-family: 'Montserrat Alternates', sans-serif; font-size: 30px; font-weight: 600;"><a:hover class="active">Home</a:hover></a>
                </li>
                <li class="nav-item col-lg-6 col-md-4 col-sm-4" style="">
                    <a class="nav-link @if($_SERVER['REQUEST_URI']==="/imageGallery") active @endif" href="/imageGallery" style="font-family: 'Montserrat Alternates', sans-serif; font-size: 30px; font-weight: 600;"><a:hover class="active">Pictures</a:hover></a>
                </li>
                <li class="nav-item col-lg-6 col-md-4 col-sm-4" style="">
                    <a class="nav-link @if($_SERVER['REQUEST_URI']==="/mediaGallery") active @endif" href="/mediaGallery" style="font-family: 'Montserrat Alternates', sans-serif; font-size: 30px; font-weight: 600;"><a:hover class="active">Music</a:hover></a>
                </li>
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                -->
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto" style="">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item ml-auto col-lg-3 col-md-3 col-sm-12 pl-2 pr-2 mx-2"  style="">
                        <a class="nav-link" href="/cart" style="cursor: pointer;">
                            <div style=" display: flex; flex-direction: row; justify-content: center;"><!-- position: relative; --><!-- position: absolute; left: 0px; top: 0px;  -->
                                <div style="position: relative; z-index: 5; border-style: solid; border-color: #7675ff; width: 50px; height: inherit; border-radius: 10px;">
                                    <img src="/default/cart.png" style="display: block; width: 40px; padding: 1px 2px; border-radius: 20px; background-color: #ffffff; opacity: 0.5;">
                                    <span style="position: absolute; left: 18px; top: 5px; z-index: 500; font-weight: bold; font-size: 18px; color: #ff0000; text-align: center; display: flex; flex-direction: column; height: inherit; justify-content: center; align-items: center;">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-lg-3 col-md-3 col-sm-12 d-flex justify-content-center" style="flex-direction: column;">
                        <a class="nav-link" href="{{ route('login') }}">
                            <div class="d-flex justify-content-center" style="font-size: large; font-weight: 900;">
                                    {{ __('Login') }}
                            </div>
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown col-lg-3 col-md-3 col-sm-12">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }}<span class="caret"></span>
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
        </div>
    </div>
</nav>


