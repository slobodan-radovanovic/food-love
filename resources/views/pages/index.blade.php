@extends('layouts.app')

@section('content')


    <article id="hero" class="negative ">
    <div class="wrapper menu">
        <img src="{{ url('../images/min.png') }}">
        <img src="{{ url('../images/logo5.png') }}">
        <img src="{{ url('../images/gratis.png') }}">


    </div>
    </article>


    <section id="products">
        <div class="wrapper">

            <header>
                <h2>AKCIJE</h2>

            </header>

            <article class="product">
                <span>
                    <i class="fa fa-star"></i>
                </span>
                <h3>Burgeri </h3  >
                <p>Uz svaki kupljeni burger

                    <br> mali pomfrit <br> i limenka koka kole<br> <b>100din</b> <br> <img src="{{ url('../images/cheeseburger.jpg') }}"> </p>
                <p><a href="burgeri.php" class="button">Burgeri &raquo;</a></p>
            </article>


            <article class="product">
                <span>
                    <i class="fa fa-star"></i>
                </span>
                <h3>Sendviči</h3>
                <p>Sendvič po želji (tortilja ili wrep) <br> + pomfrit <br> + limenka koka kole <br> <b>360din</b>  <img src="{{ url('../images/sendvic.jpg') }}"> </p>
                <p><a href="sendvici.php" class="button">Sendviči &raquo;</a></p>
            </article>

            <article class="product">
                <span>
                    <i class="fa fa-star"></i>
                </span>
                <h3>Hrono <br>ishrana</h3>
                <p><img src="{{ url('../images/hrono_hit.jpg') }}"> </p>
                <p><a href="hrono.php" class="button">Hrono ishrana &raquo;</a></p>
            </article>

            <article class="product">
            	<span>
                	<i class="fa fa-star"></i>
                </span>
                <h3>Cezar <br>pica</h3>
                <p><img src="{{ url('../images/pice_hit.jpg') }}"> </p>
                <p><a href="pice.php" class="button">Pice &raquo;</a></p>
            </article>





        </div>
    </section>



    <article id="about" class="negative">
        <div class="wrapper">

            <div class="back">
                <h2>Food & love</h2>
                <p>Food and Love Catering je tu za Vas, da ispuni sve vaše gastronomske zahteve fino odabranim i uvek svežim namirnicama. Nabavku istih vršimo svakodnevno uz veoma visoke kriterijume kvliteta a mnoge namirnice proizvodimo licno na porodičnoj farmi u okolini Beograda i samim tim garantujemo kvalitet i njihovu svežinu čime se mogu pohvaliti samo retki u ovom poslu.
                    Naš cilj poslovanja su zadovoljne mušterije i samim tim Vam stojimo na raspolaganju da kreirate svoju porudžbinu svakodnevno u naznačenom radnom vremenu a mi ćemo se truditi da što pre stignemo do Vas.
                    Uskoro za Vas proširujemo naš meni te će Vas tu čekati bogata ponuda Italijanske kuhinje kao i Hrono ishrene.
                    S poštovanjem Vaš Food and love Catering. </p>
                <p><a href="/categories" class="button">Naš meni &raquo;</a></p>
            </div>

        </div>
    </article>

@endsection