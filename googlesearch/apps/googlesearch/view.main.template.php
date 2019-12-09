<?php
/**
 * googlesearch - Main page view (frontend)
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>

<div class="app-page-main app-<?= $this->app_name; ?>" id="app-<?= $this->app_name; ?>-app-page-main">
    <div class="content">
        <h1><?= ___h($google_search_engine_title); ?></h1>        
        <?php if ($google_search_engine_id): ?>
            <script async src="https://cse.google.com/cse.js?cx=<?= ___h($google_search_engine_id); ?>"></script>
            <div class="gcse-<?= ___h($search_overlay)?>" data-linktarget="<?= ___h($display_link_target); ?>"></div>
        <?php else: ?>
            <!-- NOTE - Google search engine was not set up correctly - please add a Google search engine ID -->
            <script>console.error("Google search engine ID has not been set from configuration");</script>
        <?php endif ?>
    </div>
</div>