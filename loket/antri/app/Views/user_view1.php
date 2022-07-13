<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tiket Bus</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
   <center>
   <h1><b>Daftar Tiket Bus</b></h1>
   </center>
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo ('/loket/antri/public/user-form1') ?>" class="btn btn-success mb-2">Tambah Pelanggan</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>No. Antrian</th>
             <th>Nama</th>
             <th>Email</th>
             <th>Menu</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users1): ?>
          <?php foreach($users1 as $user1): ?>
          <tr>
             <td><?php echo $user1['id']; ?></td>
             <td><?php echo $user1['name']; ?></td>
             <td><?php echo $user1['email']; ?></td>
             <td>
              <a href="<?php echo ('/loket/antri/public/edit-view1/'.$user1['id']);?>" class="btn btn-primary btn-sm">Ubah</a>
              <a href="<?php echo ('/loket/antri/public/delete1/'.$user1['id']);?>" class="btn btn-danger btn-sm">Hapus</a>
              <a href="<?php echo ('/loket/antri/public/cetak1/'.$user1['id']);?>" class="btn btn-primary btn-sm">Cetak Tiket</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>