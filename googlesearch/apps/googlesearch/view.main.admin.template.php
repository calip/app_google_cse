<?php
/**
 * googlesearch - Main Admin view
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
<!-- {top_menu} -->
<x-ui:schlix-data-explorer-blank data-schlix-controller="SCHLIX.CMS.googlesearchAdminController" >

    <x-ui:schlix-explorer-toolbar>
        <x-ui:schlix-explorer-toolbar-menu data-position="left">                
            <!-- {config} -->
            <x-ui:schlix-explorer-menu-command data-schlix-command="config" data-schlix-app-action="editconfig" fonticon="fas fa-cog" label="<?= ___('Configuration') ?>" />
            <!-- {end config -->
            <?= \SCHLIX\cmsHooks::output('getApplicationAdminExtraToolbarMenuItem', $this) ?>
        </x-ui:schlix-explorer-toolbar-menu>
        <!-- {help-about} -->
        <x-ui:schlix-explorer-toolbar-menu data-position="right">
            <x-ui:schlix-explorer-menu-folder fonticon="fa fa-question-circle" label="<?= ___('Help') ?>">
                <x-ui:schlix-explorer-menu-command data-schlix-command="help-about" data-schlix-app-action="help-about" fonticon="fas fas-cog" label="<?= ___('About') ?>" />
            </x-ui:schlix-explorer-menu-folder>
        </x-ui:schlix-explorer-toolbar-menu>
        <!-- {end help-about} -->

    </x-ui:schlix-explorer-toolbar>

    <div class="content"><?= ___('Register to Google Custom Search Engine and get your Google Search Engine ID here: <a href="https://www.google.com/cse/">https://www.google.com/cse/</a> You will get a Google Search Engine ID like this: 012345678901234567890:0ijk_a1bcde Enter this Google Search Engine ID here.') ?></div>
    <!-- End Data Viewer -->
</x-ui:schlix-data-explorer-blank>
