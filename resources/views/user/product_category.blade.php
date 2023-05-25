@extends('user.app')

@section('content')
<h1 class="pheading">Les Produits de la catégorie: {{$category->name}}</h1>

    <section class="sec">
            <div class="products">
                @foreach ($product as $product)
                <div class="card">
                    <div class="img">
                        <img src="/productimage/{{$product->image}}" alt="">
                    </div>
                    <div class="desc">{{$product->category}}</div>
                    <div class="title">{{$product->name}}</div>
                    <div class="box">
                        <div class="price">{{$product->price}} DH</div>
                        <button class="btn">Ajouter Panier</button>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
@endsection