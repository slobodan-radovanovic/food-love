<header id="header" class="navbar fixed-top">

    <div id="headerTop">
        <div class="wrapper">
            <div id="headerTopLeft">
                <span><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;011 71 30 465</span>
                <span><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;061 60 44 602</span>

            </div>
            <div id="headerTopRight">
                @guest
                    <span><a href="/login"><i class="fa fa-2x fa-user" aria-hidden="true"></i>&nbsp;Prijava&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                <span><a href="/register"><i class="fa fa-2x fa-user-plus" aria-hidden="true"></i>&nbsp;Registracija</a></span>
                <span><a href="/cart"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i>Porudžbina {{ Session::has('cart') ? Session::get('cart.qty') : ''}}</a></span>



                    </a>
                @else


                    <span><a href="/home"><i class="fa fa-2x fa-user" aria-hidden="true"></i>&nbsp;Moj nalog&nbsp;&nbsp;</a>
                            <a class="btn btn-warning" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Odjavi me
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                @endguest


            </div>
        </div>
    </div>

    <div id="headerBottom" >
        <div class="wrapper">

            <div id="logo">
                <a href="/">
                    <img src="{{ url('../images/logo.png') }}" alt="logo">
                </a>
            </div>

            <nav id="nav">
                <ul>
                    <li><a href="/">Početna</a></li>
                    <li><a href="/menu">Meni</a>
                    </li>
                    <li><a href="/contact">kontakt</a></li>
                </ul>

            </nav>

        </div>
    </div>

</header><!-- kraj #header -->
