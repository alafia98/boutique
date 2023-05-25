@extends('admin.dash')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Order: {{$order->id}}</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{url('showorder')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header pt-3">
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                            <h1 class="h5 mb-3">Shipping Address</h1>
                            <address>
                                <strong>{{$order->name}}</strong><br>
                                Email: {{$order->email}}
                            </address>
                            </div>
                            
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice </b><br>
                                <br>
                                <b>Order ID:</b> {{$order->id}}<br>
                                <b>Total:</b> {{$order->price}}<br>
                                <b>Status:</b> <span class="text-success">{{$order->status}}</span>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-3">								
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th width="100">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$order->product_name}}</td>
                                    <td>{{$order->price}}</td>                                        
                                </tr>                                
                            </tbody>
                        </table>								
                    </div>                            
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Facture PDF</h2>
                        <div class="mb-3">
                        <div class="mb-3">
                            <a href="{{url('pdf', $order->id)}}" class="btn btn-primary">Upload</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Send Inovice Email to: {{$order->email}}</h2>
                        <div class="mb-3">
                            <form action="{{url('send_email', $order->id)}}" method="POST">
                                @csrf
                                <input type="text" name="greeting" placeholder="Title"><br>
                                <input type="text" name="body" placeholder="body"><br>
                                <input type="text" name="button" placeholder="button"><br>
                                <input type="text" name="url" placeholder="link">
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection