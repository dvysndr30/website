<h1>Data Kuliner</h1>
<?= $this->session->flashdata('message'); ?>

<div class="table-responsive">
	<table class="table table-hover">
        <tr>
            <th>No</th>
            <th>ID Kuliner</th>
            <th>Jenis Kategori</th>
            <th>Nama Kuliner</th>
            <th>Alamat</th>
            <th>Embed</th>
            <th>Status Kepemilikan</th>
            <th>Nomor</th>
            <th>Status Restoran</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>Menu Resto</th>
            <th><i class="fa fa-cogs"></i></th>
        </tr>
        <?php
            $no = 1;
            foreach($kuliner as $kul):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $kul['id_kuliner']; ?></td>
            <td><?= ucfirst($kul['nama_kategori']); ?></td>
            <td><?= $kul['nama_kuliner'] ?></td>
            <td><?= $kul['alamat'] ?></td>
            <td>
                <a href="<?= $kul['embed'] ?>" target="_blank"><?= substr($kul['embed'],0,20); ?>...</a>
                
            </td>
            <td><?= ucfirst($kul['status']); ?></td>
            <td><?= $kul['nomor']; ?></td>
            <td><?= ucfirst($kul['restoran']); ?></td>
            <td><?= $kul['deskripsi']; ?></td>
            <td>
                <img width="100px" height="100px" class="img-fluid" src="<?= base_url('assets/images/uploaded/kuliner/').$kul['gambar']; ?>" alt="">
            </td>
            <td><?= ($kul ['keterangan'] == 'belum_ambil') ? "<span class='badge bg-red'>Belum Ambil</span>" : "<span class='badge bg-green'>Sudah Ambil</span>"; ?>
            </td>
            <td>
                <img width="100px" height="100px" class="img-fluid" src="<?= base_url('assets/images/uploaded/kuliner/').$kul['menu_restoran']; ?>" alt="">
            </td>
            <td>
                <div class="btn-group-vertical">
                    <a onclick="return confirm('Yakin?')" href="<?= base_url('owner/ambil/').$kul['id_kuliner']; ?>" class="btn btn-primary"><i class="fa fa-money"></i></a>
                    <a onclick="return confirm('Yakin?')" href="<?= base_url('owner/kuliner/del/').$kul['id_kuliner']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="<?= base_url('owner/kuliner/edit/').$kul['id_kuliner']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php if(empty($kategori)) : ?>
            <tr>
                <td colspan="11" align="center">Data tidak ditemukan</td>
            </tr>
        <?php endif; ?>
    </table>
</div>
</div>