@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<section id="mis-vis">
      <section class="main-section-mision">
            <article class="main-mision">
                <h3>Misión</h3>
                <p>{{$Mision->name}}</p>
            </article>      
            <article class="main-imgM">
                <img src="{{asset('imagen/' .$Mision->image)}}" alt="">
            </article>
        </section>

        <section class="main-section-vision">
            <article class="main-imgV">
                    <img src="{{asset('imagen/' .$Vision->image)}}" alt="">
            </article> 
            <article class="main-vision">    
                <h3>Visión</h3>
                <p>{{$Vision->name}}</p>     
            </article> 
        </section >
        <section>
      </section>
          <hr class="linea">
        </section>
        <section id="sobrenosotros" class="main-carrusel">
            <h3>Sobre Nosotros</h3>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  @foreach($inicio as $item)
                  <div class="carousel-item {{$item->class}}" data-bs-interval="10000">
                    <img src="{{asset('imagen/' .$item->image)}}" class="d-block w-100" alt="...">
                  </div>
                  @endforeach()
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>      
        <hr class="linea">
        <section class="main-info-empresa">
          <section class="main-info-1">
            <article>
              <h3>{{$servicios1->title}}</h3>
              <p>{{$servicios1->description}}</p>
            </article>
            <div><img src="{{asset('imagen/' .$servicios1->image)}}" alt=""></div>
          </section>
          <section class="main-info-2">
            <div><img src="{{asset('imagen/' .$servicios2->image)}}" alt=""></div>
            <article>
              <h3>{{$servicios2->title}}</h3>
              <p>{{$servicios2->description}}</p>
            </article>
          </section>
        </section>
@endsection