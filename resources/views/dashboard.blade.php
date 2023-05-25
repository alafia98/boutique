@extends('admin.dash')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                
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
            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3></h3>
                        <p>Total Categories</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{url('showcategory')}}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3></h3>
                        <p>Total Products</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{url('showproduct')}}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3></h3>
                        <p>Total Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{url('showorder')}}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3></h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{url('detailuser')}}" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3></h3>
                        <p>Total User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">							
                <div class="small-box card">
                    <div class="inner">
                        <h3></h3>
                        <p>Total Admin</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>					
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection