<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            '/',
            '/projects',
            '/about',
            '/services',
            '/case-studies',
            '/contact',
            '/privacy',
            '/terms',
            '/cookies',
            '/disclaimer'
        ];

        // Add dynamic categories and sub-services
        $services = config('services_data');
        foreach ($services as $category) {
            $urls[] = '/services/' . $category['slug'];
            
            if (isset($category['subservices'])) {
                foreach ($category['subservices'] as $sub) {
                    $urls[] = '/services/' . $sub['slug'];
                }
            }
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . url($url) . '</loc>';
            $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
            $xml .= '<changefreq>' . ($url === '/' ? 'daily' : 'weekly') . '</changefreq>';
            $xml .= '<priority>' . ($url === '/' ? '1.0' : ($url === '/projects' || $url === '/services' ? '0.9' : '0.8')) . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }

    public function robots()
    {
        $robots = "User-agent: *\n";
        $robots .= "Allow: /\n";
        $robots .= "Disallow: /admin\n";
        $robots .= "\nSitemap: " . url('sitemap.xml');

        return response($robots, 200, ['Content-Type' => 'text/plain']);
    }
}
