@extends('layouts.app')
@section('content')
 
   <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="list-items">
               <ul>
               <form action="/results" method="POST">
                  @csrf
                 <h4><b>Product Category</b></h4>
                @foreach($cat as $c)
                <li>
                 
                   <input type="radio" name="categoryid" value="{{$c->id}}" id="{{$c->id}}" required >{{$c->name}}</input>
                   </li>
                @endforeach
                <h4><b>Search Terms</b></h4>
            
               @foreach($key as $k)
                <li>
                   <input type="radio" name="keywords" value="{{$k->id}}" id="{{$k->id}}" required>{{$k->name}}</input>
                </li>
                @endforeach
                <h4>City</h4>
                @foreach($city as $ci)
                <li>
                   <input type="radio" name="city" value="{{$ci->id}}" id="{{$ci->id}}" required>{{$ci->name}}</input>
                </li>
                @endforeach
           


              
                  <div class="buttons"><button class="submit" type="submit">Check results</button></div>
                </form>
              
               </ul>
            </div>
        </div>
      </div>
   </div> 
@endsection