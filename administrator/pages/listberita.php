<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Judul</th>
			<th>Isi</th>
		</tr>
	</thead>
	<tbody>
 <?php foreach ($isi_berita as $ib) { ?>
		<tr>
			<td>1</td>
			<td><?= $ib['judul'] ?></td>
			<td><?= $ib['isi'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
