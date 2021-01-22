
	<div class="blog-section">
		<div class="container">
			<br>
			<br>
			<h3 class="single"><?php echo $datakul->nama_kuliner; ?></h3>
			<div class="blog-top">
				<div class="blog-single">
					<div class="single-img">
						<a href="#">
							<img style="width:600px !important; display:block; margin:auto;" src="<?= base_url('assets/images/uploaded/kuliner/').$datakul->gambar; ?>" alt="">
						</a>

						<h3 class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">Lokasi</h3>
						<p Class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">Rate : <?php echo round($rate['rating'],1);?></p>
						<p Class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s"><?php echo $datakul->alamat;?></p>
            <a href="<?= $datakul->embed; ?>" target="_blank" class="btn btn-success wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s"><i class="fa fa-map"></i></a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s" data-toggle="modal" data-target="#myModal">
              <i class="fa fa-book"></i>
            </button>
					</div>

				</div>
				<br />
				<h2 align="center"><a href="#">Silahkan Tinggalkan Komentar</a></h2>
				<div class="container">
					<form action="<?= base_url('addComment') ?>" method="POST" id="comment_form">
            <input type="hidden" name="id_kuliner" value="<?= $datakul->id_kuliner; ?>">
						<div class="form-group">
							<input type="text" name="nama" id="comment_name" class="form-control" placeholder="Enter Name" />
						</div>
						<div class="form-group">
							<textarea name="ulasan" id="comment_content" class="form-control" placeholder="Enter Comment"
								rows="5"></textarea>
						</div>
            
            <div class="form-group">
            <label>Rate this product</label>
            <input type="text" id="rate" name="rating" class="kv-fa rating-loading" value="0" data-size="sm" title="">
            </div>
						<div class="form-group">
							<input type="submit" name="submit" id="submit" class="btn btn-info" required="required" value="Kirim" />
						</div>
					</form>
					<span id="comment_message"></span>
					<br />
          <div id="display_comment"></div>
				</div>

			</div>
		</div>
	</div>
	</div>
  <div class="container">
    <h2>Komentar <?= $jmlCom; ?></h2>
    <?php foreach ($comment as $com) : ?>
    <div class="media-body">
            <div class="well well-lg">
                <h2 class="media-heading text-uppercase reviews"><?= $com['nama']; ?></h2>
                    <ul class="media-date text-uppercase reviews list-inline">
                          <li class="dd"><?= $com['hari'].' '.$com['bulan'].' '.$com['tahun']; ?> | <?= $com['jam'].':'.$com['menit']; ?></li>
                     </ul>
                     <p class="media-comment"><?= $com['ulasan']; ?></p>
                              
            </div>              
    </div>
    <?php endforeach; ?>
  </div>
<br><br>
<!-- Modal -->
<div style="margin-top: 8em !important;" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Menu Restoran</h1>
      </div>
      <div class="modal-body">
        <img src="<?= base_url('assets/images/uploaded/kuliner/').$datakul->menu_restoran; ?>" class="img-responsive" alt="Responsive image">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});
    $('.kv-fa').rating({
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-star"></i>',
            emptyStar: '<i class="fa fa-star-o"></i>'
            
        });
    
    // $('#ratingForm').on('submit', function(){
    //   let id_kuliner = $("[name='id_kuliner']").val();
    //   let rating = $("[name='rating']").val();

    //   $.ajax({
    //       type : 'post',
    //       data : 'id_kuliner='+id_kuliner+'&rating='+rating,
    //       url : '',
    //       dataType : 'json',
    //       success : function(hasil) {
    //         alert(hasil);
    //       }
    //   });
    // });
  
  //       // $('.filled-stars').click(function(value) {
  //       //     console.log(value);
  //       // });
   
  // });
	/*$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 */
});
</script>