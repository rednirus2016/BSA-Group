@extends('layouts.app')
@section('meta_title','')
@section('content')

<div class="container top">
    <div class="row">
        <div class="col-lg-12">
            <div class="list-state">
                <h4>{{$state->name}}</h4>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
             <table class="table table-bordered">
    <thead>
      <tr>
        <th>composition</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($c as $c)
      <tr>
        <td><a href="/state-wise/{{$state->slug}}/product/{{$c->slug}}">{{$c->name}} in {{$state->name}} </a></td>
       
      </tr>
      @endforeach
    </tbody>
  </table>
        </div>
    </div>
</div>
@endsection