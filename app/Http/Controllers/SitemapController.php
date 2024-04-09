<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Page;
use App\Models\Slug;
use Watson\Sitemap\Facades\Sitemap;

class SitemapController extends Controller
{
    //
    public function index()
    {
     return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }
    
    public function pages()
    {
        $pages = Page::latest()->get();
        return response()->view('sitemap.pages', [
            'pages' => $pages,
        ])->header('Content-Type', 'text/xml');
    }

   public function keywords(){
        $keywords = Category::whereIn('status',[2,4])->get();
        return response()->view('sitemap.keywords', [
            'keyword' => $keywords,
        ])->header('Content-Type', 'text/xml');
   }
    public function city(){
        $city = Category::where('status',3)->get();
        return response()->view('sitemap.city', [
            'city' => $city,
        ])->header('Content-Type', 'text/xml');
   }
   
    public function product($data){
        
        $cat = Category::where('slug',$data)->first();
    
         $product = Product::where('status',1)
             ->join('category_products','category_products.product_id','=','products.id')
             ->where('category_products.category_id',$cat->id)
             ->get();
             
        return response()->view('sitemap.products', [
            'pro' => $product,
            'cat'=>$cat,
        ])->header('Content-Type', 'text/xml');
   }
 
  public function composition(){
       $p = Product::where(['status'=>1])->get();
         return response()->view('sitemap.composition', [
           
            'p'=>$p,
            
        ])->header('Content-Type', 'text/xml');
  }
   public function kpsslugsitemap($k , $p){
        $cat = Category::where(['slug'=>$k])->first();
        $p = Product::where(['status'=>1,'slug'=>$p])->first();
        $c = Category::where('status',5)
        ->join('category_products','category_products.category_id','=','categories.id')
        ->where('category_products.product_id',$p->id)
        ->get();
       
         return response()->view('sitemap.kpsslugsitemap', [
            'c' => $c,
            'p'=>$p,
            'cat'=>$cat,
        ])->header('Content-Type', 'text/xml');
   }
 
 
  public function compositionkey($pslug){
       $p = Product::where(['status'=>1,'slug'=>$pslug])->first();
       $c = Category::where('status',2)
        ->join('category_products','category_products.category_id','=','categories.id')
        ->where('category_products.product_id',$p->id)
        ->get();
        return response()->view('sitemap.compositionkey', [
            'c' => $c,
            'p'=>$p,
          
        ])->header('Content-Type', 'text/xml');
      
  }
 
 public function compositionkeystate($compos , $key){
      $key = Category::where(['slug'=>$key])->first();
        $p = Product::where(['status'=>1,'slug'=>$compos])->first();
        $c = Category::where('status' ,3)
        ->join('category_products','category_products.category_id','=','categories.id')
        ->where('category_products.product_id',$p->id)
        ->get();
       
         return response()->view('sitemap.compositionkeystate', [
            'c' => $c,
            'p'=>$p,
            'key'=>$key,
        ])->header('Content-Type', 'text/xml');
 }
 
 
   public function kpslug($k , $p ){
         $cat = Category::where(['slug'=>$k])->first();
        $p = Product::where(['status'=>1,'slug'=>$p])->first();
        $c = Category::where('status',3)
        ->join('category_products','category_products.category_id','=','categories.id')
        ->where('category_products.product_id',$p->id)
        ->get();
       
         return response()->view('sitemap.kpslug', [
            'c' => $c,
            'p'=>$p,
            'cat'=>$cat,
        ])->header('Content-Type', 'text/xml');
   }
   public function citydata($data){
          
             $cat = Category::where(['status'=>1,'slug'=>$data])->first();
            dd($cat->id);
             $city = Category::where(['status'=>3,'slug'=>$data])->first();
            $pro =  Product::where('status',1)
             ->join('category_products','category_products.product_id','=','products.id')
             ->whereIn('category_products.category_id',[$cat->id , $city->id])
             ->get();
             dd($pro);
             
   } 
    public function categories()
    {
        $categories = Category::where('status',1)->get();
        return response()->view('sitemap.categories', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
    
    public function products()
    {
        $products = Product::latest()->get();
        return response()->view('sitemap.products', [
            'products' => $products,
        ])->header('Content-Type', 'text/xml');
    }

   
}
