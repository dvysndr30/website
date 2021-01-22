<h1>Daftar Jalan</h1>
<?= $this->session->flashdata('message'); ?>

<div class="table-responsive">

	<table class="table table-hover">
		<tr>
			<th>No</th>
			<th>ID Jalan</th>
			<th>Nama Jalan</th>
			<th><i class="fa fa-cogs"></i></th>
		</tr>
		<?php
            $no = 1;
            foreach($jalan as $jln) :
        ?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $jln['id_jalan']; ?></td>
			<td><?= $jln['nama_jalan']; ?></td>
			<td>
				<div class="btn-group">
					<a onclick="return confirm('Yakin?')" href="<?= base_url('owner/jalan/del/').$jln['id_jalan']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
					<a href="<?= base_url('owner/jalan/edit/').$jln['id_jalan']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
				</div>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php if(empty($jalan)) : ?>
		<tr>
			<td colspan="5" align="center">Data Tidak Ditemukan</td>
		</tr>
		<?php endif; ?>
	</table>
</div>
</div>