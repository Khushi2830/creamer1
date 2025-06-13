@extends('admin.parent')

@section('title')
    Manage Courses
@endsection

@section('content')
<div class="container-fluid dashboard-container py-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9 col-md-8 content-column">
            <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                <h2 class="page-title mb-0 fw-bold " style="color: #6f42c1;">Manage Product</h2>
                <div class="d-flex gap-3">
                    <a href="{{ route('product.create') }}" class="btn  shadow-sm rounded-pill px-4" style="background-color: #6f42c1; color: white;" >Add Product</a>
                </div>
            </div>

            <div class="table-responsive shadow rounded-4 bg-white p-3">
                <table class="table table-striped align-middle table-hover mb-0">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Veg/Non-Veg</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                       @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td><span>{{$product->category->cat_title}}</span></td>
                            <td>{{$product->kg}}</td>
                            <td>{{$product->veg}}</td>
                            <td><del>₹{{$product->price}}</del>₹{{$product->descount_price}}</td>
                            <td>{{$product->description}}</td>
                            <td><img src="{{ asset("storage/" . $product->image) }}" alt="{{ $product->title }}" class="product-image" width="100px"></td>
                            <td class="text-center">
                                        <a href="#" class="btn  btn-sm" style="background-color: blueviolet; color: white;">
                                            <i class="bi bi-check-circle"></i> V
                                        </a>
                                        
                                        <a href="#" class="btn  btn-sm"style="background-color: blueviolet; color: white;">
                                            <i class="bi bi-x-circle"></i> D
                                        </a>
                                    </td>
                        </tr>
                           
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
