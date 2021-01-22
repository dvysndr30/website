<h1>Tambah Kuliner</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post" enctype="multipart/form-data">
    <select name="nama_kategori" class="form-control">
        <option value="">Jenis Kategori</option>
        <?php foreach($kategori as $k): ?>
            <option value="<?= $k->id_kategori ?>"><?= ucfirst($k->nama_kategori); ?></option>
        <?php endforeach; ?>
    </select>
    <?= form_error('id_kategori', '<small class="text-danger pl-1">','</small>'); ?>

    <br>
    <input type="text" name="nama_kuliner" class="form-control" placeholder="Nama Kuliner">
    <?= form_error('nama_kuliner', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <textarea type="text-danger" name="alamat" class="form-control" placeholder="Alamat"></textarea>
    <?= form_error('alamat', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <div class="row">
        <div class="col-lg-10">
        
            <textarea type="text-danger" name="embed" class="form-control" placeholder="Embed"></textarea>
            <br>
             <p class="text-danger">*) Pilih URL Map</p>
             <br>
            <?= form_error('embed', '<small class="text-danger pl-1">','</small>'); ?>
        </div>
        <div class="col-lg-2">
        
            
             <a href="https://www.google.com/maps/" target="_blank" class="btn btn-success"><i class="fa fa-map"></i></a>
            
             
        </div>
    </div>
    <br>
    <select name="status" class="form-control">
        <option value="">Status Kepemilikan</option>
        <?php foreach($status as $st): ?>
            <option value="<?= $st ?>"><?= ucfirst($st); ?></option>
        <?php endforeach; ?>
    </select>
    <?= form_error('status', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <input type="number" name="nomor" class="form-control" placeholder="Nomor Telepon Restoran">
    <?= form_error('nomor', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <select name="restoran" class="form-control">
        <option value="">Status Restoran</option>
        <?php foreach($restoran as $r): ?>
            <option value="<?= $r ?>"><?= ucfirst($r); ?></option>
        <?php endforeach; ?>
    </select>
    <?= form_error('restoran', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <textarea type="text" name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
    <?= form_error('deskripsi', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <label>Gambar</label>
    <input type="file" name="gambar" class="form-control">
    <br>
    <select name="keterangan" class="form-control">
        <option value="">Keterangan</option>
        <?php foreach($keterangan as $ket): ?>
            <option value="<?= $ket ?>"><?= ucfirst($ket); ?></option>
        <?php endforeach; ?>
    </select>
    <?= form_error('keterangan', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <label>Menu Restoran</label>
    <input type="file" name="menu_restoran" class="form-control">
    <br><br>
    <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah</button>
</form>