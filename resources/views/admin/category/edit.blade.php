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
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Category</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{url('showcategory')}}" class="btn btn-primary">Dos</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <form action="{{url('updatecategory', $data->id)}}" method="POST" id="categoryform" name="categoryform">
            @csrf
            <div class="card">
                <div class="card-body">								
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Nom</label>
                                <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control" placeholder="Name">
                                <p></p>
                            </div>
                        </div>								
                    </div>
                </div>							
            </div>
            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="{{url('showcategory')}}" class="btn btn-outline-dark ml-3">Annuler</a>
            </div>
        </form>
    </div>
    <!-- /.card -->
</section>

@endsection