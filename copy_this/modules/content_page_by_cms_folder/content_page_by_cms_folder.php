<?php

/**
 * content_page_by_cms_folder class.
 * @author Gregor Wendland | g:wend Webentwicklung
 * @date 2014-01-07
 * @extends content_page_by_cms_folder_parent
 */
class content_page_by_cms_folder extends content_page_by_cms_folder_parent
{
	
	/**
	 * _page_list
	 * 
	 * (default value: null)
	 * 
	 * @var mixed
	 * @access protected
	 */
	protected $_page_list = null;
	
	
	/**
	 * get_cms_pages_by_cms_folder function.
	 * 
	 * @access public
	 * @param mixed $cms_folder
	 * @return void
	 */
	public function get_cms_pages_by_cms_folder($cms_folder) {
		if($this->_page_list[$cms_folder] === null) {
			// getAllContentIDs
			$sql = "
				SELECT
					OXLOADID
				FROM
					oxcontents
				WHERE
						OXFOLDER='".mysql_real_escape_string($cms_folder)."'
					AND
						OXACTIVE = '1'
				 ORDER BY
				 	CONTENT_PAGE_ORDER
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