<?php

$id = $_GET['id'];
echo $id;
?>
<?php

$host ='localhost';

$dbname = 'muslim_sisfonews';
$username = 'root';
$password = 'sisfo';
$db = '';



try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}

try {
	$stmt = $db->prepare("SELECT * FROM berita WHERE id_berita=:id");
	$stmt->bindparam(":id",$id);
	$stmt->execute();
	$data = $stmt->fetch();
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}

try {
	$stmt2 = $db->prepare("SELECT * FROM kategori");
	
	$stmt2->execute();
	$data2 = $stmt2->fetchall();
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}



?>


<form action=" ubah_berita.php?id=1" method="POST"><br>
<label for="judul">judul<br></label> 
<input type="text" name="judul" value="<?php echo $data['judul']; ?>"> <br>



<label for="isi">isi </label><br>

<textarea name="isi" value="1" cols="50" rows="20"> 
<?php echo $data['isi']; ?>
</textarea><br>



<label for="kategori">kategori</label> <br>

 <select name="kategori" id="kategori">
   <?php foreach ($data2 as $kat): ?>
  	<option value="<?php echo $kat['id_kategori'] ?>"
	<?php  

  	  if($kat['id_kategori']==$data['kategori_id'])echo "selected";

  	 ?> 
  	 ><?php echo $kat ['nama_kategori'] ?></option>
  <?php endforeach ?>
 </select><br>

  <input type="submit" nama="simpan" value="simpan" >


</form>


