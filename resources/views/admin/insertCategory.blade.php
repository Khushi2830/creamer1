@extends('admin.parent')

@section('title')
    Insert Category
@endsection

@section('content')
<div class="container-fluid dashboard-container py-4">
    <div class="row">
        <div class="col-lg-3  ">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9">
            <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                <h2 class="page-title mb-0">Insert Category</h2>
                <a href="#" class="btn btn-outline-secondary d-flex align-items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    <span>Back to Categories</span>
                </a>
            </div>

            <div class="form-container p-4 bg-white shadow rounded-4">
                <form action="" method="POST" class="custom-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="cat_title" class="form-label fw-semibold">Category Title</label>
                        <input type="text" id="cat_title" name="cat_title" value="{{ old('cat_title') }}" class="form-control form-control-lg rounded-3" placeholder="Enter category title">
                        @error('cat_title')
                            <div class="form-error text-danger small mt-1">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="cat_description" class="form-label fw-semibold">Category Description</label>
                        <textarea id="cat_description" rows="4" name="cat_description" class="form-control form-control-lg rounded-3" placeholder="Enter category description">{{ old('cat_description') }}</textarea>
                        @error('cat_description')
                            <div class="form-error text-danger small mt-1">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="category_id" class="form-label fw-semibold">Category ID</label>
                            <input type="text" id="category_id" name="category_id" value="{{ old('category_id') }}" class="form-control form-control-lg rounded-3" placeholder="Enter category ID">
                            @error('category_id')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="cover_image" class="form-label fw-semibold">Cover Image</label>
                            <input type="file" id="cover_image" name="cover_image" class="form-control form-control-lg rounded-3">
                            @error('cover_image')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-actions mt-4">
                        <button type="submit" class="btn  btn-lg d-flex align-items-center gap-2 px-4 py-2 rounded-3 shadow" style="background-color: #6f42c1; color:white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                <polyline points="7 3 7 8 15 8"></polyline>
                            </svg>
                            Create Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection