<?php
//index.php

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Cilacap Food</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/stylekat.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="assets/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />  
<link rel="stylesheet" href="assets/css/swipebox.css">
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


  <link href='//fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
<script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
      });

      function showListkuliner(id_kategori)
      {
        var bodyGridKul= '';
        $.ajax({
          url: 'Home/getListKategori/'+id_kategori,
          async:true,
          dataType:'JSON',
          type:'GET',
          success:function(food)
          {
            for (var i =0 ; i < food.length; i++) {
              bodyGridKul += '<div class="makan cemilan menu-restaurant" class="minum menu-restaurant">'+
                                '<span class="clearfix">'+
                                  '<a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">'+food[i].nama_kuliner+'</a>'+
                                  '<span style="left: 166px; right: 44px;" class="menu-line"></span>'+
                                  '<span class="menu-price"></span>'+
                                '</span>'+
                                '<span class="menu-subtitle">'+food[i].alamat+'</span>'+
                              '</div>';             

            }
            $('#bodyGridKul').html(bodyGridKul);
          }

        })
      }


</script>
  <script src="assets/js/jquery.swipebox.min.js"></script> 
      <script type="text/javascript">
      jQuery(function($) {
        $(".swipebox").swipebox();
      });
  </script>

<link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="assets/js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
<style>
body { 
  background: #FFFFFF url("img_tree.gif") no-repeat fixed center; 
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</style>

</head>

<body>     
    <!--banner Slider starts Here-->
      <script src="assets/js/responsiveslides.min.js"></script>
        <script>
          // You can also use "$(window).load(function() {"
          $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
              auto: true,
              pager:true,
              nav:false,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
            });
          });
        </script>I
      </div>
    </div>
    </li>
    </div>
    
    <div class="gallery" id="gallery">
      <div class="container">
        <h3 class="tittle">Cari Tahu Yuk !!</h3>
          <div class="arrows-serve"><img src="<?= base_url('assets/') ?>images/border.png" alt="border"></div>
            <div class="gallery-grids">
              <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".2s">
                <a href="assets/images/Lupis.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/Lupis.jpg" width="100px" />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Lupis</h4>
                        <span class="separator"></span>
                        <p>Lupis merupakan makanan khas Indonesia terutama area Jawa yang dibungkus dengan daun pisang.</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInRight animated" data-wow-delay=".2s">
                <a href="assets/images/Lanthing.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/Lanthing.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Lanthing</h4>
                        <span class="separator"></span>
                        <p>Lanthing merupakan makanan tradisional yang terbuat dari singkong</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>              
              <div class="col-md-4 baner-top wow fadeInRight animated" data-wow-delay=".5s">
                <a href="assets/images/klepon.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/klepon.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Klepon</h4>
                        <span class="separator"></span>
                        <p>Klepon adalah makanan tradisional yang terbuat dari tepung ketan berbentuk bulat dan berisi gula merah serta biasanya bagian luarnya ditaburi parutan kelapa.</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInRight animated" data-wow-delay=".5s">
                <a href="assets/images/yu.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/yu.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Yutuk Goreng</h4>
                        <span class="separator"></span>
                        <p>Yutuk Goreng merupakan jenis makanan yang biasa di jual di pesisir pantai. Yutuk atau yang sering disebut undur-undur.</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="assets/images/Gembus.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/Gembus.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Gembus</h4>
                        <span class="separator"></span>
                        <p>Gembus merupakan salah satu jenis makanan yang terbuat dari singkong</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
               <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="assets/images/mendoan.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/mendoan.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Mendoan</h4>
                        <span class="separator"></span>
                        <p>Mendoan selain menjadi makanan khas dari Banyumas, juga menjadi salah satu makanan favorit di Cilacap. Selain bisa dimakan dengan cabe rawit, mendoan juga paling enak dimakan dengan yang terkasih</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInRight animated" data-wow-delay=".5s">
                <a href="assets/images/tahu.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/tahu.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Tahu Masak</h4>
                        <span class="separator"></span>
                        <p>Tahu Masak merupakan makanan khas dari Cilacap yang terdiri dari tahu yang di goreng setengah matang, dicampur dengan irisan kubis, ketpat/lonthong</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInRight animated" data-wow-delay=".5s">
                <a href="assets/images/brekecek.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/brekecek.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Brekecek</h4>
                        <span class="separator"></span>
                        <p>Brekecek adalah makanan yang terdiri dari ikan pathak jahan yang di masak seperti rica-rica</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="assets/images/berontak.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/berontak.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Tahu Berontak</h4>
                        <span class="separator"></span>
                        <p>Tahu Berontak adalah nama lain dari tahu isi. Disebut dengan Tahu Berontak karena isi yang ada pada tahu yang seperti memberontak.</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="assets/images/dage.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/dage.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Tempe Dages</h4>
                        <span class="separator"></span>
                        <p>Tempe Dage merupakan makanan yang terbuat dari ampas tahu, yang berbentuk kotak dan padat. Makanan ini sering dibuat menjadi gorengan. </p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="assets/images/lemet.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/lemet.jpg" 10 px />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Lemet Singkong</h4>
                        <span class="separator"></span>
                        <p>Lemet merupakan makanan tradisional Jawa Tengah yang populer di daerah Cilacap. Makanan ini terbuat dari parutan singkong dan kelapa yang diisi dengan gula merah.</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="assets/images/tum.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/tum.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Tumpengan</h4>
                        <span class="separator"></span>
                        <p>Tumpeng merupakan cara penyajian nasi berbentuk kerucut yang ditata bersama dengan lauk-pauk yang dijadikan sebagai simbol rasa syukur kepada Tuhan YME. </p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="assets/images/cenil.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/cenil.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Cenil</h4>
                        <span class="separator"></span>
                        <p>Cenil merupakan jajanan pasar yang terbuat dari saripati singkong dan memiliki tekstur yang kenyal dan manis</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="assets/images/lepet.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/lepet.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Lepet</h4>
                        <span class="separator"></span>
                        <p>Lepet merupakan makanan yang terbuat dari beras ketan dan dibungkus daun kelapa muda (janur)</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="assets/images/salai.jpg" class="b-link-stripe b-animate-go  swipebox">
                  <div class="gal-spin-effect vertical ">
                    <img src="assets/images/salai.jpg" alt=" " />
                    <div class="gal-text-box">
                      <div class="info-gal-con">
                        <h4>Selai Pisang</h4>
                        <span class="separator"></span>
                        <p>Selai Pisang merupakan pisang matang yang dikeringkan kemudian digoreng. Selai pisang sering juga disebut dengan saleh pisang.</p>
                        <span class="separator"></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
      </div>s
    </div>
  
    <!--start-smooth-scrolling-->
            <script type="text/javascript">
                  $(document).ready(function() {
                    /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                      containerHoverID: 'toTopHover', // fading element hover id
                      scrollSpeed: 1200,
                      easingType: 'linear' 
                    };
                    */
                    
                    $().UItoTop({ easingType: 'easeOutQuart' });
                    
                  });
                </script>
                <!--end-smooth-scrolling-->
    <a href="#more" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>