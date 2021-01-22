<h1>Profile</h1>

<?= $this->session->flashdata('message'); ?>
<a href="<?= base_url('owner/profile/add'); ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
<br><br>
<div class="table-responsive">

	<table class="table table-hover">
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Username</th>
			<th><i class="fa fa-cogs"></i></th>
		</tr>
        <?php
            $no = 1;
            foreach($owner as $ow):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $ow['id_owner']; ?></td>
            <td><?= $ow['username']; ?></td>
            <td>
                <a onclick="return confirm('Yakin?')" href="<?= base_url('owner/profile/del/').$ow['id_owner']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                <a href="<?= base_url('owner/profile/edit/').$ow['id_owner']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                <a href="<?= base_url('owner/profile/changepassword/').$ow['id_owner']; ?>" class="btn btn-warning"><i class="fa fa-lock"></i></a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php if(empty($owner)) : ?>
            <tr>
                <td colspan="6" align="center">Data tidak ditemukan</td>
            </tr>
        <?php endif; ?>
    </table>
</div>