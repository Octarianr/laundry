<?php
 $title='Dashboard';
   include('header.php');
   include('include/db.php');
    include('include/function.php');

if(isset($_POST['button']))
{
   $Menu_Type=$_POST['Menu_Type'];
  $Menu=$_POST['Menu'];
 $Menu_Price=$_POST['Menu_Price'];
  $img= pathinfo($_FILES['imageName']['name']);
  
    $Filename=substr(md5(time()),0,5);
     $menutimg= $Filename.".".$img["extension"];
     $imageUpload = move_uploaded_file($_FILES['imageName']['tmp_name'],"images/".$Filename.".".$img["extension"]);
     $insert = "insert into menu_upload(Menu_Type,Menu,Price,Pix_upload) 
     VALUES('".$Menu_Type."','".$Menu."','".$Menu_Price."','".$menutimg."')";
     $query = $db->query($insert);
  
}else{
            
}

    ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
 <?php  include('nav.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tambah Menu</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-cutlery"></i> Tambah Menu </div>
        <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Masuk ke Menu Pic</label>
            <input name="imageName" type="file"  class="form-control" required="">
          </div>
         <div class="form-group col-lg-4">
            <label for="exampleInputEmail1">Pilih Tipe Menu</label>
            <select class="form-control" name="Menu_Type"  id="Menu_Type" required="">
                <option  hidden="">Pilih Tipe Menu</option>option>
                <option value="STUDENT">Pelajar</option>
                <option value="MAZEDAR">Mazedar</option>
                <option value="ECONOMY">Ekonomi</option>

            </select>
          </div>
          <div class="form-group col-lg-4">
            <label for="exampleInputEmail1">Masuk ke Daftar Nama</label>
            <input type="text"  class="form-control" name="Menu" required="">
          </div>
          <div class="form-group col-lg-4">
            <label for="exampleInputEmail1">Daftar Harga</label>
            <input type="text"  class="form-control" name="Menu_Price" required="">
          </div>
           <div class="form-group col-lg-12">
            <input type="submit"  class="form-control btn btn-primary" name="button">
          </div>
        </div>
       </form> 
        </div>
        <div class="card-footer small text-muted">Diperbarui kemarin pukul 23.59</div>
      </div>
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Widya YA 2021</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Siap Untuk Meningalkan?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="login.html">Keluar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
