<h1>User</h1>
<?= $this->session->flashdata('message'); ?>

<div class="table-responsive">
	<table class="table table-hover">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Username</th>
            <th>Gambar</th>
            <th><i class="fa fa-cogs"></i></th>
        </tr>
        <?php
            $no = 1;
            foreach($user as $us):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $us['id_user']; ?></td>
            <td><?= $us['nama']; ?></td>
            <td><?= ($us['gender'] == 'l') ? "Laki - laki" : "Perempuan"; ?></td>
            <td><?= $us['alamat']; ?></td>
            <td><?= $us['email']; ?></td>
            <td><?= $us['username']; ?></td>
            <td>
                <img width="80px" height="100px" src="<?= base_url('assets/images/uploaded/user/').$us['gambar']; ?>" alt="">
            </td>
            
            <td>
                <div class="btn-group">
                    <a onclick="return confirm('Yakin?')" href="<?= base_url('owner/user/del/').$us['id_user']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="<?= base_url('owner/user/edit/').$us['id_user']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    <a href="<?= base_url('owner/user/changepassword/').$us['id_user']; ?>" class="btn btn-warning"><i class="fa fa-lock"></i></a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php if(empty($user)) : ?>
            <tr>
                <td colspan="12" align="center">Data tidak ditemukan</td>
            </tr>
        <?php endif; ?>
    </table>
</div>
</div>