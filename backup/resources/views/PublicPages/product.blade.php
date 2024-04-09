@extends('layouts.app')
@section('meta_title',$product->meta_title)
@section('meta_keywords',$product->meta_keyword)
@section('meta_description',$product->meta_description)

@section('content')

<section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax top">
  
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1 class="pagetitle-heading">{{$product->name}}</h1>
         </div>
      </div>
   </div>
   <div class="breadcrumb-area">
      <div class="container">
         <nav>
            <ol class="breadcrumb mb-0">
               <li class="breadcrumb-item">
                  <a href="/"><i class="icon-home"></i> <span>Home</span></a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
         </nav>
      </div>
   </div>
</section>
<br>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="row">
                  <div class="col-lg-6">
                  <div class="product-image">
  
  <img src="/assets/images/tab.png">
   <div class="con">
     <h4>{{$product->name}}</h4>
   </div>
</div>
                  </div>
                  <div class="col-lg-6 product-col">
                    
                     @if ( Session::has('flash_message') )
                     <div class="alert alert-{{ Session::get('flash_type') }} alert-dismissible fade show" role="alert">
                        <b>{{ Session::get('flash_message') }}</b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                     </div>
                     @endif
                     <p>
                       <b> Pharma PCD Bazaar</b> 
                     </p>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<br>
@endsection
@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="{{ url('/enquiry/store') }}" method="post">
               @csrf
               <div class="form-group row">
                  <div class="col-md-12">
                     <input id="name" type="text" class="form-control" name="name" placeholder="Name*" required>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input id="enquiry" type="text" class="form-control" readonly name="enquiry" placeholder="Enquiry*" value="Enquiry about {{ $product->name }}" required>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input id="email" type="text" class="form-control" name="email" placeholder="Email*" required>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone no*" required>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input id="location" type="text" class="form-control" name="location" placeholder="Location*" required>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea class="form-control" name="message" placeholder="Message*" required></textarea>
                  </div>
               </div>
               <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                     <button type="submit" class="btn btn-outline-info">
                     Submit Enquiry
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection