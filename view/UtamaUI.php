<?php
 
 require_once 'View.php';



 class UtamaUI extends View
{
	public function tampilBerita()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}

?>