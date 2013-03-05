content_page_by_cms_folder
==========================

Tested with OXID eShop CE 4.7.2.

This Module uses content folders in OXID eShop for returning content-page ids via
the function get_cms_pages_by_cms_folder("CMS_FOLDER_NAME"). This give you the
ability to structure content pages in front end e.g. with the follwing smarty snippet



[{if $oViewConf->get_cms_pages_by_cms_folder("CMSFOLDER_MOREABOUTUS")}]
	<div class="footer-link-box">
    	<h4>[{oxmultilang ident="CMSFOLDER_MOREABOUTUS"}]</h4>
    	<ul>
    	[{foreach from=$oViewConf->get_cms_pages_by_cms_folder("CMSFOLDER_MOREABOUTUS") item="content_ident"}]
            [{oxifcontent ident=$content_ident object="oCont"}]
            	<li><a href="[{ $oCont->getLink() }]">[{ $oCont->oxcontents__oxtitle->rawValue }]</a></li>
            [{/oxifcontent}]
    	[{/foreach}]
    	</ul>
    	<div class="clear"></div>
	</div>
[{/if}]


Install:
Copy the content of copy_this to the root directory of the OXID eShop installation.
Change your templates so that they use the module.
Activate the module via backend.