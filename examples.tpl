[{* example to insert anywhere in smarty templates of the shop *}]
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

[{* another example code *}]
[{if $oViewConf->get_cms_pages_by_cms_folder("CMSFOLDER_MOREABOUT")}]
	<ul>
    	[{foreach from=$oViewConf->get_cms_pages_by_cms_folder("CMSFOLDER_MOREABOUT") item="content_ident"}]
            [{oxifcontent ident=$content_ident object="oCont"}]
            	<li><a href="[{ $oCont->getLink() }]">[{ $oCont->oxcontents__oxtitle->rawValue }]</a></li>
            [{/oxifcontent}]
    	[{/foreach}]
   	</ul>
[{/if}]