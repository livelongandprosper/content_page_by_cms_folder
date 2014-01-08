<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'content_page_by_cms_folder',
    'title'        => 'CMS-Ordner-Inhalt als Liste anzeigen',
    'description'  => 'Ermöglicht die Anzeige von CMS-Seiten-Ordnern als Liste. Sortierung möglich. Verwendung im Template: ',
    'thumbnail'    => 'picture.png',
    'version'      => '1.2',
    'author'       => 'g:wend Webentwicklung - Gregor Wendland - www.gewend.de',
    'extend'       => array(
        'oxviewconfig' => 'content_page_by_cms_folder/content_page_by_cms_folder'
    ),
    'blocks' => array(
    	array('template' => 'content_main.tpl', 'block' => 'admin_content_main_form', 'file' => 'out/blocks/admin_content_main_form.tpl'),
    ),
);