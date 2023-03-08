<h5>Halaman Tambah Petugas.</h5>
<a href="?url=petugas" class="btn btn-outline-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-petugas">
	<div class="from-group mb-2">
		<label>Username</label>
		<input type="text" name="username" class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Password</label>
		<input type="text" name="password" class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Nama Petugas</label>
		<input type="text" name="nama_petugas" class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<select name="level" class="form-control" required>
			<option value=""> Pilih Level Petugas </option>
			<option value="admin"> Admin </option>
			<option value="petugas"> Petugas </option>

		</select>
	</div>
	<div class="from-group">
		<button type="submit" class="btn btn-success"> SIMPAN </button>
		<button type="reset" class="btn btn-warning"> KOSONGKAN </button>
	</div>
</form>			