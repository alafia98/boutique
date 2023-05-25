<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=nav, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <h1>Smart Phone</h1>
        </div>
        <ul class="menu">
            <li><a href="{{url('')}}">Accueil</a></li>
            <li><a href="{{url('productdetail')}}">Produits</a></li>
            <li><a href="{{url('categorydetail')}}">Catégories</a></li>
            <li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{url('showcart')}}"><i class="fas fa-shopping-cart">({{$count}})</i></a></li>
                        <li><a href="{{ route('dashboard') }}" >Déconnexion</a></li>
                    @else
                        <li><a href="{{ route('login') }}" >Connexion</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Inscription</a></li>
                        @endif
                    @endauth
                @endif
            </li>
        </ul>
        <div class="menu-btn">
            <i class="fa fa-bars"></i>
        </div>
    </nav>

    @yield('content')

    <footer style="margin-top:30px;">
        <p>&copy; <a href=""> AL AFIA Khadija</a></p>
    </footer>
</body>
</html>