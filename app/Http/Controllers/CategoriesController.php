<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slug;
use Illuminate\Http\Request;
use DB;
use Session;

class CategoriesController extends Controller
{
    
    public function welcome(){
       $cat = Category::where('status',1)->get();
       $categroy = Category::where('status',2)->get();
       return view('welcome')->with('cat',$categroy)
       ->with('proc',$cat);
    }
    public function new(){
        return view('Category.add');
    }
    public function keydata($data){
       $keywords = Category::where('slug',$data)->first();
       $product = Product::where('status',1)
             ->join('category_products','category_products.product_id','=','products.id')
             ->where('category_products.category_id',$keywords->id)
             ->get();
          return view('keypro')
          ->with('pro',$product)
          ->with('key',$keywords);
    }
    
    public function categroproduct($cslug , $pslug){
        $cat = Category::where('slug',$cslug)->first();
        $pro = Product::where('slug',$pslug)->first();
       
        $key = Category::where('status',2)
        ->join('category_products','category_products.category_id','=','categories.id')
        ->where('category_products.product_id',$pro->id)
        ->get();
         return view('categoryproducts')
        ->with('cat',$cat)
        ->with('key',$key)
        ->with('pro',$pro);
    }
    
    public function keywordproduct($kslug , $pslug){
        $key = Category::where('slug',$kslug)->first();
        $pro = Product::where('slug',$pslug)->first();
       
        $city = Category::whereIn('status',[3,5])
        ->join('category_products','category_products.category_id','=','categories.id')
        ->where('category_products.product_id',$pro->id)
        ->get();
         return view('keywordproduct')
        ->with('city',$city)
        ->with('key',$key)
        ->with('pro',$pro); 
    }
    
    public function cpdtat($slug){
        $cat = Category::where('slug',$slug)->first();
         $product = Product::where('status',1)
             ->join('category_products','category_products.product_id','=','products.id')
             ->where('category_products.category_id',$cat->id)
             ->get();
             return view('cpdtat')
          ->with('pro',$product)
          ->with('cat',$cat);
        
    }
    public function kpcslug($k , $p , $c){
          $pro = Product::where('slug',$p)->first();
        $key = Category::where('slug',$k)->first();
        $city = Category::where('slug',$c)->first();
       
        return view('kpcslug')
        ->with('pro',$pro)
        ->with('key',$key)
        ->with('city',$city);
    }
    public function kewpro($key , $pro){
        $keywords = Category::where('slug',$key)->first();
        $pro = Product::where('slug',$pro)->first();
       
        $c = Category::where('status',3)
        ->join('category_products','category_products.category_id','=','categories.id')
        ->where('category_products.product_id',$pro->id)
        ->get();
         return view('donekeypro')
        ->with('key',$keywords)
        ->with('c',$c)
        ->with('pro',$pro);
    }
    
    public function state(){
       $state =  Category::where('status', 5)->get();
        return view('state')
        ->with('state',$state);
    }
    
    public function sslug($slug){
         $state = Category::where('slug',$slug)->first();
    
       
        $c = Product::where('status',1)
        ->join('category_products','category_products.product_id','=','products.id')
        ->where('category_products.category_id',$state->id)
        ->get();
        
         return view('sslug')
        ->with('state',$state)
        ->with('c',$c); 
    }
    public function spslug($sslug , $pslug){
        
         $keywords = Category::where('slug',$sslug)->first();
        $pro = Product::where('slug',$pslug)->first();
       
        $c = Category::where('status',2)
        ->join('category_products','category_products.category_id','=','categories.id')
        ->where('category_products.product_id',$pro->id)
        ->get();
         return view('spkslug')
        ->with('key',$keywords)
        ->with('c',$c)
        ->with('pro',$pro);
        
    }
    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'name'=>'required|max:100', 
            'slug'=>'required|max:100|unique:slugs',
            'type'=>'required',
            'description' => 'nullable',
            'meta_title'=>'required',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:5000'
        ]);
        
        $image="";
        
        if($request->image!=NULL){
            $image=$request->image->move('Category');
        }

        $category=Category::create([
                'name'=>$request->name, 
                'slug'=>$request->slug,
                'type'=>$request->type,
                'description'=>$request->description,
                'meta_title'=>$request->meta_title,
                'meta_keyword'=>$request->meta_keyword,
                'meta_description'=>$request->meta_description,
                'image'=>$image
            ]);

        Slug::create([
            'slug' => $request->slug,
            'type' => 4,
            'slugid' => $category->id
        ]);        
        
        Session::flash('flash_type','success');
        Session::flash('flash_message','Category Created Successfully.');
        
        return redirect(url('/admin/categories/view'));
    }




    public function view(){
        $keywords = Category::where('status',2)->get();
        return view('Category.view')
            ->with('categories',Category::get())
            ->with('key',$keywords);
    }

    public function edit($cid){
        $category=Category::where('id',$cid)
            ->first();

        return view('Category.edit')
            ->with('category',$category);
    }


                
                
   public function all(){
        $cat = Category::where('type',1)->where('status',1)->get();
        $key = Category::where('type',1)->where('status',2)->get();
        $city = Category::where('type',1)->where('status',3)->get();
       
        return view('allcategory')
        ->with('cat',$cat)
        ->with('key',$key)
        ->with('city',$city);
    }

    public function alldetail(Request $request , $id){
        
        $cat = DB::table('categories')->where('id',$id)->first();
       
    
         $pro =  DB::table('products')
         ->Leftjoin('category_products','category_products.product_id','=','products.id')
         ->where('category_products.category_id',$id)
         ->get(['products.id','products.name','products.composition','products.packing']);
          return view('allproducts')
        ->with('pro',$pro)
        ->with('cat',$cat);
    }


  public function products(Request $request , $productId , $categoryid){
    
    $products = DB::table('products')->where('id',$productId)->first();
  
    $cat = DB::table('categories')->where('id',$categoryid)->first();
    return view('products')
    ->with('product',$products)
    ->with('cat',$cat);

  }



public function results(Request $request){
    $category = DB::table('categories')->where('id',$request->categoryid)->first();
   $keywords =  DB::table('categories')->where('id',$request->keywords)->first();
   $city =  DB::table('categories')->where('id',$request->city)->first();
   $pro =  DB::table('products')
         ->Leftjoin('category_products','category_products.product_id','=','products.id')
         ->whereIn('category_products.category_id',[$request->categoryid,$request->keywords,$request->city])
         ->get(['products.id','products.name','products.image','products.composition','products.packing','products.slug']);
       
    return view('sanju')
    ->with('category',$category)
    ->with('city',$city)
    ->with('keywords',$keywords)
    ->with('pro',$pro);
}
public function finalresult(Request $request , $keywords   , $name , $category , $city){
    $keywords = DB::table('categories')->where('slug',$keywords)->first();
    $category = DB::table('categories')->where('slug',$category)->first();
    $city =  DB::table('categories')->where('slug', $city)->first();
    $name =  DB::table('products')->where('slug',$name)->first();
    return view('finalresults')
    ->with('keywords',$keywords)
    ->with('city',$city)
    ->with('category',$category)
    ->with('pro',$name); 
}




    public function update(Request $request){

        $slug=Slug::where('slugid',$request->cid)
            ->where('type',4)
            ->first();

        $this->validate($request,[
            'name'=>'required|max:100', 
            'slug'=>'required|max:100|unique:slugs,slug,'.$slug->id,
            'description' => 'nullable',
            'meta_title'=>'required',
            'meta_keyword'=>'required',
            'meta_description'=>'required'
        ]);

        if($request->image!=NULL){
            $this->validate($request,[
                'image' => 'mimes:jpg,jpeg,png|max:5000'
            ]);

            $image=$request->image->move('Category');

            Category::where('id',$request->cid)
                ->update([
                    'image'=>$image
                ]);
        }

        Category::where('id',$request->cid)
            ->update([
                "name" => $request->name,
                "slug" => $request->slug,
                'description'=>$request->description,
                "meta_title" => $request->meta_title,
                "meta_keyword" => $request->meta_keyword,
                "meta_description" => $request->meta_description,
            ]);

        Slug::where('id',$slug->id)
            ->update([
                'slug' => $request->slug
            ]);

        Session::flash('flash_type','success');
        Session::flash('flash_message','Category Updated Successfully.');
        
        return redirect(url('/admin/categories/view'));
    }

    public function changestatus(Request $request , $cid){
       $category=Category::where('id',$cid)
            ->first();
        if($request->type=='blog'){
            Category::where('id',$cid)
                ->update([
                    "status" =>3
                ]);
            Session::flash('flash_type','danger');
            Session::flash('flash_message','Category Status changed to inactive.');
        }
        elseif($request->type=='product'){
            Category::where('id',$cid)
                ->update([
                    "status" => 1
                ]);
                Session::flash('flash_type','success');
                Session::flash('flash_message','Category Status changed to active.');
        }elseif($request->type=='keywords'){
            Category::where('id',$cid)
                ->update([
                    "status" => 2
                ]);
                Session::flash('flash_type','success');
                Session::flash('flash_message','Category Status changed to active.'); 
        }elseif($request->type=='party'){
            Category::where('id',$cid)
                ->update([
                    "status" => 4
                ]);
                Session::flash('flash_type','success');
                Session::flash('flash_message','Category Status changed to active.'); 
        }
        else{
            Category::where('id',$cid)
                ->update([
                    "status" => 5
                ]);
                Session::flash('flash_type','success');
                Session::flash('flash_message','Category Status changed to active.'); 
        }

        return redirect(url('/admin/categories/view'));

       
    }


  public function rumi(){
   $product =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id', [78,79,80,81,82,83])
    ->orderBy('name')
    ->get();
    $products =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[78])

    ->get();
    $productss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[79])

    ->get();
    $productsss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[80])

    ->get();
    $productssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[81])

    ->get();
    $productsssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[82])

    ->get();
    $productssssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[83])

    ->get();
    return view('rumi')
    ->with('product',$product)
    ->with('products',$products)
    ->with('productss',$productss)
    ->with('productsss',$productsss)
    ->with('productssss',$productssss)
    ->with('productsssss',$productsssss)
    ->with('productssssss',$productssssss)
   
    ;
  }


  public function thea(){
    $product =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id', [84,85,86,87,88,89,90,91])
    ->orderBy('name')
    ->get();
    $products =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[84])

    ->get();
    $productss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[85])

    ->get();
    $productsss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[86])

    ->get();
    $productssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[87])

    ->get();
    $productsssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[88])

    ->get();
    $productssssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[89])

    ->get();
    $productsssssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[90])

    ->get();
    $productssssssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[91])

    ->get();
    return view('thea')
    ->with('product',$product)
    ->with('products',$products)
    ->with('productss',$productss)
    ->with('productsss',$productsss)
    ->with('productssss',$productssss)
    ->with('productsssss',$productsssss)
    ->with('productssssss',$productssssss)
    ->with('productsssssss',$productsssssss)
    ->with('productssssssss',$productssssssss);
  }
     
   
   
  public function nyx(){
    $product =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id', [92,93,94,95,96,97,98,99,100,101])
    ->orderBy('name')
    ->get();
    $products =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[92])

    ->get();
    $productss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[93])

    ->get();
    $productsss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[94])

    ->get();
    $productssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[95])

    ->get();
    $productsssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[96])

    ->get();
    $productssssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[97])

    ->get();
    $productsssssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[98])

    ->get();
    $productssssssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[99])


    ->get();
    $productsssssssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[100])
    

    ->get();
    $productssssssssss =  DB::table('products')
    ->leftJoin('category_products','category_products.product_id','=','products.id')
    ->whereIn('category_products.category_id',[101])
    

    ->get();
    return view('nyx')
    ->with('product',$product)
    ->with('products',$products)
    ->with('productss',$productss)
    ->with('productsss',$productsss)
    ->with('productssss',$productssss)
    ->with('productsssss',$productsssss)
    ->with('productssssss',$productssssss)
    ->with('productsssssss',$productsssssss)
    ->with('productssssssss',$productssssssss)
    ->with('productsssssssss',$productsssssssss)
    ->with('productssssssssss',$productssssssssss);
  }


  public function gold(){

    $product =  DB::table('products')
     ->leftJoin('category_products','category_products.product_id','=','products.id')
     ->whereIn('category_products.category_id', [102])
     ->orderBy('name')
     ->get();
    
 
   
     return view('rumi')
     ->with('product',$product);
   }

}
