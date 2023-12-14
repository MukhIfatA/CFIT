<?php
session_start();

// $nama = $_SESSION['namaa'];
// $jabatan = $_SESSION['jabatan'];
// $pendidikan = $_SESSION['pendidikann'];
// $tgl = $_SESSION['tanggal_testa'];
// $tgl_lahir = $_SESSION['tanggal_lahir'];
// $usia = $_SESSION['usia'];
?>
<!doctype html>
<html lang="en">

<head>
  <script defer>
    sub4 = localStorage.getItem('key');
    if (!sub4) {
      // Redirect to index.php
      window.location.href = 'index.php';
    }
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Instruksi sesi 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    .container {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }

    img {
      width: 50px;
      height: 50px;
      justify-content: space-beetween;
    }

    #pm {
      width: 200px;

    }

    p {
      margin-left: 25px;
    }

    #v {
      margin-top: 30px;
    }

    .b {
      position: relative;
    }

    .g {
      margin-left: 30px;
    }

    input {
      margin-left: 20px;
    }
  </style>
</head>

<body>
  <form action="indexx.php" method="post">

    <div class="container">
      <div class="card p-4 m-3">
        <h2>Berikut adalah petunjuk mengenai CFIT Test sub pertama</h2>
        <h3>Petunjuk</h3>

        <p>Instruksi sesi 1
          Di sebelah atas, anda akan menemukan sederet kotak yang berisi urutan gambar. Namun, kotak terakhir
          belum
          ada isinya. Tugas anda adalah mengisi kotak tersebut dengan gambar yang sesuai,yang bisa dipilih dari
          enam pilihan jawaban yang tersedia, yaitu A, B, C, D, E dan F. Perlu diingatbahwa gambar-gambar pada
          soal memiliki pola tertentu sehingga untuk mengisinya,anda perlumengetahui pola dari urutan gambar
          tersebut.

        </p>

        <h3>Contoh</h3>
        <ol type="1">
          <div>
            <div>

              <li>
                <div class="container">

                  <div><img id="pm" src="asset/CONTOH 1.png" alt="" /></div>
                </div>
                <div class="container mb-5">
                  <div>
                    <p>a</p>
                    <img src="asset/CONTOH 1 A.png" alt="" /> <br>
                    <input type="radio" value="A" name="a">
                  </div>
                  <div>
                    <p>b</p>
                    <img src="asset/CONTOH 1B.png" alt="" /> <br>
                    <input type="radio" value="B" name="a">
                  </div>
                  <div>
                    <p>c</p>
                    <img src="asset/CONTOH 1C.png" alt="" /> <br>
                    <input type="radio" value="C" name="a">
                  </div>
                  <div>
                    <p>d</p>
                    <img src="asset/CONTOH 1D.png" alt="" /> <br>
                    <input type="radio" value="D" name="a">
                  </div>
                  <div>
                    <p>e</p>
                    <img src="asset/CONTOH 1E.png" alt="" /> <br>
                    <input type="radio" value="E" name="a">
                  </div>
                  <div>
                    <p>f</p>
                    <img src="asset/CONTOH 1F.png" alt="" /> <br>
                    <input type="radio" value="F" name="a">
                  </div>
                </div>

            </div>
            </li>
            <div class="">
              <li>
                <div style="margin-top:50px ;">
                  <img id="pm" src="asset/CONTOH 2.png" alt="" />
                </div>
            </div>
            <div class="container mb-5">
              <div>
                <p>a</p>
                <img src="asset/CONTOH 2A.png" alt="" /> <br>
                <input type="radio" value="F" name="b">
              </div>
              <div>
                <p>b</p>
                <img src="asset/CONTOH 2B.png" alt="" /> <br>
                <input type="radio" value="F" name="b">
              </div>
              <div>
                <p>c</p>
                <img src="asset/CONTOH 2C.png" alt="" /> <br>
                <input type="radio" value="F" name="b">
              </div>
              <div>
                <p>d</p>
                <img src="asset/CONTOH 2D.png" alt="" /> <br>
                <input type="radio" value="F" name="b">
              </div>
              <div>
                <p>e</p>
                <img src="asset/CONTOH 2E.png" alt="" /> <br>
                <input type="radio" value="F" name="b">
              </div>
              <div>
                <p>f</p>
                <img src="asset/CONTOH 2F.png" alt="" /> <br>
                <input type="radio" value="F" name="b">
              </div>
            </div>
            </li>

            <div class="container mb-3 ">
              <li>

                <img id="pm" src="asset/CONTOH 3.png" alt="" />
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p>a</p>
              <img src="asset/CONTOH 3A.png" alt="" /> <br>
              <input type="radio" value="F" name="c">
            </div>
            <div>
              <p>b</p>
              <img src="asset/CONTOH 3B.png" alt="" /> <br>
              <input type="radio" value="F" name="c">
            </div>
            <div>
              <p>c</p>
              <img src="asset/CONTOH 3C.png" alt="" /> <br>
              <input type="radio" value="F" name="c">
            </div>
            <div>
              <p>d</p>
              <img src="asset/CONTOH 3D.png" alt="" /> <br>
              <input type="radio" value="F" name="c">
            </div>
            <div>
              <p>e</p>
              <img src="asset/CONTOH 3E.png" alt="" /> <br>
              <input type="radio" value="F" name="c">
            </div>
            <div>
              <p>f</p>
              <img src="asset/CONTOH 3F.png" alt="" /> <br>
              <input type="radio" value="F" name="c">
            </div>
          </div>
          </li> <button type="submit" class="btn btn-warning text-light" style="width: 100%">mulai</button>
      </div>
      </ol>



    </div>



    </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>

</html>