<?php 
	
	$resep = array (
					array("buah"=>"pepaya","banyak"=>"1","tambahan"=>"kecap"),
					array("buah"=>"mangga","banyak"=>"3","tambahan"=>"susu"),
					array("buah"=>"pisang","banyak"=>"5","tambahan"=>"cappucin")
		);

?>



<!DOCTYPE html>
<html>
<head>
	<title>belajar echo</title>
</head>
<body>
	<?php

	foreach ($resep as $r ){ ?>
	 	<h1>cara membuat jus <?php echo $r['buah']?></h1>

	<p>	campurkan buah <?php echo $r['buah']?> sebanyak <?php echo $r['banyak']?>buah ditambahkan dengan <?php echo $r['tambahan']?> untuk memberi rasa.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quidem perspiciatis, unde veritatis id excepturi qui vero ex reiciendis, quibusdam minus non, natus maxime doloribus expedita odit ea quis repellat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero dolorem blanditiis natus temporibus commodi recusandae quod tenetur, dolorum, sit, illo quidem fugiat. Minima perferendis impedit culpa excepturi eaque enim maiores.

	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus esse voluptates excepturi quasi eveniet quas dignissimos odio temporibus? Dicta quaerat placeat, quam obcaecati aliquid dolorem perspiciatis ea at totam libero?
	</p>
	<?php
	 } ?>
	



	

</body>
</html>