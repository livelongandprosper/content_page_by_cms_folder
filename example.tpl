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