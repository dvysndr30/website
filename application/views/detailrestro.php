<div class="blog-section">
		<div class="container">
		  <br><br>
		  <center><h1 class=""> <?php echo ucfirst($resto['nama_kuliner']); ?></h1></center>
		  <br>
		   <div class="blog-top">
			   <div class="blog-single text-center">
					<div class="single-img">
						<img src="./assets/images/uploaded/kuliner/<?php echo $resto['gambar'] ?>" alt="" style="width: 50% !important; border-radius: 10px;">		
					</div>
				</div>
				<br>
				<div class="col-md-10 col-md-offset-1" style="padding-bottom: 50px;">
					<h3 style="font-size:30 !important; font-weight: 800;" >Data Rekomendasi</h3>
					<br>
					<div class="text-counter" style="text-align:justify">
						<table width="100%" class="table">
							<tr>
								<th>Alamat</th>
								<td>:</td>
								<td><?= $resto['alamat']; ?></td>
							</tr>
							<tr>
								<th>Telp</th>
								<td>:</td>
								<td><?= $resto['nomor']; ?></td>
							</tr>
							<tr>
								<th>Status</th>
								<td>:</td>
								<td><?= ucfirst($resto['status']); ?></td>
							</tr>
						</table>
						
					</div>
				</div>
			</div>
		</div>
</div>
</div>
</div>
</div>