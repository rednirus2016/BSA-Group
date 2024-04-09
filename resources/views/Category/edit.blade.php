@extends('layouts.header')
@section('title','Edit Category')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-pencil-alt"></i>
                    Edit Category
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/categories/update') }}" enctype="multipart/form-data">
                        @csrf
                        @if (count($errors) > 0)
                            <div class = "alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name*') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-10">
                                <textarea name="description" id="description" required >{{ $category->description }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                            <div class="col-md-6">
                                <input id="image" type="file" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_title" class="col-md-4 col-form-label text-md-right">{{ __('Meta Title*') }}</label>
                            <div class="col-md-6">
                                <input id="meta_title" type="text" class="form-control" name="meta_title" value="{{ $category->meta_title }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_keyword" class="col-md-4 col-form-label text-md-right">{{ __('Meta Keyword*') }}</label>
                            <div class="col-md-6">
                                <input id="meta_keyword" type="text" class="form-control" name="meta_keyword" value="{{ $category->meta_keyword }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_description" class="col-md-4 col-form-label text-md-right">{{ __('Meta Description*') }}</label>
                            <div class="col-md-6">
                                <textarea id="meta_description" type="text" class="form-control" name="meta_description" value="{{ $category->meta_description }}" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('Slug*') }}</label>
                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control" text-lowercase name="slug" value="{{ $category->slug }}" required>
                            </div>
                        </div>
                        <input type="hidden" name="cid" id="cid" value="{{ $category->id }}">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    Edit Category
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('JS')
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description',{           
            fullPage: true,
            allowedContent: true,
            autoGrow_onStartup: true,
            enterMode: CKEDITOR.ENTER_BR});
    </script>
@endsection