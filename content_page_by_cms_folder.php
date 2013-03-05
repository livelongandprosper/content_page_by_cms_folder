<?php

class content_page_by_cms_folder extends content_page_by_cms_folder_parent
{
	// 
	protected $_page_list = null;
	
	public function get_cms_pages_by_cms_folder($cms_folder) {
		if($this->_page_list[$cms_folder] === null) {
			// getAllContentIDs
			$sql = "
				SELECT OXLOADID FROM oxcontents WHERE OXFOLDER='".mysql_real_escape_string($cms_folder)."'
			;";
			$temp = oxDb::getDB(true)->GetAll($sql);
			if(sizeof($temp)) {
				foreach($temp as $content_id) {
					$this->_page_list[$cms_folder][] = $content_id[0];
				}				
			} else {
				$this->_page_list[$cms_folder] = false;
			}
		}
		return $this->_page_list[$cms_folder];
	}
}


?>