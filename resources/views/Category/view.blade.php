@extends('layouts.header')
@section('title','View Categories')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-eye"></i>
                    View Categories
                </div>
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ( Session::has('flash_message') )
                        <div class="alert alert-{{ Session::get('flash_type') }} alert-dismissible fade show" role="alert">
                            <b>{{ Session::get('flash_message') }}</b>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                    @if(count($categories)>0)
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-User">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>change  keywords</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>
                                                @if($item->type==1)
                                                    <span class="badge badge-primary">Product</span>
                                                @elseif($item->type==2)
                                                    <span class="badge badge-primary">Blog</span>
                                                @elseif($item->type==3)
                                                    <span class="badge badge-primary">Site Pages</span>
                                                @elseif($item->type==4)
                                                    <span class="badge badge-primary">Gallery</span>
                                                @endif
                                            </td>
                                            <td>{{$item->slug}}</td>
                                            <td>
                                                @if($item->status == 1)
                                                    <a class="badge badge-success">product</a>
                                                @elseif($item->status == 2)
                                                    <a  class="badge badge-danger">keywords</a>
                                                    @elseif($item->status == 3)
                                                    <a  class="badge badge-warning">city</a>
                                                    @elseif($item->status == 4)
                                                    <a  class="badge badge-warning">party</a>
                                                    @else
                                                    <a  class="badge badge-warning">state</a>
                                                @endif    
                                            </td>
                                            <td>
                                                <form action="/admin/categories/change-status/{{ $item->id }}" method="POST">
                                                    @csrf
                                                 <select id="type" class="form-control" name="type" required>
                                                    <option value=""> --Select Type*-- </option>
                                                    <option value="product">Product</option>
                                                    <option value="blog">City</option>
                                                    <option value="keywords">keywords</option>
                                                    <option value="party">party</option>
                                                    <option value="state">State</option>
                                                </select>
                                                <button type="submit">change</button>
                                            </form>
                                            </td>
                                            <td><img width="100px" src="/{{ $item->image }}"></td>
                                            <td>
                                                @if($item->type!=3)
                                                    <a href="/admin/categories/edit/{{ $item->id }}" id="{{ $item->id }}" class="badge badge-primary categories"><i class="fas fa-pencil-alt"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                      
                    @else
                        <h6>No Category Found.</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection