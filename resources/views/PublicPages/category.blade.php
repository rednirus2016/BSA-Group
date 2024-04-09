@extends('layouts.app')
@section('meta_title',$category->name)
@section('meta_keywords',$category->name)
@section('meta_description',$category->name)
@section('meta_image')
@if($category->image)
content="{{ Request::root() }}/storage/{{$category->image}}"
@else
content="{{ Request::root() }}/images/logo-2.png"
@endif
@endsection
@section('content')
<div class="container top">
     <div class="row">
         <div class="col-lg-12">
             <div class="titile">
                 <h4>{{$category->name}}</h4>
             </div>
         </div>
     </div>
 </div>
<section class=" pb-80">
   <div class="container">
      <div class="row">
        
         <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="table-responsives">
               <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
                  <thead>
                     <tr>
                        <th>Composition</th>
                        
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($products as $item)
                     <tr>
                       @if($category->status =='2' || $category->status =='3' || $category->status =='4' || $category->status =='5')         
                              <td><a href="/{{ $item->slug }}">{{ $item->name }} in {{$category->name}}</td>         
                        @else
                              <td><a href="/{{ $item->slug }}">{{ $item->name }}</td>       
                        @endif
                       
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-lg-4">
            <div id="register-forms">
						      @if ( Session::has('flash_message') )
                     <div class="alert alert-{{ Session::get('flash_type') }} alert-dismissible fade show" role="alert">
                        <b>{{ Session::get('flash_message') }}</b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                     </div>
                     @endif
							<h2 class="text-center">SEND ENQUIRY</h2>
							<p class="text-center mt-1 mb-2 text-danger"> ( DO NOT POST JOB ENQUIRY )</p>
              <form action="/enquiry/store" method="POST">
                  @csrf
                  <div class="form-group">
                     <label for="email">Name:</label>
                     <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                     <label for="pwd">Email:</label>
                     <input type="email" class="form-control" id="pwd" name="email">
                  </div>
                  <div class="form-group">
                     <label for="pwd">Phone:</label>
                     <input type="phone" class="form-control" id="pwd" name="phone">
                  </div>
                  <div class="form-group">
                     <label for="pwd">State:</label>
                     <input type="text" class="form-control" id="pwd " name="state" >
                  </div>
                  <div class="form-group">
                     <label for="pwd">City:</label>
                     <input type="text" class="form-control" id="pwd" name="city">
                  </div>
                  <div class="form-group">
                     <label for="pwd">About:</label>
                     <input type="text" class="form-control" id="pwd" name="about" value="{{$category->name}}">
                  </div>
                  <div class="form-group">
                     <label for="pwd">Message:</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Write Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
               </form>
               </div>
         </div>
         <div class="col-lg-12">
            <div class="description">
         
               <p> <?php
                  echo html_entity_decode($category->description);
                  ?></p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection