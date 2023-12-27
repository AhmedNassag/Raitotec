<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ; ?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
>


    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>1.00</priority>
    </url>

    <url>
        <loc>{{ url('/register') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/login') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.64</priority>
    </url>
    
    <url>
        <loc>{{ url('/home') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/aboutUs') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/aboutUs') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/business') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/contact') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    <url>
        <loc>{{ url('/package') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    

    <!--blog dynamic-->
    <url>
        <loc>{{ url('/blog') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    @foreach ($blogs as $blog)
    <url>
        <loc>{{ url('blog/'.$blog->first_title) }}</loc>
        <lastmod>{{ @$blog->created_at?->format('Y-m-d') }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach


    <!--service dynamic-->
    <url>
        <loc>{{ url('/service') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    @foreach ($services as $service)
    <url>
        <loc>{{ url('service/'.$service->first_title) }}</loc>
        <lastmod>{{ @$service->created_at?->format('Y-m-d') }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    
    <!--program dynamic-->
    <url>
        <loc>{{ url('/program') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    @foreach ($programs as $programs)
    <url>
        <loc>{{ url('program/'.$programs->first_title) }}</loc>
        <lastmod>{{ @$programs->created_at?->format('Y-m-d') }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
    
    <url>
        <loc>{{ url('/other-programs') }}</loc>
        <lastmod>2023-12-20T08:55:24+00:00</lastmod>
        <priority>0.80</priority>
    </url>

</urlset>
