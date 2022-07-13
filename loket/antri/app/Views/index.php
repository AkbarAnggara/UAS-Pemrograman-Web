<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TIKET BUS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <div class="mt-3">
     <table class="table table-bordered" id="index">
       <thead>
          <tr>
             <th>Kode Tiket</th>
             <th>Tiket Kendaraan</th>
          </tr>
       </thead>
       <tbody>
          <tr>
             <td>TK</td>
             <td>Tiket Kereta</td>
             <td> <a href="<?php echo ('/loket/antri/public/users-list/');?>" class="btn btn-primary btn-sm">Pesan Tiket</a></td>
          </tr>
          <tr>
            <td>TB</td>
            <td>Tiket Bus</td>
            <td> <a href="<?php echo('/loket/antri/public/users-list1/');?>" class="btn btn-primary btn-sm">Pesan Tiket</a> </td>
         </tr>
       </tbody>
     </table>
  </div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</body>
</html>