
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

   @foreach ($pro as $categorys)
<url>
    <loc>https://www.pharmapcdbazaar.com/keywords/{{$cat->slug}}/{{$categorys->slug}}/city.xml</loc>
    <changefreq>daily</changefreq>
    <priority>0.9</priority>
  </url>
 @endforeach
</urlset> 
