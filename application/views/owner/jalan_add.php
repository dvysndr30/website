<h1>Tambah Jalan</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post">
    <input type="text" name="nama_jalan" class="form-control" placeholder="Nama Jalan">
    <?= form_error('nama_jalan', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    
    <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah</button>
</form>
</div>