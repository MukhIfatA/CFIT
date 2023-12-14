<?php 
require 'function.php';

$conn = query("SELECT * FROM peserta");
$koneksi = query("SELECT * FROM sub1");
$nek = query("SELECT * FROM sub2");
$konek = query("SELECT * FROM sub3");
$si = query("SELECT * FROM sub4");
$i =1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="table2excel.js"></script>
    <style>
        h2{
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>peserta</h2>
        <table id="example-table" border="1" class="table table-dark  table-striped table-bordered table-hover ">
            <thead>
            <tr>
                <th>No</th>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Pendidikan</th>
              <th>tgl test</th>
              <th>tgl lahir</th>
              <th>usia</th>
              <th>Detail</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($conn as $row ) :?>
            <tr>
                <td><?= $i?></td>
                <td><?= $row['namaa']?></td>
                <td><?= $row['jabatan']?></td>
                <td><?= $row['pendidikan']?></td>
                <td><?= $row['tanggal_testa']?></td>
                <td><?= $row['tanggal_lahir']?></td>
                <td><?= $row['usia']?></td>
                <td><a href="admin.php?ID=<?= $row['ID']?>">Jawaban peserta</a></td>
            </tr>
            <?php $i++ ?>
    <?php endforeach; ?>
        </tbody>
        </table>
    </div>

   
        <button id="download">export to excel</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
document.getElementById('download').addEventListener('click', function () {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#example-table"));
        });</script>
</body>
</html>