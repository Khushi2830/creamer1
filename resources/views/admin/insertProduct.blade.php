@extends('admin.parent')

@section('title')
    Insert Product
@endsection

@section('content')
<div class="container-fluid dashboard-container py-4">
    <div class="row">
        <div class="col-lg-3  ">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9">
            <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                <h2 class="page-title mb-0" style="color: #6f42c1;" >Insert Product</h2>
                <a href="{{ route('product.index') }}" class="btn  d-flex align-items-center gap-1" style="background-color: #6f42c1; color: white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    <span>Back to Products</span>
                </a>
            </div>

            <div class="form-container p-4 bg-white shadow rounded-4">
                <form action="{{ route('product.store') }}" method="POST" class="custom-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label fw-semibold">Product Name</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control form-control-lg rounded-3" placeholder="Enter product title">
                        @error('title')
                            <div class="form-error text-danger small mt-1">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label fw-semibold">Price</label>
                            <input type="text" id="price" name="price" value="{{ old('price') }}" class="form-control form-control-lg rounded-3" placeholder="enter price">
                            @error('price')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="descount_price" class="form-label fw-semibold">Discount Price</label>
                            <input type="text" id="descount_price" name="descount_price"  value="{{ old('descount_price') }}" class="form-control form-control-lg rounded-3" placeholder="enter discount price">
                            @error('descount_price')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kg" class="form-label fw-semibold">Quntity</label>
                           
                            <select name="kg" id="kg" class="form-control-custom form-control-lg rounded-3">
                                <option value="">1kg</option>
                                <option value="">2kg</option>
                                <option value="">4kg</option>
                            </select>
                            @error('kg')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="veg" class="form-label fw-semibold">veg/Non-veg</label>
                            <select name="veg" id="veg" class="form-control-custom form-control-lg rounded-3">
                                <option value="">veg</option>
                                <option value="">Non-veg</option>
                            </select>
                            @error('veg')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="category_id" class="form-label fw-semibold">Category ID</label>
                            <select name="category_id" id="category_id" value="{{ old('category_id') }}" class="form-control-custom" placeholder="Enter product category">
                                <option value="">select category</option>
                                @foreach($categories as $category)
                                   <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->cat_title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label fw-semibold">Product Image</label>
                            <input type="file" id="image" name="image" class="form-control form-control-lg rounded-3">
                            @error('image')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label fw-semibold">Product Description</label>
                        <textarea id="description" rows="4" name="description" class="form-control form-control-lg rounded-3" placeholder="Enter product description">{{ old('cat_description') }}</textarea>
                        @error('description')
                            <div class="form-error text-danger small mt-1">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-actions mt-4">
                        <button type="submit" class="btn  w-100 text-center btn-lg align-items-center  rounded-3 shadow" style="background-color: #6f42c1; color:white;">
                           Insert Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection