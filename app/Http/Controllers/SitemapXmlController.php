<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index()
    {
        return response()->view('sitemap_xml')->header('Content-Type', 'text/xml');
    }
}
