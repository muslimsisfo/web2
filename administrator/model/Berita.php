<?php 

/**
* lokasi ada di web2/administrator/model/Berita.php
*/

include_once 'Model.php';
class Berita extends Model
{
	public $tanggal;
	public $judul;
	public $isi;
	public $id_kategori;
	
	public function ambilBerita()
	{
		$query = $this->db->prepare("SELECT * FROM berita");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}

	public function setBerita($tanggal,$judul,$isi,$id_kategori)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO berita(tanggal,judul,isi,kategori_id) VALUES(:tanggal, :judul, :isi, :id_kategori)");
		   $stmt->bindparam(":tanggal",$tanggal);
		   $stmt->bindparam(":judul",$judul);
		   $stmt->bindparam(":isi",$isi);
		   $stmt->bindparam(":id_kategori",$id_kategori);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}

	public function ambilBeritaSpesifik(id){

	}

	public function ubahBerita(id_berita, tanggal, judul, isi, id_kategori){
		
	}

}

 ?>