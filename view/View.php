<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/navigasi.php';
		include_once 'template/header.php';
		
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include_once 'template/sidebar.php';
		include 'template/footer.php';

	}
	
}


 ?>