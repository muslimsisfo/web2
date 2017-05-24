<?php
 
 require_once 'View.php';



 class UtamaUI extends View
{
	public function tampilBerita()
	{
		include_once 'model/Berita.php';
		$brt= new Berita();
		$isi_berita= $brt->ambilberita();
		include_once 'pages/beranda.php';
		$this->end();
	}
}

?>