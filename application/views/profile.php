<h1>Profile</h1>
<?= $this->session->flashdata('message'); ?>
<div class="btn-group">
    <a href="<?= base_url('karyawan/profile/edit/').$user['id_user']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
    <a href="<?= base_url('karyawan/profile/changepassword/').$user['id_user']; ?>" class="btn btn-warning"><i class="fa fa-lock"></i></a>
</div>
<div class="row">

    <div class="col-lg-8">
        <table class="table tabel-hovered">
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td><?= $user['nama']; ?></td>
            </tr>
            <tr>
                <th>KTP</th>
                <td>:</td>
                <td><?= $user['ktp']; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>:</td>
                <td><?= ($user['gender'] == 'l') ? "Laki - laki" : "Perempuan"; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><?= $user['alamat']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td>:</td>
                <td><?= $user['email']; ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td>:</td>
                <td><?= ucfirst($user['username']); ?></td>
            </tr>
            <tr>
                <th>Gambar</th>
                <td>:</td>
                <td>
                    <img class="img-thumbnail" width="100px" height="100px" src="<?= base_url('assets/img/uploaded/user/').$user['gambar']; ?>" alt="">
                </td>
            </tr>
        </table>

    </div>
</div>
