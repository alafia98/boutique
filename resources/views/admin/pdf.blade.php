@extends('admin.dash')

@section('content')

<!-- Main content -->
<section>
    <!-- Default box -->
                        <div>
                            <div>
                            <h1>Shipping Address</h1>
                            <address>
                                <strong>{{$order->name}}</strong><br>
                                Email: {{$order->email}}
                            </address>
                            </div>
                            
                            <div>
                                <b>Invoice </b><br>
                                <br>
                                <b>Order ID:</b> {{$order->id}}<br>
                                <b>Total:</b> {{$order->price}}<br>
                                <b>Status:</b> <span>{{$order->status}}</span>
                                <br>
                            </div>
                        </div>
                    <div>								
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
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
    <!-- /.card -->
</section>
<!-- /.content -->

@endsection