@extends('layouts.app')
@section('content')
 


<div class="container top">
   <div class="row">
<div class="col-lg-12">
     <div class="ress">
           <h4>{{$keywords->name}}  {{$pro->name}}  {{$category->name}} in  {{$city->name}}</h4>

           </div>    
      </div>


 <div class="col-lg-6">
   <div class="product-image">
  
     <img src="/assets/images/tab.png">
      <div class="con">
        <h4>{{$pro->name}}</h4>
      </div>
   </div>
 </div>
 <div class="col-lg-6">
     <div class="content">
        <p>
        <b>Pharma PCD Bazaar</b> keeps raising the standard for outstanding performance in the medical franchise industry. Our pharmaceutical product portfolio is profitable, health-promoting, and cost-effective for you. With us, you'll discover a lot of helpful information, including details about the company, a complete service list, best product selection, and a strategy for taking advantage of them.
        </p>
       
     </div>
 </div>
 <div class="col-lg-12">
     <div class="contents">
      <p> An exclusive <b>{{$category->name}}</b> is offered at Pharma PCD Bazaar. And all pharma <b>{{$category->name}}</b> are best in quality and efficacy.</p>
      <ul>
     <li>{{$keywords->name}} General  {{$category->name}} in {{$city->name}}</li>
                  <li>{{$keywords->name}} Orthopaedic {{$category->name}} in  {{$city->name}}</li> 
                  <li>{{$keywords->name}} Gynaecological {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} ENT {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Cardiac & Diabetic {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Derma {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Child Care {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Pediatric {{$category->name}} in  {{$city->name}}</li> 
                  <li>{{$keywords->name}} Cosmetic {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Nutraceutical {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Herbal {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Urology {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Critical Care {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Neurology {{$category->name}} in  {{$city->name}} </li>
                  <li>{{$keywords->name}} Ophthalmic {{$category->name}} in  {{$city->name}} </li>
                  <li>{{$keywords->name}} Intensive care {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Cardiac & Diabetic {{$category->name}} in  {{$city->name}} </li>
                  <li>{{$keywords->name}} Veterinary {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Nephrology {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Ayurvedic {{$category->name}} in  {{$city->name}} </li>
                  <li>{{$keywords->name}} Antibiotics {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Antimicrobials {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Analgesics {{$category->name}} in  {{$city->name}}</li>
                  <li>{{$keywords->name}} Anti-inflammatory {{$category->name}} in  {{$city->name}} </li>
                  <li>{{$keywords->name}} Antacids {{$category->name}} in  {{$city->name}} </li>
                  <li>{{$keywords->name}} Anti-allergic {{$category->name}} in  {{$city->name}} </li></ul>
     </div>
 </div>
</div>
</div>
</div>

@endsection