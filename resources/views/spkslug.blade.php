@extends('layouts.app')
@section('meta_title',$key->name .' for '. $pro->name)
@section('meta_keywords',$key->name .' for '. $pro->name)
@section('meta_description',$key->name .' for '. $pro->name)

@section('content')


<br>


<div class="container top">
    <div class="row">
        <div class="col-lg-12">
           <div class="data">
                <table class="table table-bordered">
    <thead>
      <tr>
        <th>Composition</th>
       
        
      </tr>
    </thead>
    <tbody>
        @foreach($c as $v)
      <tr>
        <td><a href="/keyword/{{$v->slug}}/product/{{$pro->slug}}/city/{{$key->slug}}"> {{$v->name}} for {{$pro->name}} in  {{$key->name}}</a></td>
        
       
      </tr>
      @endforeach
     
    </tbody>
  </table>
           </div> 
        </div>
    </div>
</div>

<br>
@endsection
