@extends('layouts.app')
@section('meta_title',$key->name .' for '. $pro->name .' in '. $city->name)
@section('meta_keywords',$key->name .' for '. $pro->name .' in '. $city->name)
@section('meta_description',$key->name .' for '. $pro->name .' in '. $city->name)
@section('content')
<section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax top">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1 class="pagetitle-heading">{{$key->name}} for {{$pro->name}} in {{$city->name}}</h1>
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
               <li class="breadcrumb-item active" aria-current="page">{{$pro->name}}</li>
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
                        <img src="/assets/images/tab.png" alt="{{$key->name}} for {{$pro->name}} in {{$city->name}}">
                        <div class="con">
                           <h4>{{$pro->name}}</h4>
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
                        <b>PharmaPCDBazaar.com</b> is a leading platform to provide you <b>{{$key->name}} for {{$pro->name}} in {{$city->name}}</b> With us, you'll discover a lot of helpful information, including details about the company, a complete service list, the best product selection, and a strategy. 
                     </p>
                     <h4>What makes Pharma PCD Bazaar Best <b>{{$key->name}} for {{$pro->name}} in {{$city->name}}?</b></h4>
                     <p>We have collaborated with ISO-certified prominent pharma companies in India. All our listed companies are WHO-GMP, GLP-certified pharmaceutical companies, and DCGI-approved products. Our pharmaceutical product portfolio is profitable, health-promoting, and cost-effective for you.</p>
                     
                     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Send Enquiry</button>
                  </div>
                  <div class="col-lg-12">
                    <p>All pharma products are feasible and delivered within the promised time frame. All pharmaceutical formulations cover a broad spectrum of chronic and acute therapies. Along with employing high-quality raw materials and also developing the company's cutting-edge infrastructure</p>
                    <h4>Why Pharma PCD Bazaar for {{$key->name}} for {{$pro->name}} in {{$city->name}}</h4>
                    <p> <b>PharmaPCDBazaar.com</b> keeps raising the standard for outstanding performance in the medical industry for pharma products. We are committed to offering a wide range of pharmaceutical products which helps clients in earning potential and reputation in the pharmaceutical market.</p>
                    <p>The team of professionals is quite diverse to create comprehensive, high-performance medicines, which will enhance business outcomes. All pharmaceutical products have packaged with high-quality material and attractive packaging offered in the market. Our listed companies have committed to providing superior quality pharma products with 100% efficacy.</p>
                    <h4>Conclusion</h4>
                    <p>Our core strength lies in ability to excel in developing generics and technologically complex pharma products backed by our dedicated R&D professionals in formulations, process chemistry, and analytical development. Our presence in emerging markets and the developing world enables our professionals to cross-sell and build brands with ease. So join <b>PharmaPCDBazaar.com</b> for <b>{{$key->name}} for {{$pro->name}} in {{$city->name}}</b></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <div id="register-form">
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
                     <input type="text" class="form-control" id="pwd" name="about" value="{{$key->name}} for {{$pro->name}} in {{$city->name}}">
                  </div>
                  <div class="form-group">
                     <label for="pwd">Message:</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Write Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
               </form>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<br>
@endsection