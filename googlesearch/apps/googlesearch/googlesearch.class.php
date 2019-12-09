<?php
namespace App;
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
class googlesearch extends \SCHLIX\cmsApplication_Basic {


    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct("googlesearch");
        /*
         * You can modify this 
        $this->has_versioning = false; // uncomment if this app wants versioning enabled
        $this->disable_frontend_runtime = false; //  Uncomment if this is a backend only app
         */
    }
        

    /**
     * View Main Page
     */
    public function viewMainPage() {
        global $HTMLHeader;
        global $__googlecse_loaded;
 
        if (!$__googlecse_loaded)
        {
            $google_search_engine_title = $this->getConfig('str_google_search_engine_title');
            $google_search_engine_id = $this->getConfig('str_google_search_engine_id', true);
            $enable_searchbox = $this->config['bool_enable_searchbox'];
            $support_overlay = $this->config['bool_support_overlay'];
            $link_target = $this->config['bool_link_target'];
            $display_link_target = "_self";
            if ($link_target) {
                $display_link_target = "_blank";
            }

            $search_overlay = "searchresults-only";
            if ($support_overlay || $enable_searchbox) {
                $search_overlay = "search";
            }

            $__googlecse_loaded = true;
            $local_variables = compact(array_keys(get_defined_vars()));
            $this->loadTemplateFile('view.main', $local_variables);
        }
        return true;
    }
            
    /**
     * Test Command, can be triggered from URL /plugin_short_name/action/test     
     * @global \SCHLIX\cmsDatabase $SystemDB
     */
    
    //_______________________________________________________________________________________________________________//
    public function Run($command) {
        switch ($command['action']) {
            case 'main': $this->viewMainPage($command['pg']);
                break;

            default: return parent::Run($command);
        }
        return RETURN_FULLPAGE;
    }

}

?>