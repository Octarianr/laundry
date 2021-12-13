<?php
 $title='Dashboard';
   include('header.php');
   include('include/db.php');
    include('include/function.php');?>

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
        <li class="breadcrumb-item active">Semua Rekam Menu</li>
      </ol>
      <!-- Icon Cards-->
     
      <!-- Area Chart Example-->
    
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Semua Rekam Menu</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SR#</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Tipe</th>
                  <th>Harga</th>
                  <th>Hapus</th>
                  <th>Update</th>
                </tr>
              </thead>
              
              <tbody>
                <?php $Show=Menu_record();
                $count='0';
                 while ($row=$Show->fetch_object()) {
                   $count++;
                ?>
                <tr>
                  <th><?php echo $count; ?></th>
                  <td><img src="Images/<?php echo $row->Pix_upload; ?>" width='40px'></td>
                  <td><?php echo $row->Menu; ?></td>
                  <td><?php echo $row->menu_type; ?></td>
                  <td><?php echo $row->Price; ?></td>
                 
                  <td><a href="" class=" btn btn-primary">Hapus</a></td>
                  <td><a href="" class=" btn btn-primary">Update</a></td>
                </tr>
                <?php  # code...
                 };?>
                
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Diperbarui kemarin pukul 23.59</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
     <?php include('footer.php');?>
  </div>
</body>

</html>
