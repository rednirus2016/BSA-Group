@extends('layouts.app')
@section('content')
 

@if(count($pro) == 0)
<h1>No product Found</h1>
@else
<div class="container top">
   <div class="row">
 @foreach($pro as $p)
     <div class="col-lg-3">
     <div class="res">
           <h4><a href="/results/{{$keywords->slug}}/{{$p->slug}}/{{$category->slug}}/{{$city->slug}}">{{$keywords->name}} {{$p->name}} {{$category->name}} in {{$city->name}}</a></h4>
           
          </div>    
      </div>
@endforeach
  </div>
</div>
@endif
@endsection