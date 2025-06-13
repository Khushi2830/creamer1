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
                            <th>Discount Price</th>
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
                            <td>{{$product->price}}</td>
                            <td><span>{{$product->descount_price}}</span></td>
                            <td>{{$Product->description}}</td>
                            <td><img src="{{ asset("storage/" . $product->image) }}" alt="{{ $product->title }}" class="product-image" width="100px"></td>
                            <td>
                              <div class="action-buttons">
                                  <a href="" class="btn-view" title="View details">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    <span>View</span>
                                  </a>
                                 <a href="" class="btn-inactive" title="Mark as inactive">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                  <span>Inactive</span>
                                 </a>
                             </div>
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
