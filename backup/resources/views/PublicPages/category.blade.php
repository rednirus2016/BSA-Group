@extends('layouts.app')
@section('meta_title',$category->meta_title)
@section('meta_keywords',$category->meta_keyword)
@section('meta_description',$category->meta_description)
@section('meta_image')
@if($category->image)
content="{{ Request::root() }}/storage/{{$category->image}}"
@else
content="{{ Request::root() }}/images/logo-2.png"
@endif
@endsection
@section('content')
<section class=" pb-80">
   <div class="container top">
      <div class="row">
        
         <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="table-responsives">
               <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
                  <thead>
                     <tr>
                        <th>Composition</th>
                        <th>Packing Size</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($products as $item)
                     <tr>
                        <td><a href="{{ $item->slug }}">{{ $item->name }} in {{$category->name}}</a></td>
                        <td>{{ $item->composition }}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="query-form">
            <form name="registerForm" class="row register-form pt-2">
								<!-- Form Input -->
								<div id="input-name" class="col-md-12">
									<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> </div>
								<!-- Form Input -->
								<div id="input-email" class="col-md-12">
									<input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" required> </div>
								<!-- Form Input -->
								<div id="input-phone" class="col-md-12">
									<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> </div>
								<!-- Form Input -->
								<div id="input-name" class="col-md-12">
									<input type="text" name="state" class="form-control name" placeholder="Enter Your State*" required> </div>
								<!-- Form Input -->
								<div id="input-name" class="col-md-12">
									<input type="text" name="city" class="form-control name" placeholder="Enter Your City*" required> </div>
								<!-- Form Input -->
								<div id="input-phone" class="col-md-12">
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Message"></textarea>
								</div>
								<!-- Form Button -->
								<div class="col-md-12 form-btn d-flex">
									<button type="submit" class="btn btn-md btn-rose tra-black-hover submit mr-auto ml-auto">Submit Now</button>
								</div>
								<!-- Form Message -->
								<div class="col-md-12 register-form-msg text-center"> <span class="loading"></span> </div>
							</form>
            </div>
          <div class="keylists">
            <h4>Search Terms</h4>
            <ul>
               @foreach($keywords as $k)
               <li><a href="{{$k->slug}}">{{$k->name}}</a></li>
               @endforeach
            </ul>
          </div>
          <div class="widget">
                    	<h5 class="widget_title">City</h5>
                        <div class="tags">
                           @foreach($city as $c)
                        	<a href="{{$c->slug}}">{{$c->name}}</a>
                           @endforeach
                        </div>
                    </div>
         </div>
         <div class="col-lg-12">
            <div class="description">
              <h4><b>{{$category->name}}</b></h4>
               <p> <?php
                  echo html_entity_decode($category->description);
                  ?></p>
               <ul>
                  <li>General {{$category->name}} </li>
                  <li>Orthopaedic {{$category->name}} </li> 
                  <li>Gynaecological {{$category->name}} </li>
                  <li>ENT {{$category->name}} </li>
                  <li>Cardiac & Diabetic {{$category->name}} </li>
                  <li>Derma {{$category->name}} </li>
                  <li>Child Care {{$category->name}} </li>
                  <li>Pediatric {{$category->name}} </li> 
                  <li>Cosmetic {{$category->name}} </li>
                  <li>Nutraceutical {{$category->name}} </li>
                  <li>Herbal {{$category->name}} </li>
                  <li>Urology {{$category->name}} </li>
                  <li>Critical Care {{$category->name}} </li>
                  <li>Neurology {{$category->name}} </li>
                  <li>Ophthalmic {{$category->name}} </li>
                  <li>Intensive care {{$category->name}} </li>
                  <li>Cardiac & Diabetic {{$category->name}} </li>
                  <li>Veterinary {{$category->name}} </li>
                  <li>Nephrology {{$category->name}} </li>
                  <li>Ayurvedic {{$category->name}} </li>
                  <li>Antibiotics {{$category->name}} </li>
                  <li>Antimicrobials {{$category->name}} </li>
                  <li>Analgesics {{$category->name}} </li>
                  <li>Anti-inflammatory {{$category->name}} </li>
                  <li>Antacids {{$category->name}} </li>
                  <li>Anti-allergic {{$category->name}} </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection