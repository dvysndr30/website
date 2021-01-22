<h1>Edit Kuliner</h1>
<?= $this->session->flashdata('message'); ?>
<form action="" method="post" enctype="multipart/form-data">
    <label>Jenis Kategori</label>
    <input type="text" name="nama_kategori" value="<?= $kuliner['nama_kategori']?>" hidden="">
    <input type="text" name="id_kuliner" value="<?= $this->uri->segment(4);?>" hidden="">
    <label>Nama Kuliner</label>
    <input type="text" name="nama_kuliner" class="form-control" placeholder="Nama Kuliner" value="<?= $kuliner['nama_kuliner']; ?>">
    <?= form_error('nama_kuliner', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" placeholder="Alamat" ><?= $kuliner['alamat']; ?></textarea>
    <?= form_error('alamat', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <label>Embed</label>
    <div class="row">
        <div class="col-lg-10">
        
            <textarea type="text-danger" name="embed" class="form-control" placeholder="Embed"><?= $kuliner['embed']; ?></textarea>
            <br>
             <p class="text-danger">*) Pilih URL Map</p>
             <br>
            <?= form_error('embed', '<small class="text-danger pl-1">','</small>'); ?>
        </div>
        <div class="col-lg-2">
        
            
             <a href="https://www.google.com/maps/" target="_blank" class="btn btn-success"><i class="fa fa-map"></i></a>
            
             
        </div>
    </div>
    <label>Status Kepemilikan</label>
    <select name="status" class="form-control">
        <option value="">Status Kepemilikan</option>
        <?php foreach($status as $st): ?>
            <?php if($st == $kuliner['status']) : ?>
                <option value="<?= $st ?>" selected><?= ucfirst($st); ?></option>
            <?php else: ?>
                <option value="<?= $st ?>"><?= ucfirst($st); ?></option>

            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <label>Status Restoran</label>
    <select name="restoran" class="form-control">
        <option value="">Status Restoran</option>
        <?php foreach($restoran as $r): ?>
            <?php if($r == $kuliner['restoran']) : ?>
                <option value="<?= $r ?>" selected><?= ucfirst($r); ?></option>
                <?php else: ?>
                <option value="<?= $r ?>"><?= ucfirst($r); ?></option>

            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <?= form_error('restoran', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <br>
    <label>No Telp Restoran</label>
    <input type="number" name="nomor" class="form-control" placeholder="nomor" value="<?= $kuliner['nomor']; ?>">
    <?= form_error('nomor', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" ><?= $kuliner['deskripsi']; ?></textarea>
    <?= form_error('deskripsi', '<small class="text-danger pl-1">','</small>'); ?>
    <br>
    <label>Gambar</label>
        <div>
            <img width="100px" height="100px" class="img-fluid" src="<?= base_url('assets/images/uploaded/kuliner/').$kuliner['gambar']; ?>" alt="">
        </div>
    <input type="file" name="gambar" class="img-fluid" placeholder="gambar" value="<?= $kuliner['gambar']; ?>">
   
    <label>Keterangan</label>
    <select name="keterangan" class="form-control">
        <option value="">Keterangan</option>
        <?php foreach($keterangan as $ket): ?>
            <?php if($kuliner['keterangan'] == $ket): ?>
                <option value="<?= $ket ?>" selected><?= ucfirst($ket); ?></option>
            <?php else: ?>
                <option value="<?= $ket ?>"><?= ucfirst($ket); ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <br>
    <label>Menu Resto</label>
        <div>
            <img width="100px" height="100px" class="img-fluid" src="<?= base_url('assets/images/uploaded/kuliner/').$kuliner['menu_restoran']; ?>" alt="">
        </div>
    <input type="file" name="menu_restoran">
    <br><br>
    <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
</form>
</div>