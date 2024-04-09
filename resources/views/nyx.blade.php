@extends('layouts.app')
@section('meta_title','')
@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-md-10 ml-auto col-xl-12 mr-auto">
    
      <!-- Nav tabs -->
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                <i class="now-ui-icons objects_umbrella-13"></i> All
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#cream" role="tab">
                <i class="now-ui-icons shopping_cart-simple"></i> ANTIMICROBIALS / ANTICHOLINERGICS
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#soap" role="tab">
                <i class="now-ui-icons shopping_shop"></i>  NUTRITIONAL SUPPLIMENTS / LIVER TUNERS / HAEMATINICS
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#lotion" role="tab">
                <i class="now-ui-icons ui-2_settings-90"></i>STEROIDS
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#hair" role="tab">
                <i class="now-ui-icons ui-2_protein-90"></i>CNS ACTING AGENTS SR.
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#face" role="tab">
                <i class="now-ui-icons ui-2_protein-90"></i> ANALGESIC / ANTI-INFLAMMATORY / ANTIVIRAL
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#dusting" role="tab">
                <i class="now-ui-icons ui-2_protein-90"></i> ANTIEMETICS / ANTIFIBRINOLYTCS
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab" role="tab">
                <i class="now-ui-icons ui-2_protein-90"></i> ANTACID / ANTI-ULCER / ANTI- COAGULANT
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#jelly" role="tab">
                <i class="now-ui-icons ui-2_protein-90"></i>JELLY
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#respules" role="tab">
                <i class="now-ui-icons ui-2_protein-90"></i> RESPULES
              </a>
            </li>
          </ul>
       
        </div>
        <div class="card-body">
          <!-- Tab panes -->
          <div class="tab-content text-center">
            <div class="tab-pane active" id="home" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
                                <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($product as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
            </div>
            <div class="tab-pane" id="cream" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
                                <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($products as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> </div>
            <div class="tab-pane" id="soap" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
            <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($productss as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
            </div>
            <div class="tab-pane" id="lotion" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
            <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($productsss as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
            </div>
            <div class="tab-pane" id="hair" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
            <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($productssss as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
            </div>
            <div class="tab-pane" id="face" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
            <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($productsssss as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
            </div>
            <div class="tab-pane" id="dusting" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
            <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($productssssss as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
            </div>
            <div class="tab-pane" id="tab" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
            <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($productsssssss as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
            </div>
            <div class="tab-pane" id="glu" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
            <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($productssssssss as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
            </div>
            <div class="tab-pane" id="jelly" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
            <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($productsssssssss as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
            </div>
            <div class="tab-pane" id="respules" role="tabpanel">
            <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
            <thead>
                                    <tr>
                                       
                                        
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Composition</th>
                                         
                                        <th>Packing Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($productssssssssss as $item)
                                        <tr>
                                            
                                              <td>@if($item->image)
                                              <img src="/{{$item->image}}" width="100px">
                                              @else
                                              <img src="/front_asset/images/p-demo.jpg" width="100px">
                                              @endif</td>
                                            
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->composition }}</td>
                                            <td>
                                                {{ $item->packing }}   
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection