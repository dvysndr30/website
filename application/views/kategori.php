
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
                                  '<a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg" href="home/kategori_detail/'+food[i].id_kuliner+'">'+food[i].nama_kuliner+'</a>'+
                                  '<span style="left: 166px; right: 44px;" class="menu-line"></span>'+
                                  '<span class="menu-price"></span>'+
                                '</span>'+
                                '<span class="menu-subtitle">'+food[i].alamat+'</span>'+
                                '<a target="_blank" class="btn btn-success" href="'+food[i].embed+'"><i class="fa fa-map"></i></a>'+
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
        background: #DEB887 url("img_tree.gif") no-repeat fixed center; 
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

<body class="img-thumbnaill" alt="layar">

    <div class="header"  data-wow-duration="0.5s" data-wow-delay=".0s"></div>
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
        </script>

  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <section id="menu-list" class="section-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center marb-35">
                  <br> 
                  <br>
                  <br>
                  <h1 class="header-h">Kategori Menu</h1>
                  <p class="header-p"></p>
                  <div class="arrows-serve"><img src="<?= base_url('assets/') ?>images/border.png" alt="border"></div>
                </div>
              </div>
               <?php foreach($kategori as $kategori) : ?>
              <div class="col-md-3 services-gd text-center wow slideInDown"  data-wow-duration="  1s" data-wow-delay=".2s">
                <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                  <a href="#" class="hi-icon"><img src="assets/images/mkn.jpg" alt=" " /></a>
                </div>
                <div class="col-md-12  text-center" id="menu-flters">
                  <ul>
                    <li><a class="filter active" data-filter="" onclick="showListkuliner('<?php echo $kategori->id_kategori?>')"><?php echo str_replace('_',' ',$kategori->nama_kategori); ?></a></li>
                  </ul>
                </div>
              </div>
               <?php endforeach ?>
              <div id="menu-wrapper">
                <div class="grid" id="bodyGridKul">
                 
                </div>
              </div>
          </section>

          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/js/jquery.easing.min.js"></script>
          <script src="assets/js/bootstrap.min.js"></script>
          <script src="assets/js/custom.js"></script>

        </div>
      </header>
    </div>
  </section>
</li>
</ul>
</nav>
</div>
</div>
</div>
</header>
</div>
</section>

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
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>
</div>
</div>
</div>
</div>