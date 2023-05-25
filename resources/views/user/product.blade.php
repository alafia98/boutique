@extends('user.app')

@section('content')
<h1 class="pheading">Tous Les Produits</h1>

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
                        <form action="{{url('addcart', $product->id)}}" method="POST">
                            @csrf
                            <input class="btn" type="submit" value="Ajouter Panier">
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
@endsection