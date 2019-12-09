<?php
namespace Block;
/**
 * googlesearch - Main Class
 * 
 * Google custom search engine app enables you to insert Google search into your website, or a collection of websites easily. You can search both web pages and images. You can define if you want to search only on your site (or given sites), or the entire web. It is possible to customize your search features, the look and feel (layout, themes, custom colors and fonts, thumbnails), and much more. All these settings can be specified on the Google Custom Search Engine admin site: https://www.google.com/cse/ Your changes will appear instantly on your site automatically.
 * 
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package googlesearch
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/app_google_cse
 */
class googlesearch extends \SCHLIX\cmsBlock
{
	public function Run()
	{
        $custom_id = $this->config['str_css_id'];
        $display_header = $this->config['bool_display_header'];
        $app_search = new \App\Googlesearch();			
        $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
  }
}
