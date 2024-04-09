<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($keyword as $category)
<url>
    <loc>https://www.pharmapcdbazaar.com/keyword/{{$category->slug}}/product/product.xml</loc>
    <changefreq>daily</changefreq>
    <priority>0.9</priority>
  </url>
 @endforeach
</urlset> 