@extends('static_template.base_view')
@section('title', 'Home')
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
    <section class="section">
            <div id="home" class="container">
            <h4 class="title is-size-4">Topics</h4>
            <hr>
            <div id="daftar-product" class="columns is-multiline">
                @foreach ($data as $topic)
                    <div class="column is-3">
                        <div class="card card-hover has-background-primary">
                            <a href="#someroutes">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                    <img class="fit-object" src="http://emka.web.id/wp-content/uploads/2013/09/laravel-logo-big.png" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <div class="header-title">
                                            <h4 class="has-text-centered is-capitalized"><?= $topic?></h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection