<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<?php foreach($mahasiswa as $m){ ?>
		<tr>
			<td><?php echo $m->nama ?></td>
			<td><?php echo $m->alamat ?></td>
			<td><?php echo $m->Prodi ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>