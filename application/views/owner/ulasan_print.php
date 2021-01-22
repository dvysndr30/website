<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cetak Ulasan</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/print.css'); ?>">
</head>

<body onload="window.print()">
	<h1>Cetak Ulasan</h1>
	<p>Dicetak tanggal : <?= date('d-m-Y'); ?></p>
	<table border="2px" width="100%">
		<tr class="active">
			<th>No</th>
			<th>ID Ulasan</th>
			<th>ID Kuliner</th>
			<th>Tgl</th>
			<th>Ulasan</th>
		</tr>
		<?php
                $no = 1;
                foreach($ulasan as $pj):
            ?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $pj['id_ulasan']; ?></td>
			<td><?= $pj['id_kuliner']; ?></td>
			<td><?= $pj['tgl']; ?></td>
			<td><?= $pj['ulasan']; ?></td>
		</tr>

		<?php endforeach; ?>
	</table>
</body>

</html>