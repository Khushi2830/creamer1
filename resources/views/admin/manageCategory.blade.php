@extends('admin.parent')

@section('title')
    Manage  Category
@endsection

@section('content')
    <div class="container-fluid dashboard-container py-4">
        <div class="row">
            <div class="col-lg-3  ">
                @include("admin.sidebar")
            </div>
           <div class="col-9 mb-3">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="" style="color: #5369c0;"  >Manage Categories </h2>
                    <a href="{{ Route('category.create') }}" class="btn " style="background-color: #5369c0; color: white; " >
                        <i class="bi bi-plus-circle"></i> Add New Category
                    </a>
                </div>
                <hr>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                        <thead class="table"style="background-color: #5369c0; color: white; ">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Category Title</th>
                                <th>Category Description</th>
                                <th>Parent Id</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

               
            </div>
        </div>
    </div>


@endsection