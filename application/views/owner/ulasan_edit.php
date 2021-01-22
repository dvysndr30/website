<h1>Edit Ulasan</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post" enctype="multipart/form-data">

    <label>Pilih Tanggal</label>
    <input type="date" class="form-control" name="tgl" placeholder="Tanggal" value="<?= $ulasan['tgl']; ?>">
    <?= form_error('tgl', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <label for="">Ulasan</label>
    <textarea name="ulasan" class="form-control" placeholder="Ulasan" ><?= $ulasan['ulasan']; ?></textarea>
    <?= form_error('ulasan', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <br><br>
    <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
</form>
</div>