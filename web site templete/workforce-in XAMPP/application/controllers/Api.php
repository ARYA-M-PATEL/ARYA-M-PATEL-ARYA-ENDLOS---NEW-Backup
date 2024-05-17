<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends Public_Controller
{
    public function sitemap()
    {
        // Set the content-type header to XML
        header('Content-type: application/xml');

        // Generate the sitemap XML
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
        
        // Add dynamic URLs to the sitemap (replace with your own logic)
        $urls = $this->main->getAll('seo', '', ['is_deleted' => 0], 'priority DESC, page_name ASC'); // Implement this method to retrieve your dynamic URLs

        if($urls) {
            foreach ($urls as $url) {
                $sitemap .= '<url>';
                $sitemap .= '<loc>' . base_url($url['page_name'] !== 'index' ? "{$url['page_name']}.html" : '') . '</loc>';
                $sitemap .= '<lastmod>'.str_replace(' ', 'T', $url['updated_at']).'+00:00</lastmod>';
                $sitemap .= '<priority>'. $url['priority'] .'</priority>';
                $sitemap .= '</url>';
            }
        }

        $sitemap .= '</urlset>';

        // Output the sitemap XML
        echo $sitemap;
    }

    public function robots()
    {
        // Set the content-type header to plain text
        header('Content-type: text/plain');

        return $this->load->view('others/robots');
    }
}