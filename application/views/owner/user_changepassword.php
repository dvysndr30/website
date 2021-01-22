<h1>Ganti Password User</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post">
	<input class="form-control mb-2 mt-3" type="password" name="password_lama" placeholder="Password Lama">
	<?= form_error('password_lama', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
	<input class="form-control mb-2 mt-3" type="password" name="password1" placeholder="Password Baru">
	<?= form_error('password1', '<small class="text-danger pl-1">','</small>') ?>
    <br>
	<input class="form-control mb-2 mt-3" type="password" name="password2" placeholder="Ulangi Password Baru">
	<?= form_error('password2', '<small class="text-danger pl-1">','</small>') ?>
	<br><br>
	<button type="submit" class="btn btn-info mt-4"><i class="fa fa-edit"></i> Edit</button>

</form>