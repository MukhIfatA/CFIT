<?php
session_start();

error_reporting(0);
ini_set('display_errors', 0);

// $nama = $_SESSION['nama'];
// $jabatan = $_SESSION['jabatan'];
// $pendidikan = $_SESSION['pendidikann'];
// $tgl = $_SESSION['tanggal_testa'];
// $tgl_lahir = $_SESSION['tanggal_lahir'];
// $usia = $_SESSION['usia'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script defer>
    sub4 = localStorage.getItem('key');
    if (!sub4) {
      // Redirect to index.php
      window.location.href = 'index.php';
    }
  </script>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Instruksi sesi 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <style>
    .container {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
    }

    img {
      width: 50px;
      height: 50px;
      justify-content: space-beetween;
    }

    p {
      margin-left: 25px;
    }

    input {
      margin-left: 20px;
    }
  </style>
</head>

<body>
  <form action="index4.php" method="post">

    <div class="container">
      <div class="card p-4 m-3">
        <h2>Berikut adalah petunjuk mengenai CFIT Test sub keempat</h2>
        <h3>Petunjuk</h3>

        <p>
          Instruksi sesi 4 Pilihlah satu dari kelima jawaban yang mencerminkan
          kondisi yang sama dengan gambar contoh disebelah kiri.
        </p>

        <h3>Contoh</h3>
        <div class="container" style="margin-bottom: 40px;">
          <div style="margin-top: 50px;">
            <p id="v">1</p>
          </div>
          <div style="margin-top: 40px;">
            <div style="margin-left: 40px;">
              <img id="pm" src="asset/SUB 4.png" alt="" />
            </div>
          </div>

          <div class="container" style="margin-left: 50px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 41A.png" alt="" /> <br>
              <input type="radio" value="A" name="a">
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 41B.png" alt="" /> <br>
              <input type="radio" value="A" name="a">
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 41C.png" alt="" /> <br>
              <input type="radio" value="A" name="a">
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 41D.png" alt="" /> <br>
              <input type="radio" value="A" name="a">
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 41E.png" alt="" /> <br>
              <input type="radio" value="A" name="a">
            </div>
          </div>
        </div>

        <div class="container" style="margin-bottom: 40px;">
          <div style="margin-top: 50px;">
            <p id="v">2</p>
          </div>
          <div style="margin-top: 40px;">
            <div style="margin-left: 40px;">
              <img id="pm" src="asset/SUB 42.png" alt="" />
            </div>
          </div>

          <div class="container" style="margin-left: 50px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 42A.png" alt="" /> <br>
              <input type="radio" value="A" name="b">
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 42B.png" alt="" /> <br>
              <input type="radio" value="A" name="b">
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 42C.png" alt="" /> <br>
              <input type="radio" value="A" name="b">
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 42D.png" alt="" /> <br>
              <input type="radio" value="A" name="b">
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 42E.png" alt="" /> <br>
              <input type="radio" value="A" name="b">
            </div>
          </div>
        </div>


        <div class="container mb-3">
          <div style="margin-top: 50px;">
            <p id="v">3</p>
          </div>
          <div style="margin-top: 40px;">
            <div style="margin-left: 40px;">

              <img id="pm" src="asset/SUB 43.png" alt="" />
            </div>
          </div>

          <div class="container" style="margin-left: 50px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 43A.png" alt="" /> <br>
              <input type="radio" value="A" name="c">
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 43B.png" alt="" /> <br>
              <input type="radio" value="A" name="c">
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 43C.png" alt="" /> <br>
              <input type="radio" value="A" name="c">
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 43D.png" alt="" /> <br>
              <input type="radio" value="A" name="c">
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 43E.png" alt="" /> <br>
              <input type="radio" value="A" name="c">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-warning text-light">
          mulai
        </button>
      </div>
    </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>