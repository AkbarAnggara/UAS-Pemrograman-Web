<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kartu Antrian</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<fieldset>
</td></tr>
<header>
  <div class="card text-center">
  <div class="card-header">
    <h2><b>Harap Menuju Loket</b></h2>
    <h3>Tiket Kereta</h3>
  </div>
  <div class="card-body">
<div align="center" ></div>
<table width="480" border="3" align="center">
<tr>
<th width="283"><p align="center"><strong>No. Antri Pelanggan</strong></p></th>
<td width="177"><p><?= $user_obj['id'];?></p></td>
</tr>
<tr>
<td><p align="center"><strong>Nama</strong></p></td>
<td><p><?= $user_obj['name'];?></p></td>
</tr>
<tr><th><p align="center"><strong>Email</strong></p></th>
<td><p><?= $user_obj['email'];?></p></td>
</tr>
<tr>
  <td><div align="center"><strong>Cetak Kartu</strong></div></td>
  <td><a href="<?php echo ('/loket/antri/public/delete/'.$user_obj['id']);?>" class="btn btn-danger btn-sm">Cetak</a>
</tr>
</table>
</div>
</fieldset>
</body>
</html>