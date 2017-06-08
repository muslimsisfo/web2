<?php 
$id = $_GET['id'];
	
?>

<?php



include_once '../config/database.php';

 try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}

$judul = $_POST['judul'];
$isi   = $_POST['isi'];
$kategori = $_POST['kategori'];
$sql = "UPDATE berita SET judul='$judul', isi='$isi', kategori_id='$kategori' WHERE id_berita='$id'";

echo $sql;

try {
	$stmt = $db->prepare($sql);
	$stmt->execute();
	echo "Berita berhasil diubah";
}

catch(PDOException $e) {
	echo "Berita gagal diubah";
	echo $e->getMessage(); 
}


 ?>

