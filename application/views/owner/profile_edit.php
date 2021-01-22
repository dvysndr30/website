<h1>Edit Owner</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post" enctype="multipart/form-data">
	<input type="text" name="username" class="form-control" placeholder="Username" value="<?= $owner['username']; ?>">
	<?= form_error('username', '<small class="text-danger pl-1">','</small>'); ?>
    <br>	
	<button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Edit</button>
</form>