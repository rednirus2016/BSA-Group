@extends('layouts.app')
@section('meta_title','')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="list-state">
                <ul>
                    @foreach($state as $s)
                    <li><a href="/state-wise/{{$s->slug}}/products">{{$s->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection