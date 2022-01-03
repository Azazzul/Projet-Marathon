@extends('layouts.app')

@section('content')
    <div class="moment">
        <h2>
            Les séries du moment
        </h2>

        <div class="caroussel">
            @if(!empty($listeAffiche))
                @foreach($listeAffiche as $serie)
                    <a href="{{route('details.serie',['id' => $serie->id])}}">  <img src="{{asset($serie->urlImage)}}">  </a>
                @endforeach
            @else
                <p>Affiche Indisponible</p>
            @endif

            {{--
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            --}}
        </div>
    </div>
    <div class="categaleatoire">

        <h2>
            Categorie Aléatoire
        </h2>
        <div class="caroussel">


            @if(!empty($listeRandom))
                @foreach($listeRandom as $serie)
                    <a href="{{route('details.serie',['id' => $serie->id])}}">  <img src="{{asset($serie->urlImage)}}">  </a>
                @endforeach
            @else
                <p>Affiche Indisponible</p>
            @endif
            {{--
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>--}}
        </div>
    </div>
@endsection