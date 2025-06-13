@extends('admin.parent')

@section('title')
    Manage Category
@endsection

@section('content')
<div class="container-fluid dashboard-container py-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9 col-md-8 content-column">
            <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                <h2 class="page-title mb-0 fw-bold " style="color: #6f42c1;">Manage Category</h2>
                <div class="d-flex gap-3">
                   
                    <a href="{{ Route('category.create') }}" class="btn  shadow-sm rounded-pill px-4" style="background-color: #6f42c1; color: white;" >Add Category</a>
                </div>
            </div>

            <div class="table-responsive shadow rounded-4 bg-white p-3">
                <table class="table table-striped align-middle table-hover mb-0">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Sub-Category</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                      @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->cat_title}}</td>
                            <td>
                                @if ($category->category_id)
                                    {{$category->parentCategory->cat_title}}
                                @else
                                    <span class="text-muted">No Parent Category</span>
                                @endif
                            </td>
                            <td>{{$category->cat_description}}</td>
                            <td>
                                <img src="{{ asset('storage/' . $category->cover_image) }}" alt="{{ $category->cat_title }}" class="category-cover_image" width="100px">
                                </td>
                              <td class="text-center">
                                        <a href="#" class="btn  btn-sm" style="background-color: blueviolet; color: white;">
                                            <i class="bi bi-check-circle"></i> V
                                        </a>
                                        
                                        <a href="#" class="btn  btn-sm"style="background-color: blueviolet; color: white;">
                                            <i class="bi bi-x-circle"></i> D
                                        </a>
                                    </td>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
