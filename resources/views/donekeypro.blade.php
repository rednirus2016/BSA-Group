@extends('layouts.app')
@section('meta_title',$key->name .' for '. $pro->name)
@section('meta_keywords',$key->name .' for '. $pro->name)
@section('meta_description',$key->name .' for '. $pro->name)

@section('content')

 <div class="container top">
     <div class="row">
         <div class="col-lg-12">
             <div class="titile">
                 <h4>{{$key->name}} for {{$pro->name}} in various city</h4>
             </div>
         </div>
     </div>
 </div>


<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="search-fuctionality">
              <input type="text" class="form-controller" id="search" name="search" placeholder="Search Composition"></input> 
              </div>
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
        <td><a href="/keyword/{{$key->slug}}/product/{{$pro->slug}}/city/{{$v->slug}}">{{$key->name}} for {{$pro->name}} in {{$v->name}} </a></td>
        
       
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
                     <input type="text" class="form-control" id="pwd" name="about" value="{{$key->name}} for {{$pro->name}}">
                  </div>
                  <div class="form-group">
                     <label for="pwd">Message:</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Write Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
               </form>
               </div>
          </div>
    </div>
</div>

<br>
@endsection
