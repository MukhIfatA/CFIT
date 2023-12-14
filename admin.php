<?php 
require 'function.php';
$id = $_GET["ID"];


$conn = query("SELECT * FROM peserta WHERE ID = $id");
$koneksi = query("SELECT * FROM sub1 WHERE ID = $id");
$nek = query("SELECT * FROM sub2 WHERE ID = $id");
$konek = query("SELECT * FROM sub3 WHERE ID = $id");
$si = query("SELECT * FROM sub4 WHERE ID = $id");
$i =1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="table2excel.js"></script>
    <style>
        h2{
            justify-content: center;
        }
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
            opacity: 1;
            transition: opacity 0.6s;
            margin-bottom: 15px;
        }

            .alert.success {background-color: #04AA6D;}

            .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
            }

            .closebtn:hover {
            color: black;
            }
    </style>
</head>
<body>

    <div class="container" >
    <table border="1" id="example-table" class="table table-dark  table-striped table-bordered table-hover ">
        
        
            <thead>
                <tr>
                    <th colspan="6" >Peserta</th>
                </tr>
            <tr>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Pendidikan</th>
              <th>tgl test</th>
              <th>tgl lahir</th>
              <th>usia</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($conn as $row ) :?>
            <tr>
                <td><?= $row['namaa']?></td>
                <td><?= $row['jabatan']?></td>
                <td><?= $row['pendidikan']?></td>
                <td><?= $row['tanggal_testa']?></td>
                <td><?= $row['tanggal_lahir']?></td>
                <td><?= $row['usia']?></td>
            </tr>
            <?php $i++ ?>
    <?php endforeach; ?>
        </tbody>
        
        
        
       
            <thead>
            <tr>
                <th colspan="6">sub 1</th>
            </tr>
            <tr>
                <th>no</th>
                <th colspan="5">jawaban</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($koneksi as $ro ) :?>
            <tr>
                <td>1</td>
                <td colspan="5"><?= $ro['kolom1']?></td>
            </tr>
            <tr>
                <td>2</td>
                <td colspan="5"><?= $ro['kolom2']?></td>
            </tr>
            <tr>
                <td>3</td>
                <td colspan="5"><?= $ro['kolom3']?></td>
            </tr>
            <tr>
                <td>4</td>
                <td colspan="5"><?= $ro['kolom4']?></td>
            </tr>
            <tr>
                <td>5</td>
                <td colspan="5"><?= $ro['kolom5']?></td>
            </tr>
            <tr>
                <td>6</td>
                <td colspan="5"><?= $ro['kolom6']?></td>
            </tr>
            <tr>
                <td>7</td>
                <td colspan="5"><?= $ro['kolom7']?></td>
            </tr>
            <tr>
                <td>8</td>
                <td colspan="5"><?= $ro['kolom8']?></td>
            </tr>
            <tr>
                <td>9</td>
                <td colspan="5"><?= $ro['kolom9']?></td>
            </tr>
            <tr>
                <td>10</td>
                <td colspan="5"><?= $ro['kolom10']?></td>
            </tr>
            <tr>
                <td>11</td>
                <td colspan="5"><?= $ro['kolom11']?></td>
            </tr>
            <tr>
                <td>12</td>
                <td colspan="5"><?= $ro['kolom12']?></td>
            </tr>
            <tr>
                <td>13</td>
                <td colspan="5"><?= $ro['kolom13']?></td>
            </tr>
            <?php $i++ ?>
    <?php endforeach; ?>
        </tbody>
        

        
       
            <thead>
            <tr>
                <th colspan="6">sub 2</th>
            </tr>
            <tr>
                <th>no</th>
                <th colspan="5">jawaban</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php foreach ($nek as $r ) :?>
            <tr>
                <td>1</td>
                <td colspan="5"><?= $r['kol1']?></td>
            </tr>
            <tr>
                <td>2</td>
                <td colspan="5"><?= $r['kol2']?></td>
            </tr>
            <tr>
                <td>3</td>
                <td colspan="5"><?= $r['kol3']?></td>
            </tr>
            <tr>
                <td>4</td>
                <td colspan="5"><?= $r['kol4']?></td>
            </tr>
            <tr>
                <td>5</td>
                <td colspan="5"><?= $r['kol5']?></td>
            </tr>
            <tr>
                <td>6</td>
                <td colspan="5"><?= $r['kol6']?></td>
            </tr>
            <tr>
                <td>7</td>
                <td colspan="5"><?= $r['kol7']?></td>
            </tr>
            <tr>
                <td>8</td>
                <td colspan="5"><?= $r['kol8']?></td>
            </tr>
            <tr>
                <td>9</td>
                <td colspan="5"><?= $r['kol9']?></td>
            </tr>
            <tr>
                <td>10</td>
                <td colspan="5"><?= $r['kol10']?></td>
            </tr>
            <tr>
                <td>11</td>
                <td colspan="5"><?= $r['kol11']?></td>
            </tr>
            <tr>
                <td>12</td>
                <td colspan="5"><?= $r['kol12']?></td>
            </tr>
            <tr>
                <td>13</td>
                <td colspan="5"><?= $r['kol13']?></td>
            </tr>
            <tr>
                <td>14</td>
                <td colspan="5"><?= $r['kol14']?></td>
            </tr>
            <?php $i++ ?>
    <?php endforeach; ?>
        </tbody>
        

        
       
            <thead>
            <tr>
                <th colspan="6">sub 3</th>
            </tr>
            <tr>
                <th>no</th>
                <th colspan="5">jawaban</th>
            </tr></thead>
            <tbody>
            <?php foreach ($konek as $ow ) :?>
            
            <tr>
                <td>1</td>
                <td colspan="5"><?= $ow['nomor1']?></td>
            </tr>
            <tr>
                <td>2</td>
                <td colspan="5"><?= $ow['nomor2']?></td>
            </tr>
            <tr>
                <td>3</td>
                <td colspan="5"><?= $ow['nomor3']?></td>
            </tr>
            <tr>
                <td>4</td>
                <td colspan="5"><?= $ow['nomor4']?></td>
            </tr>
            <tr>
                <td>5</td>
                <td colspan="5"><?= $ow['nomor5']?></td>
            </tr>
            <tr>
                <td>6</td>
                <td colspan="5"><?= $ow['nomor6']?></td>
            </tr>
            <tr>
                <td>7</td>
                <td colspan="5"><?= $ow['nomor7']?></td>
            </tr>
            <tr>
                <td>8</td>
                <td colspan="5"><?= $ow['nomor8']?></td>
            </tr>
            <tr>
                <td>9</td>
                <td colspan="5"><?= $ow['nomor9']?></td>
            </tr>
            <tr>
                <td>10</td>
                <td colspan="5"><?= $ow['nomor10']?></td>
            </tr>
            <tr>
                <td>11</td>
                <td colspan="5"><?= $ow['nomor11']?></td>
            </tr>
            <tr>
                <td>12</td>
                <td colspan="5"><?= $ow['nomor12']?></td>
            </tr>
            <tr>
                <td>13</td>
                <td colspan="5"><?= $ow['nomor13']?></td>
            </tr>
            <?php $i++ ?>
    <?php endforeach; ?>
        </tbody>
        
    
        
       
            <thead>
            <tr>
                <th colspan="6">sub 4</th>
            </tr>
            <tr>
                <th>no</th>
                <th colspan="5">jawaban</th>
            </tr></thead>
            <tbody>
            <?php foreach ($si as $w ) :?>
            <tr>
                <td>1</td>
                <td colspan="5"><?= $w['no1']?></td>
            </tr>
            <tr>
                <td>2</td>
                <td colspan="5"><?= $w['no2']?></td>
            </tr>
            <tr>
                <td>3</td>
                <td colspan="5"><?= $w['no3']?></td>
            </tr>
            <tr>
                <td>4</td>
                <td colspan="5"><?= $w['no4']?></td>
            </tr>
            <tr>
                <td>5</td>
                <td colspan="5"><?= $w['no5']?></td>
            </tr>
            <tr>
                <td>6</td>
                <td colspan="5"><?= $w['no6']?></td>
            </tr>
            <tr>
                <td>7</td>
                <td colspan="5"><?= $w['no7']?></td>
            </tr>
            <tr>
                <td>8</td>
                <td colspan="5"><?= $w['no8']?></td>
            </tr>
            <tr>
                <td>9</td>
                <td colspan="5"><?= $w['no9']?></td>
            </tr>
            <tr>
                <td>10</td>
                <td colspan="5"><?= $w['no10']?></td>
            </tr> 
            <?php $i++ ?>
    <?php endforeach; ?>
            </tbody>
            </table>
    
        <button id="download">export to excel</button>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
document.getElementById('download').addEventListener('click', function () {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#example-table"));
        });</script>
        <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
</body>
</html>