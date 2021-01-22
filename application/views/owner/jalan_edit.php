<h1>Edit Jalan</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post">
    <label for="">Nama Jalan</label>
    <input type="text" name="nama_jalan" class="form-control" placeholder="Nama Jalan" value="<?= $jalan['nama_jalan']; ?>">
    <?= form_error('nama_jalan', '<small class="text-danger pl-1">','</small>'); ?>
    
    <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
</form>
</div>