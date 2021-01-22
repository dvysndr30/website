<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/'); ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/'); ?>plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Registrasi</b>(User)</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Registrasi sebagai User</p>
    <?= $this->session->flashdata('message'); ?>
    <form action="" method="post">
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
   </div>
  </div>
</body>   
