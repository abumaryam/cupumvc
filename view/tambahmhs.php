<h1>Penambahan Mahasiswa Baru</h1>

<form method="POST" action="index.php?r=site/tambahmahasiswa">
<table cellspacing="50" cellpadding="50" border="0">
	<tr>
		<td><label for="nama">Nama</label></td>
		<td>: <input type="text" name="nama" id="nama"></td>
	</tr>
	<tr>
		<td><label for="nim">NIM</label></td>
		<td>: <input type="text" name="nim" id="nim"></td>
	</tr>
	<tr>
		<td><label for="alamat">Alamat</label></td>
		<td>: 
			<textarea name="alamat" id="alamat"></textarea>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Daftarkan"></td>
	</tr>
</table>
</form>