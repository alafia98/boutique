@extends('admin.dash')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">					
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orders</h1>
                </div>
                <div class="col-sm-6 text-right">
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
        <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="input-group input-group" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">								
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Orders #</th>											
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Date Purchased</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $orders)
                            <tr>
                                <td><a href="{{url('detailorder', $orders->id)}}">{{$orders->id}}</a></td>
                                <td>{{$orders->name}}</td>
                                <td>{{$orders->email}}</td>
                                <td>{{$orders->product_name}}</td>
                                <td>{{$orders->price}}</td>
                                <td>{{$orders->created_at}}</td>																				
                                <td>{{$orders->status}}</td>
                                <td>
                                    <span class="badge bg-success"><a href="{{url('updatestatus', $orders->id)}}">Delivered</a></span>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>										
                </div>
            </div>
        <!-- /.card -->
    <!-- /.content -->

@endsection