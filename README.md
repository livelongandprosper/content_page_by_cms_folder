content_page_by_cms_folder
==========================

Features:
- display CMS Pages of an CMS Folder as List by using this module with smarty template code
- sorting

This Module uses content folders in OXID eShop for returning content-page ids via
the oxviewconfig function get_cms_pages_by_cms_folder("CMS_FOLDER_NAME"). This gives you the
ability to structure content pages in front end e.g. with the follwing smarty snippet

Tested with OXID eShop CE 4.8.1.


Install
==========================
- Copy the content of copy_this to the root directory of the OXID eShop installation.
- Execute /content_page_by_cms_folder.sql via Service -> Tools -> Update SQL
- Activate the module via backend.
- Clear TMP-Folder
- Update Views (Service -> Tools -> Update Views)
- Change your templates so that they use the module (see "How to use").

Sorting CMS-Content-Pages
==========================
Use the new text field "Sortierung / Order" in Customer Info -> CMS Pages to
order CMS Pages by an integer value.

How to use
==========================
Find Smarty example Code in file /examples.tpl