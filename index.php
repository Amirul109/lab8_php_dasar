<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>   
    body{
          background: #EEEEEE;
        }
    h1 {
      font-size: 30px;
      text-align: center;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      padding: 8px;
      text-align: center;
      border-bottom: 2px solid #ddd;
      border: 2px solid #ccc;
    }

    th {
      background-color: #383838;
      color: white;
    }

    td img {
      width: 50px;
      height: 50px;
    }

    td a {
      background-color: #2438A6;
      color: white;
      padding: 6px 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 4px;
    }

    .button {
      background-color: #011126;
      font-size: 15px;
      color: white;
      padding: 6px 12px;
      text-align: center;
      text-decoration: none;
      border-radius: 4px;
      margin-top: 20px;
      float: right;
    }
    .button[type="submit"]:hover {
      background-color: #032859;
    }

    .preview img {
      width: 100%;
      height: auto;
    }

    </style>
    </head>
    <body>
      <div class="container">
        <h1>Data Barang</h1>
        <div class="main">
        
          <table>
          <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Katagori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Aksi</th>
          </tr>
          <?php if ($result) : ?>
          <?php while ($row = mysqli_fetch_array($result)) : ?>
          <tr>
            <td><img src="<?= $row['gambar']; ?>" alt="<?=
      $row['nama']; ?>"></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kategori']; ?></td>
            <td><?= $row['harga_jual']; ?></td>
            <td><?= $row['harga_beli']; ?></td>
            <td><?= $row['stok']; ?></td>
            <td><a href="ubah.php?id=<?= $row['id_barang']; ?>">Change</a> <a href="hapusdata.php?id=<?= $row['id_barang']; ?>">Delete</a></td>
          </tr>
          <?php endwhile; else : ?>
          <tr>
            <td colspan="7">Belum ada data</td>
          </tr>
          <?php endif; ?>
          </table>
          <td><a class="button" type="submit" href="tambah.php">Tambah Barang</a>
        </div>
      </div>
    </body>
</html>