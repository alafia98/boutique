@extends('user.app')

@section('content')
<div style="display:flex; justify-content:space-around; height:80vh;">
    <div>
        <h1 class="pheading">Les Produits</h1>
        <section class="sec">
                <div class="products s1">
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
    </div>

    <div>
        <h1 class="pheading">Les Catégories</h1>
        <section class="sec">
                <div class="products">
                    @foreach ($category as $category)
                    <div class="card">
                        <div class="title" style="text-align: center"><a href="{{url('product_category', ['slug'=>$category->slug])}}" style="text-decoration: none">{{$category->name}}</a></div>
                    </div>
                    @endforeach
                </div>
        </section>
    </div> 
</div>

    
@endsection