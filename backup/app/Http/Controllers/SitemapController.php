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
     Sitemap::addSitemap(localUrl('/sitemaps/pages.xml'));
		Sitemap::addSitemap(localUrl('/sitemaps/categories.xml'));
		Sitemap::addSitemap(localUrl('/sitemaps/states.xml'));
	  Sitemap::addSitemap(localUrl('/sitemaps/companies.xml'));
	  return Sitemap::index();
    }
    
    public function pages()
    {
        $pages = Page::latest()->get();
        return response()->view('sitemap.pages', [
            'pages' => $pages,
        ])->header('Content-Type', 'text/xml');
    }

   public function keywords(){
        $keywords = Category::where('status',2)->get();
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
