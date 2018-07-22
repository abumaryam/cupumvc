<h1>Daftar Nama Mahasiswa</h1>
<a href="index.php?r=site/tambahmahasiswa" class="btn btn-primary">Tambah Baru</a>
<table class="table table-hover">
	<tr>
		<th>Nama</th>
		<th>Aksi</th>
	</tr>
<?php foreach ($data_mhs as $dm): ?>
	<tr>
		<td><?php echo $dm['nama'] ?></td>
		<td><a href="index.php?r=site/mahasiswadetail&id=<?php echo $dm['id_mahasiswa'] ?>">Detail</a></td>
	</tr>
<?php endforeach ?>
</table>