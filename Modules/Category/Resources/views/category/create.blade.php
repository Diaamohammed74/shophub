@extends('dashboard.master')
@section('title')
    {{ config('app.name') }}|Category
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Add New Category
                </h2>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dashboard.category.store') }}" method="post" id="add_form" enctype="multipart/form-data">
                @csrf
                <div id="add_form_messages"></div>
                {{-- MODIFICATIONS FROM HERE --}}
                <div class="row">
                    <div class="form-group col-md-10">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="border form-control" name="name" placeholder="please enter name"
                            value="{{ old('name') }}">
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <div class="form-group col-md-10">
                        <label class="form-label">Category Descriptoin</label>
                        <input type="text" class="border form-control" name="description"
                            placeholder="please enter description" value="{{ old('description') }}">
                    </div>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />


                    <div class="form-group col-md-10">
                        <label class="form-label">Parent Category</label>
                        <select class="border form-control" name="parent_id">
                            <option value="">Main</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <x-input-error :messages="$errors->get('parent_id')" class="mt-2" />
                </div>
                <div class="form-group float-end mt-3">
                    <button type="submit" class="btn btn-primary" id="submit_add_form">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
