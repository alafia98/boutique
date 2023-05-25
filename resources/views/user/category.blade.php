@extends('user.app')

@section('content')
    <h1 class="pheading">Tous Les Catégories</h1>

    <section class="sec">
            <div class="products">
                @foreach ($category as $category)
                <div class="card">
                    <div class="title" style="text-align: center">
                        <a href="{{url('product_category'.$category->name)}}" style="text-decoration: none">{{$category->name}}</a>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
@endsection