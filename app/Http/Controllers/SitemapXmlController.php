<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class SitemapXmlController extends Controller
{
    private $ignoreRoutes = [
        'sanctum.csrf-cookie',
        'ignition.healthCheck',
        'ignition.executeSolution',
        'ignition.updateConfig',
        'sitemap_xml'
    ];

    public function index()
    {
        $publicRoutes = $this->getPublicRoutes();

        return response()
            ->view('sitemap_xml', ['publicRoutes' => $publicRoutes])
            ->header('Content-Type', 'text/xml');
    }

    private function getPublicRoutes()
    {
        $routes = [];

        foreach (Route::getRoutes()->getRoutesByName() as $routeName => $route) {
            if (in_array($routeName, $this->ignoreRoutes)) continue;
            $routes[] = $routeName;
        }

        return $routes;
    }
}
