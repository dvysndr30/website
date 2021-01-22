<div class="team-section" id="team">
	<br><br><br>
	<div class="container">
		<h3 class="tittle">Rekomendasikan Restoranmu</h3>
		<br><br>
		<div class="row">
			<div class="col-lg-7">
            <?= $this->session->flashdata('message'); ?>
         
				<form action="<?=  base_url('rekomendasi') ?>" method="post" enctype="multipart/form-data">
					<table width="100%" class="table">
						<tr>
							<th>Nama Kuliner / Nama Restoran</th>
							<td colspan="3">
								<input type="text" class="form-control" name="nama_kuliner" required>
							</td>
						</tr>
					
						<tr>
						<th>Jenis Kategori</th>
                            <td colspan="3">
                                <select name="nama_kategori" class="form-control">
								<option value="">Jenis Kategori</option>
									<?php foreach($kategori as $k): ?>
										<option value="<?= $k->id_kategori ?>"><?= ucfirst($k->nama_kategori); ?></option>
									<?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
						<tr>
							<th>Alamat</th>
							<td colspan="3">
								<textarea name="alamat" class="form-control" required></textarea>
							</td>
						</tr>
						<tr>
							<th>Embed Google Maps</th>
							<td>
								<textarea name="embed" class="form-control" required></textarea>
							</td>
							<td>
								<a href="https://www.google.com/maps/" target="_blank" class="btn btn-success"><i class="fa fa-map"></i></a>
							</td>
						</tr>
						<tr>
							<th>Telp Restoran</th>
							<td colspan="2">
								<input type="text" class="form-control" name="nomor" required>
							</td>
						</tr>
						<tr>
							<th>Deskripsi Restoran</th>
							<td colspan="3">
								<textarea name="deskripsi" class="form-control" required></textarea>
								
							</td>
						</tr>
						<tr>
							<th colspan="2">Apakah anda pemilik restoran ?</th>
						</tr>
						<tr>
							<td align="justify"> 
								<input type="radio" name="status" id="radio-1" value="pemilik">
								<label for="track">Saya pemilik</label>
								<br>
								<input type="radio" name="status" id="radio-2" value="bukanpemilik">
								<label for="event">Bukan pemilik</label>
							</td>
						</tr>
					
						<tr>
							<th>Status Restoran ?</th>
						</tr>
						<tr>
						
							<td colspan="3" align="justify">
								<input type="radio" name="restoran" id="radio-1" value="buka">
								<label for="track">Buka</label>
								<br>
                                <input type="radio" name="restoran" id="radio-2" value="akansegerabuka">
                                <label for="event">Akan segera buka</label><br>
							</td>
						</tr>
						
                        <tr>
                            <th>Upload foto restoranmu</th>
                            <td colspan="3">
                            
                                <input type="file" class="form-control" name="gambar">
                            </td>
						</tr>
						<tr>
							<td align="left" colspan="3">
								<p class="text-danger">*) Maksimal ukuran foto 1 MB</p>
							</td>
						</tr>
                      	<tr>
                      		<th>Menu Restoran</th>
                      		<td colspan="3">
                      			<input type="file" class="form-control" name="menu_restoran">
                      		</td>
                      	</tr>
						  <tr>
							<td align="left" colspan="3">
								<p class="text-danger">*) Maksimal ukuran foto 1 MB</p>
							</td>
						</tr>
                        <tr>
                            <td colspan="3">
                                <button type="submit" class="btn btn-success" class="fa fa-pencil">Submit</button>
                            </td>
                        </tr>
					</table>
				</form>
			</div>
			<div class="col-lg-5">
				<h1>Cara Kerja :</h1>
				<br>
				<p style="text-align:justify">Jika Anda adalah pemilik restoran, atau jika Anda adalah pengguna yang
					sudah menemukan tempat yang tidak
					terdaftar di Cilacap Food, beritahu kami menggunakan formulir ini.
					Setelah Anda mengirimkan informasi kepada kami, tim konten mengagumkan kami akan memverifikasi
					itu.
					Untuk membantu mempercepat proses, berikan nomor kontak atau alamat email.
					Itu dia! Setelah diverifikasi daftar akan mulai muncul di Cilacap food</p>
			</div>
		</div>
	</div>

</div>