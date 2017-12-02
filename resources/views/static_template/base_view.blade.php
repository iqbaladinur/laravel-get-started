<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <title>@yield('title')</title>
</head>
<body>
    {{--  navbar  --}}
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="./">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="28" viewBox="0 0 84.1 57.1"><path fill="#FB503B" d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z"></path></svg>
            <h1>Learn laravel</h1>
        </a>
        <button class="button navbar-burger is-light" onclick="openmenu($(this))">
        <span></span>
        <span></span>
        <span></span>
        </button>
    </div>
    <div id="nav-menu" class="navbar-start navbar-menu">
        <a class="navbar-item" href="#">Home</a>
        <a class="navbar-item" href="#">Learn</a>
        <a class="navbar-item" href="#">Progress</a>
        <a class="navbar-item" href="#">Cool Stuff</a>
    </div>
    </nav>
    {{--  end of navbar  --}}
    
    {{--  content  --}}
    @yield('content')
    
    {{--  footer section  --}}
    <footer class="footer">
    <div class="container">
        <div class="has-text-centered">
            Laravel learning 2017
        </div>
    </div>
    </footer>
    {{--  jquery include  --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			crossorigin="anonymous">
    </script>
</body>
<script>
    function openmenu(event){
        event.toggleClass('is-active');
        $('#nav-menu').toggleClass('is-active');
    }

    $(document).ready(function(){
        $('#hero').addClass('fadeInLeft');
        $('#h-menu1').addClass('fadeInDown');
        $('#h-menu2').addClass('fadeInUp');
        $('#h-menu3').addClass('fadeInDown');
    });
</script>
</html>