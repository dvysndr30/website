<h1>Kategori Kuliner</h1>
<?= $this->session->flashdata('message'); ?>

<div class="table-responsive">

	<table class="table table-hover">
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nama Kategori</th>
			<th><i class="fa fa-cogs"></i></th>
		</tr>
		<?php
            $no = 1;
            foreach($kategori as $tk) :
        ?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $tk['id_kategori']; ?></td>
			<td><?= $tk['nama_kategori']; ?></td>
			<td>
				<div class="btn-group">
					<a onclick="return confirm('Yakin?')" href="<?= base_url('owner/kategori/del/').$tk['id_kategori']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
					<a href="<?= base_url('owner/kategori/edit/').$tk['id_kategori']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
				</div>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php if(empty($kategori)) : ?>
		<tr>
			<td colspan="5" align="center">Data Tidak Ditemukan</td>
		</tr>
		<?php endif; ?>
	</table>
</div>
</div>
