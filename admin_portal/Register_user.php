<?php
 $title='Register User Record';

include('_secure.php');
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
        <li class="breadcrumb-item active">Daftar Pengguna </li>
      </ol>
      <!-- Icon Cards-->
     
      <!-- Area Chart Example-->
     
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-users"></i> Daftar Pengguna</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SR#</th>
                  <th>User name</th>
                  <th>Nama Ayah </th>
                  <th>Password  </th>
                  <th>Nomor Telepon </th>
                  <th>Tanggal Daftar</th>
                  <th>Hapus</th>
                  
                </tr>
              </thead>
              
              <tbody>
                <?php $USer=User_reg_fetch();
                $count='0';
                 while ($row=$USer->fetch_object()) {
                   $count++;
                ?>
                <tr>
                  <th><?php echo $count; ?></th>
                  <td><?php echo $row->User_Name; ?></td>
                  <td><?php echo $row->Father_Name; ?></td>
                  <td><?php echo $row->Password; ?></td>
                  <td><?php echo $row->Contact_No; ?></td>
                  <td><?php echo $row->Address; ?></td>
                  <td><a onclick="return confirm('Are you sure you want to delete this entry?')"
                    href="Register_user.php?Register&ID=<?php echo $row->ID; ?>" class=" btn btn-primary">Hapus</a></td>
                </tr>
                <?php  # code...
                 };?>
                
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Diperbarui Kemarin pada pukul 23:59 </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   <?php include('footer.php');?>
  </div>
</body>

</html>
