<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	///////////////////////////////////////////////////////////////////////////
		
		/**
	 * Function to load JS files
	 *
	 * @param $load_js Array
	 * @return STRING
	 */
	
	function load_js ($load_js)
	{
	    if (isset ($load_js) && is_array($load_js))
	    {
	        $js_files = '';
	        foreach ($load_js as $files)
	        {
	            $js_files .= '<script type="text/javascript" src="'.base_url().'js/'.$files.'"></script>';
	        }
	        return $js_files;
	    }
	}
	
	/**
	 * Function to load CSS files.
	 *
	 * @param $load_css Array
	 * @return STRING
	 */
	
	function load_css ($load_css)
	{  
	    if (isset ($load_css) && is_array($load_css))
	    {
	        $css_files = '';
	        foreach ($load_css as $files)
	        {
	            $css_files .= '<link type="text/css" rel="stylesheet" href="'.base_url().'css/'.$files.'"  />';
	        }
	        return $css_files;
	    }
	}
    
    /**
     * check if data exists in db
     */
    function isDataExists($tableName, $id, $key){
        $ci =& get_instance(); 
        $ci->load->database();
        if($tableName && $id && $key){
            $query = $ci->db->get_where($tableName, array($key => $id));
            return ($query->num_rows())?true:false;  
        }
        return false;
    }
    
    function isSelected($uriSegment, $current){
       return ($uriSegment == $current)?'selected':''; 
    }
    
?>