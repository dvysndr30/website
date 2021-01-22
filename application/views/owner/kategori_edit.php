<h1>Edit Kategori</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post">
    <label for="">Nama Kategori</label>
    <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="<?= $kategori['nama_kategori']; ?>">
    <?= form_error('nama_kategori', '<small class="text-danger pl-1">','</small>'); ?>
    
    <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
</form>
</div>