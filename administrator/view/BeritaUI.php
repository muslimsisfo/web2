<?php 

require_once 'View.php';
/**
* 
*/
class BeritaUI extends View
{
	
	public function tampilBerita()
	{
		include_once 'model/Berita.php';

		$brt = new Berita();

		$isi_berita = $brt->ambilBerita();

		include_once 'pages/listberita.php';
		$this->end();
	}
}



 ?>