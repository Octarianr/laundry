<?php include('include/Connection.php');


if(isset($_POST['Formsubmit'])){
   extract($_POST);

$sql = "SELECT * from contact_form where  Name='".$Name."' and Phone_No='".$Phone_No."'  and Message='".$Message."'";
      $info = $db->query($sql);
          if($info->num_rows>0) 
          { 
            
          }else{
            $insert = "insert into contact_form(Name,Phone_No,Message) 
             VALUES('".$Name."','".$Phone_No."','".$Message."')";
              $query1 = $db->query($insert);
           }    
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Laundry Widya</title>

<link rel="icon" href="icon.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Immerse a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
 <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />


<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Sintony:400,700&amp;subset=latin-ext" rel="stylesheet">

</head>
<style type="text/css">
  /* Social Icons */
#social_side_links {
  position: fixed;
  top: 340px;
  left: 0;
  padding: 0;
  list-style: none;
  z-index: 99;
}

#social_side_links li a {display: block; padding: 5px 5px 5px 5px; }

</style>
<body>
<ul id="social_side_links">
  <li><a style="background-color: #009688;width: 130px;height: auto;color: white;font-size: 29px"   data-toggle="modal" data-target="#myModal1">Order Now</a></li>
 
</ul>


<!-- <div class="icon-bar">
  <a href="#" class="facebook" data-toggle="modal" data-target="#myModal1">Order Now<i class="fa fa-order"></i></a> 
</div> -->
<!-- banner -->
<div class="w3l_banner" >

<div class="w3_bandwn">
<div class="container">
	<div class="col-md-3 w3_l">
	<i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:Laundrywidya@Gmail.com">Laundrywidya@Gmail.com</a>
	</div>
	<div class="col-md-6 w3_c">
	<i class="fa fa-phone" aria-hidden="true"></i> +62 888 3084 003
	</div>
	<div class="col-md-3 w3_r">
	<a href="https://facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</div>
    <div class="clearfix"></div>
</div>
</div>
<nav class="navbar navbar-default ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <h1><a class="navbar-brand" href="#">LAUNDRY WIDYA</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#index.html" class="page-scroll">BERANDA</a></li>
        <li><a href="#about" class="page-scroll">TENTANG</a></li>
		<li><a href="#services" class="page-scroll">LAYANAN</a></li>
		<li><a href="#gallery" class="page-scroll">GALERI</a></li>
		<li><a href="#testimonials" class="page-scroll">HARGA</a></li>
		<li><a href="#contact" class="page-scroll">TELP</a></li>
		<li><a href="Login.php" >LOGIN</a></li>
		<li><a href="Registration.php" >DAFTAR</a></li>
		           
     
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="w3l_bandwn">
 <h2>Selamat Datang di Laundry Widya</h2>
 <div class="about-p text-center">
<span class="sub-title"></span>
<span class="fa fa-star" aria-hidden="true"></span>
<span class="sub-title"></span>
</div>
<h3>Pencuci Pakaian</h3>
<div class="agile_dwng">
<a href="#" data-toggle="modal" data-target="#myModal">Baca Selengkapnya </a>
  <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
         <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Laundry Widya</h4>
        </div>
        <div class="modal-body">
		<img src="images/modal.jpg"  class="img-responsive" alt="tfg">
          <p>Jaringan kami masih terus berkembang. Saat ini, kami beroperasi di area utama Bojonegoro dan segera kami akan menyebarkan cucian bersih ke seluruh kota.
Laundry Widya ada di sini untuk menghemat waktu berharga Anda dan melepaskan beban dari pundak Anda, secara harfiah. Ini adalah layanan binatu dan dry-cleaning berdasarkan permintaan. Jangan khawatir. Pakaian Anda akan berada di tangan tim yang berpengalaman dan profesional, yang terlatih khusus untuk menangani cucian Anda dengan sangat hati-hati. Kami TIDAK PERNAH berkompromi pada kualitas. Deterjen yang aman dan ramah lingkungan serta produk dry-cleaning kualitas impor digunakan.

Kami Menjemput dan Mengirim Pakaian di Depan Pintu Anda.

Layanan kami tidak hanya cepat, bersih, efisien, tetapi juga sangat dapat diandalkan. Eksekutif layanan pelanggan kami secara khusus dilatih untuk memberikan panduan dan memastikan pengiriman tepat waktu.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>

</div>
 </div>
</div>
<!-- /features -->
<div class="about" id="about">
	<div class="features" id="features">
		<div class="container">
	<h3>Tentang Kami</h3>
			<div class="tittle_head_w3layouts">
				<h4>Kualitas Terjamin</h4>
				
					<P>Layanan kami tidak hanya cepat, bersih, efisien, tetapi juga sangat dapat diandalkan. Eksekutif layanan pelanggan kami secara khusus dilatih untuk memberikan panduan dan memastikan pengiriman tepat waktu.</p>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<!-- <div class="border1"> -->
				<div class="w3_banup">
					<div class="col-md-4 w3_ret">
					<div class="col-md-10 w3_txt">
							<h4>Cuci </h4>
							<p>Standar alat dan bahan yang berkualitas memberikan hasil yang terbaik</p>
							</div>
							<div class="col-md-2 w3ls_ic">
								<i class="fa fa-crosshairs" aria-hidden="true"></i>
						
							</div>
							
						<div class="clearfix"></div>
					
					<div class="col-md-10 w3_txt">
						
							<h4>Kering</h4>
							<p>laundryan yang dipastikan kering sebelum proses selanjutnya </p>
							</div>
							<div class="col-md-2 w3ls_ic">
							<i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>
				
					<div class="col-md-10 w3_txt">
						
							<h4>Bebas Besi/Zat Membahayakan</h4>
							<p>Kami telah memastikan bahwa layanan kami bebas dari besi atau zat yang membahayakan.</p>
							</div>
							<div class="col-md-2 w3ls_ic">
								<i class="fa fa-tint" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>
					
					</div>
					<div class="col-md-4 w3l_mid">
					<div class="bulb">
						<img src="images/pic.jpg" alt="" />
					</div>
					</div>
					<div class="col-md-4 wthree_r">
					<div class="col-md-2 w3ls_ic">
							<i class="fa fa-street-view" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Komoditas</h4>
							<p class="move">Dapat dijangkau kapanpun,karena terdapat beberapa cabang toko kami </p>
						</div>
						<div class="clearfix"></div>
					
					 <div class="col-md-2 w3ls_icr">
							<i class="fa fa-fast-forward" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Cepat</h4>
							<p class="move">Laundryan cepat jadi dan higienis,hanya membutuhkan wakut 2 hari untuk normal pemesanan</p>
						</div>
						<div class="clearfix"></div>
					
					<div class="col-md-2 w3ls_icr">
						<i class="fa fa-bolt" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 w3_txt">
							<h4>Ekspres</h4>
							<p class="move">Pelanggan dapat memesan laundryan agar lebih cepat selesai</p>
						</div>
						<div class="clearfix"></div>
					</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
				<!-- </div> -->
	</div>
		</div>
	</div>
	<!-- //features -->
</div>
</div>
<!-- Order Form-->
<div class="w3ls_frmrt">
 <div class="container">
	<h3>Order Sekarang</h3>
	
		
<?php include('Price/index.php')?>
		<div class="clearfix"></div>
   
 </div>
</div>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div> -->
      <div class="modal-body"><!-- 
        <p>Some text in the modal.</p> -->
        <?php  include('order-model.php');?>
      </div>
      
    </div>

  </div>
</div>

</div>





				   
<!-- /Order Form-->
<!-- Services-->
<div class="services" id="services">
<div class="container">
<h3>LAYANAN</h3>
<div class="col-md-4 hhh">
<div class="wthree_rt">
<i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
<h4>CUCI LIPAT</h4>
<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p> -->
</div>
</div>
<div class="col-md-4 hhh">
<div class="wthree_rt">
<i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
<h4>CUCI KERING</h4>
<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p> -->
</div>
</div>

<div class="col-md-4 hhh">
<div class="wthree_rt">
<i class="fa fa-bolt" aria-hidden="true"></i>
<h4>EKPRESS</h4>
<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p> -->
</div>
</div>
<!-- <div class="clearfix"></div>
<div class="w3l_serdwn"> -->
<!-- <div class="col-md-4 hhh">
<div class="agile_ser">
<i class="fa fa-user" aria-hidden="true"></i>
<h4>Personal laundress</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p>
</div>
</div> -->
<!-- <div class="col-md-8 W3ls_serv">
<div class="agile_ser ">
<div class="col-md-6 wthree_l">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p>
</div>
<div class="col-md-6 wthree_rts">
<img src="images/s1.jpg" class="img-responsive" alt="">
</div>
<div class="clearfix"></div>
</div>
</div> -->
<!-- <div class="clearfix"></div>
</div> -->
</div>
</div>
<!-- /Services-->
   <!-- gallery -->
   <div class="gallery" id="gallery">
         <div class="container-fluid">
            <h3>Galeri</h3>
          
            <div class="about-bottom  w3ls-team-info">
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g6.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g6.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g7.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g7.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
    
	</div>
    <!-- //gallery -->

<!-- Testimonials-->

              

<div class="testimonials" id ="testimonials">
<div class="container">
 <div class="tittle-agileinfo">
			<h3>Kami Memiliki Harga Terjangkau</h3>
			</div>
						<div class="sreen-gallery-cursual">
            
            <?php
            $a=10;
   $sel="SELECT * from services_type";
  $info=$db->query($sel);
  while ($row=$info->fetch_object()) {
    $a++;
                   ?>

              <div class="agile_dwng">
                <a href="#" data-toggle="modal" data-target="#myModa<?php echo $a?>"><?php echo $row->Services_Name?></a>
                  <div class="modal video-modal fade" id="myModa<?php echo $a?>" tabindex="-1" role="dialog" aria-labelledby="myModa<?php echo $a?>">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">×</button>
                          <h4 class="modal-title"><?php echo $row->Services_Name?></h4>
                        </div>
                        <div class="modal-body">
                          <table class="table" style="color: black">
                            <thead>
                              <tr align="text-center">
                                <th ><center><?php echo $row->Services_Name?>Pakaian</center></th>
                                <th ><center>Cuci Kering</center></th>
                                <th ><center>Laundry</center></th>
                              </tr>               
                            </thead>
                            <tbody>
                          <?php
                              $sql="SELECT * from services_uploade where Services_Type='".$row->Services_Name."' ";
                            $info_sql=$db->query($sql);
                            while ($Fetch=$info_sql->fetch_object()) {
                                             ?>

                                          <tr>
                                            <td><?php echo $Fetch->Services_Name ?></td>
                                            <td><?php echo $Fetch->Dry_Price=='0'?'-':$Fetch->Dry_Price ?></td>
                                            <td><?php
                                            echo $Fetch->Laundry_Price=='0'?'-':$Fetch->Dry_Price
                                              ?></td>
                                          </tr>
                          <?php }?>               
                              
                            </tbody>
                          </table>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                </div>
                <br><br>
<?php };?>
							</div>
							</div>
							</div>
		<!--/Testimonials-->
<!-- contact -->

	<div class="contact" id="contact">
		<div class="container">
			<div class="agile-contact-grids">
			     <h3>Kontak</h3>
				 	<div class="col-md-6 agile-contact-left">
					<div class="agileits-map">
					
					</div>
					<div class="map-grid">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846.6602763101702!2d111.64118382916567!3d-7.147569668994201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc22dce6448e61db1!2zN8KwMDgnNTEuMyJTIDExMcKwMzgnMzAuMiJF!5e1!3m2!1sid!2sid!4v1638366179265!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="col-md-6 agile-contact-right">
					<div class="contact-form">
						
						<form action="" method="POST">
							<div class="styled-input agile-styled-input-top">
							<div class="styled-input">
							
								<input type="text" name="Name" placeholder="Nama" required="">
								
								<span></span>
							</div>
							
							<div class="styled-input">
							
								<input type="text" name="Phone_No" placeholder="Nomor Telepon" required="">
								
								<span></span>
							</div>
							<div class="styled-input">
							
								<textarea name="Message" placeholder="Pesan" required=""></textarea>
							
								<span></span>
							</div>
							<input type="submit" value="Kirim" name="Formsubmit">
						</form>
					</div>
				</div>
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	
	<br>
<!-- footer -->
	<div class="footer" id="footer">
		<div class="container">
			<div class="list">
				<div class="col-md-3 wthree_fl">
					<a href="#">Laundry Widya</a>
					</div>
					
				<div class="col-md-6 wthree_fc">
					<h6> Jl. Raya Betet </h6>
					<h6> Ds.Betet RT.11/RW.04,No.603</h6>
					<h6> Kasiman-Bojonegoro </h6>
					</div>
					
					<div class="col-md-3 wthree_fr">
					<h6>+62 888 3084 003</h6>
					<h6><a href="mailto:service@decorate.com">Laundrywidya@Gmail.com</a></h6>
					</div>
			</div>
		</div>
	</div>
	<!-- //footer -->
<div class="copyright">
		<div class="container">
			<p>© <?php echo date('Y');?> Laundry Widya. All rights reserved | Design by <a href="">Widya Y.A</a> Repost by <a href="https://stokcoding.com/" title="StokCoding.com" target="_blank">StokCoding.com</a></p>
		</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- flexSlider -->
	<script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :2,
									itemsDesktop : [800,2],
									itemsDesktopSmall : [414,1],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination : true,
									
							      });
								  
							    });
							    </script>

<!-- //flexSlider -->
 <!-- /gallery -->
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>

    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->

<!-- Move-to-top-->
<script type="text/javascript">
$(document).ready(function() {
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<!--/Move-to-top-->


</body>
</html>