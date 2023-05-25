@extends('admin.dash')

@section('content')
@if (Session::has('message'))
            <script>
                swal('Message', '{{Session::get('message')}}', 'success', {
                    button:true,
                    button:"ok",
                })
            </script>
        @endif
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Modifier un Produit</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{url('showproduct')}}" class="btn btn-primary">Dos</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <form action="{{url('updateproduct', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">								
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="title">Nom</label>
                                        <input type="text" value="{{$data->name}}" name="name" id="name" class="form-control" placeholder="Nom">	
                                    </div>
                                </div>                                          
                            </div>
                        </div>	                                                                      
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Médias</h2>								
                            <input type="file" name="file" width="50%">
                        </div>	                                                                      
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Médias</h2>								
                            <img src="/productimage/{{$data->image}}" alt="" width="50%">
                        </div>	                                                                      
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Tarification</h2>								
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="price">Prix</label>
                                        <input type="number" value="{{$data->price}}" min="0" name="price" id="price" class="form-control" placeholder="Prix">	
                                    </div>
                                </div>                                        
                            </div>
                        </div>	                                                                      
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Inventaire</h2>								
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="number" value="{{$data->quantity}}" min="0" name="quantity" id="quantity" class="form-control" placeholder="Quantité">	
                                    </div>
                                </div>                                         
                            </div>
                        </div>	                                                                      
                    </div>
                    <div class="card">
                        <div class="card-body">	
                            <h2 class="h4  mb-3">Catégorie de produit</h2>
                            <div class="mb-3">
                                <label for="category">Catégorie</label>
                                <select name="category" id="category" class="form-control">
                                    <option selected>Modifier catégorie</option>
                                    @foreach ($category as $category)
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>                          
                </div>
            </div>
            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Créer</button>
                <a href="{{url('showproduct')}}" class="btn btn-outline-dark ml-3">Annuler</a>
            </div>
        </form>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection