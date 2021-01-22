<h1>Tambah Kategori</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post">
    <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori">
    <?= form_error('nama_kategori', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    
    <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah</button>
</form>
</div>