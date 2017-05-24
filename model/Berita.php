<?php 

/**
* 
*/

include_once 'Model.php';
class Berita extends Model
{
	
	public function ambilBerita()
	{
		$query = $this->db->prepare("SELECT * FROM berita");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>