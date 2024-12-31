<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')
    <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
    <link rel="shortcut icon" href="/assets/img/Ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="header" id="inicio">
        <div class="header-section-logo">
            <img src="{{asset('imagen/'.$empresa->logo)}}" alt="">
        </div>
        <nav class="header-section-navegacion">
          <button class="cerrar"><i class="fa-solid fa-xmark"></i></button>
            <ul class="header-list">
                <li class="li-1"><a class="header-hambu-1" href="#inicio">Inicio</a></li>
                <li class="li-2"><a class="header-hambu-2" href="#mis-vis">Misión y Visión</a></li>
                <li class="li-3"><a class="header-hambu-3" href="#sobrenosotros">Sobre Nosotros</a></li>
                <li class="li-4"><a class="header-hambu-4" href="#contactos">Contactos</a></li>
            </ul>
          </nav>
        <button class="abrir"><i class="fa-solid fa-bars"></i></button>
    </header>

    <main>
      @yield('content')
    </main>

    <footer id="contactos">
      <section class="footer-section1-2">
        <section class="footer-section1-contactos">
          <h3>Contactos</h3>
          <ul>
              <li><a target="_blank" href="https://workspace.google.com/intl/es/gmail/"><i class="fa-solid fa-envelope"></i> Gmail</a></li>
              <li><a target="_blank" href="https://maps.app.goo.gl/H91A9z2b35QjBv1D7"><i class="fa-solid fa-location-dot"></i> Dirección</a></li>
              <li><a target="_blank" href=""><i class="fa-solid fa-phone"></i> {{$empresa->numero}}</a></li>
          </ul>
        </section>
        <section class="footer-section2-redes">
            <h3>Redes Sociales</h3>
            <ul>
                @foreach($redes as $item)
                <li><a target="_blank" href="{{$item->link}}"><i class="{{$item->icon}}"></i> {{$item->title}}</a></li>             
                @endforeach   
            </ul>  
        </section>
      </section>
      <section class="footer-section3-direccion">
            <ul>
                <h3>Geolocalización</h3>
                <iframe src="{{$empresa->georeferencia}}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </ul>
        </section>
        <section class="footer-boton-inicio">
          <a href="#inicio"><button type="button" class="btn btn-light"><i class="fa-solid fa-arrow-up"></i></button></a>
      </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{asset('sitioWeb/js/script.js')}}"></script>
</body>
</html>