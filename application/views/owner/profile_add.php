<h1>Tambah Owner</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post" enctype="multipart/form-data">
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
	
	<button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah</button>
</form>