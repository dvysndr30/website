<div class="wrapper">

	<header class="main-header">

		<!-- Logo -->
		<a class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>P</b>KL</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Coba</b>Uy</span>
		</a>

		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Messages: style can be found in dropdown.less-->

					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?= base_url('assets/vendor/adminlte/'); ?>dist/img/avatar2.png"
								class="user-image" alt="User Image">
							<span class="hidden-xs">Ini Sebenernya Admin</span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?= base_url('assets/vendor/adminlte/'); ?>dist/img/user2-160x160.jpg"
									class="img-circle" alt="User Image">

								<p>
									Ini Sebenernya Admin
									
								</p>
							</li>
							<!-- Menu Body -->
							
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="<?= base_url('owner/profile'); ?>" class="btn btn-default btn-flat">Profile</a>
								</div>
								<div class="pull-right">
									<a onclick="return confirm('Yakin?')" href="<?= base_url('owner/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>

		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?= base_url('assets/vendor/adminlte/'); ?>dist/img/avatar2.png" class="img-circle"
						alt="User Image">
				</div>
				<div class="pull-left info">
					<p>Ini ADMIN</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MAIN NAVIGATION</li>
				<li>
					<a href="<?= base_url('owner'); ?>">
						<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					</a>

				</li>

				<li class="treeview">
					<a href="">
						<i class="fa fa-search"></i>
						<span>Kategori Kuliner</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('owner/kategori/add'); ?>"><i class="fa fa-pencil"></i> Tambah Kategori</a></li>
						<li><a href="<?= base_url('owner/kategori'); ?>"><i class="fa fa-database"></i> Data Kategori</a></li>

					</ul>
				</li>
<!-- 
				<li class="treeview">
					<a href="">
						<i class="fa fa-road"></i>
						<span>Kategori Jalan</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('owner/jalan/add'); ?>"><i class="fa fa-pencil"></i> Tambah Jalan</a></li>
						<li><a href="<?= base_url('owner/jalan'); ?>"><i class="fa fa-database"></i> Data Jalan</a></li>

					</ul>
				</li> -->
				<li class="treeview">
					<a href="#">
						<i class="fa fa-list-alt"></i>
						<span>Menu Kuliner</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('owner/kuliner/add'); ?>"><i class="fa fa-pencil"></i> Tambah Kuliner</a></li>
						<li><a href="<?= base_url('owner/kuliner'); ?>"><i class="fa fa-database"></i> Data Kuliner</a></li>

					</ul>
				</li>
			
				<!-- <li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i>
						<span>User</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('owner/user/add'); ?>"><i class="fa fa-pencil"></i> Tambah User</a></li>
						<li><a href="<?= base_url('owner/user'); ?>"><i class="fa fa-database"></i> Data User</a></li>
					</ul>
				</li> -->

				<li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i>
						<span>Rekomendasi</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('owner/Rekomendasi'); ?>"><i class="fa fa-pencil"></i> Data Rekomendasi</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-paypal"></i>
						<span>Menu Ulasan</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('owner/ulasan'); ?>"><i class="fa fa-database"></i> Data Ulasan</a></li>

					</ul>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Dashboard
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active"><?= $this->uri->segment('2'); ?></li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<!-- Info boxes -->
		
			<!-- /.row -->

			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<div class="box-title">
								<i class="fa fa-th-large"></i>
							</div>

							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i
										class="fa fa-minus"></i>
								</button>
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool dropdown-toggle"
										data-toggle="dropdown">

								</div>
								<button type="button" class="btn btn-box-tool" data-widget="remove"><i
										class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="row">
								<div class="col-lg-12"> 