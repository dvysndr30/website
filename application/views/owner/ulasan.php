<h1>Ulasan</h1>
<?= $this->session->flashdata('message'); ?>

<form action="<?= base_url('owner/ulasan/print'); ?>" target="_blank" method="post">
    <div class="row">
        <div class="col-lg-3">
            <select name="tgl" class="form-control">
                <option value="">Pilih Tanggal</option>
                <?php foreach($tgl as $pjl): ?>
                    <option value="<?= $pjl['tgl'] ?>"><?= $pjl['tgl']; ?></option>
                <?php endforeach; ?>
            </select>
        
        </div>
        <div class="col-lg-5">
        
            <button type="submit" class="btn btn-default"> <i class="fa fa-print"></i> Cetak</button>
        </div>
    </div>
</form>
<br>

<div class="table-responsive">
	<table class="table table-hover">
        <tr>
            <th>ID Ulasan</th>
            <th>Nama</th>
            <th>Ulasan</th>
            <th>Rating</th>
            <th>Waktu</th>
            <th><i class="fa fa-cogs"></i></th>
        </tr>
        <?php
            $no = 1;
            foreach($ulasan as $pj):
        ?>
        <tr>
            <td><?= $pj['id_ulasan']; ?></td>
            <td><?= $pj['nama']; ?></td>
            <td><?= $pj['ulasan']; ?></td>
            <td><?= $pj['rating']; ?></td>
            <td><?= $pj['waktu']; ?></td>
            <td>
                <div class="btn-group">
                    <a onclick="return confirm('Yakin?')" href="<?= base_url('owner/ulasan/del/').$pj['id_ulasan']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="<?= base_url('owner/ulasan/edit/').$pj['id_ulasan']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                </div>
            </td>
        </tr>
        
        <?php endforeach; ?>
        <?php if(empty($ulasan)) : ?>
            <tr>
                <td colspan="8" align="center">Data tidak ditemukan</td>
            </tr>
        <?php endif; ?>
    </table>
</div>
</div>