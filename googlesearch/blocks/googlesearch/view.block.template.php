<?php
/**
 * googlesearch - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
<div class="googlesearchbox" <?php if ($custom_id) echo 'id="'.$custom_id.'"';?>>
<?php if ($display_header): ?>
<h3><?= ___('Search'); ?></h3>
<?php endif; ?>
  <form action="<?= $app_search->createFriendlyURL() ?>" method="get">

            <div class="nice-search">
                <x-ui:input-group>
                    <x-ui:textbox placeholder="<?= ___('Search'); ?>" name="q" id="<?= $this->block_name.'_q' ?>" value="<?= ___h(urldecode(fget_string_noquotes_notags('keyword', 255))); ?>" />
                    <x-ui:input-addon-button>
                        <x-ui:button-info type="button"><i class="fa  fa-search"></i></x-ui:button-info>
                    </x-ui:input-addon-button>
                </x-ui:input-group>
            </div>
      
  </form>
</div>