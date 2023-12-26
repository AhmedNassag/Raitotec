<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use App\Models\Program;

class SiteController extends Controller
{
    public function sitemap() 
    {
        $blogs = Blog::all();
        $services = Service::get();
        $programs = Program::paginate(config('myConfig.paginationCount'));

        return response()->view('sitemap', ['blogs' => $blogs, 'services' => $services, 'programs' => $programs ])->header('Content-Type', 'text/xml');
    }



    public function robots()
    {
        $content = "User-agent: *\nDisallow: /admin/\nDisallow: /login/\nDisallow: /signup/\nDisallow: /search/\nDisallow: /private/\nDisallow: /tags/\nDisallow: /feed/\nUser-agent: Googlebot\nDisallow: /*?lang=\nUser-agent: *\nAllow: /\nSitemap:https://raitotec.com/sitemap.xml";

        return response($content, 200, ['Content-Type' => 'text/plain']);
    }
}
