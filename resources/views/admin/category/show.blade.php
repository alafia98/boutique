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
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{url('createcategory')}}" class="btn btn-primary">Nouvelle catégorie</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">								
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->isNotEmpty())
                            @foreach ($data as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="{{url('editcategory', $category->id)}}">
                                        <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a>
                                    <a href="{{url('deletecategory', $category->id)}}" class="text-danger w-4 h-4 mr-1">
                                        <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
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
                        </tbody>
                    </table>										
                </div>
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

@section('customJs')
<script>

</script>
@endsection