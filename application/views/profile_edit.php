<h1>Edit User</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post" enctype="multipart/form-data">
	<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $user['nama']; ?>">
	<?= form_error('nama', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<input type="text" name="ktp" class="form-control" placeholder="KTP" value="<?= $user['ktp']; ?>">
	<?= form_error('ktp', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<select class="form-control mb-2" name="gender">
		<option value="">Pilih Gender</option>
        <?php foreach($gender as $gd): ?>
            <?php if($gd == $user['gender']) : ?>
                <option value="<?= $gd ?>" selected><?= ($gd == 'l') ? "Laki - laki" : "Perempuan";?></option>
            <?php else: ?>
                <option value="<?= $gd ?>"><?= ($gd == 'l') ? "Laki - laki" : "Perempuan";?></option>
            <?php endif; ?>
		<?php endforeach; ?>
	</select>
	<?= form_error('gender', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<textarea name="alamat" class="form-control" placeholder="Alamat" cols="30" rows="10"><?= $user['alamat']; ?></textarea>
	<?= form_error('alamat', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<input type="email" name="email" class="form-control" placeholder="Email" value="<?= $user['email']; ?>">
	<?= form_error('email', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	<input type="text" name="username" class="form-control" placeholder="Username" value="<?= $user['username']; ?>">
	<?= form_error('username', '<small class="text-danger pl-1">','</small>'); ?>
	<br>
	

	<label>Gambar</label>
	<input type="file" name="gambar" class="form-control">
	<br>
	<br>
	<button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
</form>