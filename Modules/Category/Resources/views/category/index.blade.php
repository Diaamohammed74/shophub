@extends('dashboard.master')
@section('title')
    {{ config('app.name') }}|Category
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">All Categories
                </h2>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($categories as $category)
                        <tr>
                            <td>#</td>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $category->name }}</strong>
                            </td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->description }}</td>
                            <td>image</td>

                            <td>
                                <span
                                    class="badge bg-label-{{ $category->status == 'active' ? 'primary' : 'danger' }} me-1">{{ $category->status }}</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('dashboard.category.edit', $category->slug) }}" class="dropdown-item">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>
                                        

                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
