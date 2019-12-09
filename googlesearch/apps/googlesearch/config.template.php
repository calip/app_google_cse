<?php
/**
 * googlesearch - Config
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
<schlix-config:data-editor data-schlix-controller="SCHLIX.CMS.googlesearchAdminController" type="config">

        <x-ui:schlix-config-save-result />
        <x-ui:schlix-editor-form id="form-edit-config" method="post" data-config-action="save" action="<?= $this->createFriendlyAdminURL('action=saveconfig') ?>" autocomplete="off">

            <schlix-config:action-buttons />
            <x-ui:csrf />

            <x-ui:schlix-tab-container>
                <!-- tab -->
                <x-ui:schlix-tab id="tab_general" fonticon="far fa-file" label="<?= ___('General') ?>"> 
                    <!--content -->
                        
                        <schlix-config:app_alias />
                        <schlix-config:app_description />
                        <schlix-config:checkbox config-key='bool_disable_app' label='<?= ___('Disable application') ?>' />
                        <h4>Google Search Engine</h4> 
                        <schlix-config:textbox config-key='str_google_search_engine_title' label='<?= ___('Title') ?>' class='form-control' />
                        <schlix-config:textbox config-key='str_google_search_engine_id' required='required' label='<?= ___('Search Engine ID') ?>' />
                        <schlix-config:checkbox config-key='bool_enable_searchbox' label='<?= ___('Display search box before search results') ?>' />
                        <schlix-config:checkbox config-key='bool_link_target' label='<?= ___('Display content of the links of the result set on new browser tab.') ?>' />
                        <schlix-config:checkbox config-key='bool_support_overlay' label='<?= ___('Support Overlay Display') ?>' />
                </x-ui:schlix-tab>
                <!-- tab -->
                <?= \SCHLIX\cmsHooks::output('getApplicationAdminExtraEditConfigTab', $this) ?>
                <!-- end -->
            </x-ui:schlix-tab-container>
            
        </x-ui:schlix-editor-form>
</schlix-config:data-editor>     