@extends('static_template.base_view')
@section('title', 'Home page')
@section('content')
    <section class="hero is-danger is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="level">
                <div class="level-item">
                    <div id="hero" class="animated">
                        <h1 class="title">
                            Belajar laravel?
                        </h1>
                        <h1 class="heading">
                            siapa takut
                        </h1>
                    </div>
                </div>
                <div class="level-item">
                    <figure class="image is-128x128 animated" id="h-menu1">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                </div>
                <div class="level-item">
                    <figure class="image is-128x128 animated" id="h-menu2">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                </div>
                <div class="level-item">
                    <figure class="image is-128x128 animated" id="h-menu3">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div id="home" class="container">
        <div id="daftar-product">
            <ul>
                @foreach ($product as $p)
                        <li>{{$p}}</li> 
                @endforeach
            </ul>
        </div>
    </div>
@endsection