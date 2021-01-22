<h1>Tambah User</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post" enctype="multipart/form-data">
	<input type="text" name="nama" class="form-control" placeholder="Nama">
	<?= form_error('nama', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<select class="form-control mb-2" name="gender">
		<option value="">Pilih Gender</option>
		<?php foreach($gender as $gd): ?>
		<option value="<?= $gd ?>"><?= ($gd == 'l') ? "Laki - laki" : "Perempuan";?></option>
		<?php endforeach; ?>
	</select>
	<?= form_error('gender', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<textarea name="alamat" class="form-control" placeholder="Alamat" cols="30" rows="10"></textarea>
	<?= form_error('alamat', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<input type="email" name="email" class="form-control" placeholder="Email">
	<?= form_error('email', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<input type="text" name="username" class="form-control" placeholder="Username">
	<?= form_error('username', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<div class="row">
		<div class="col-lg-6">
            <input class="form-control mb-2" type="password" name="password1" placeholder="Password">
            <?= form_error('password1', '<small class="text-danger pl-1">','</small>'); ?>
		</div>
		<div class="col-lg-6">
            <input class="form-control mb-2" type="password" name="password2" placeholder="Ulangi Password">
            <?= form_error('password2', '<small class="text-danger pl-1">','</small>'); ?>
		</div>
    </div>
	<br>
	<label>Gambar</label>
	<input type="file" name="gambar" class="form-control">
	<br>
	<br><br>
	<button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah</button>
</form>