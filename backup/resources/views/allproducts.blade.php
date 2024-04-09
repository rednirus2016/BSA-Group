@extends('layouts.app')
@section('content')
 
   <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="list-items">
               <ul>
               
                @foreach($pro as $c)
                <li>
                  <a href="/product/{{$c->id}}/{{$cat->id}}">{{$c->name}} </a>
                </li>
                @endforeach
               </ul>
            </div>
        </div>
      </div>
   </div> 
@endsection