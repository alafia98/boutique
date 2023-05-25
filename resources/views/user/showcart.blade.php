@extends('user.app')

@section('content')
<h1 class="pheading">Mon Panier</h1>

<section class="sec" style="display:flex; flex-direction:column; align-items:center; height: 60vh">
        <table class="filter">
            <tr>
                <th>Nom du Produit</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
            @if ($cart->isNotEmpty())
            <form action="{{url('order')}}" method="POST">
                @csrf            
                @foreach ($cart as $cart)
                            <tr>
                                <td>
                                    <input type="text" name="productname[]" value="{{$cart->product_title}}" hidden="">
                                    {{$cart->product_title}}
                                </td>
                                <td>
                                    <input type="text" name="price[]" value="{{$cart->price}}" hidden="">
                                    {{$cart->price}}
                                </td>
                                <td>
                                    <a href="{{url('deletecart', $cart->id)}}" class="text-danger w-4 h-4 mr-1">
                                        <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" style="width:10%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="3">enregistrements introuvables</td>
                            </tr>
            @endif
        </table>
        <button class="order">confirmer la commande</button>
    </form>
</section>

@endsection