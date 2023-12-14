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
  <title>Instruksi sesi 2</title>
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
  </style>
</head>

<body>
  <form action="index2.php" method="post">


    <div class="container">
      <div class="card p-4 m-3">
        <h2>Berikut adalah petunjuk mengenai CFIT Test sub Kedua</h2>
        <h3>Petunjuk</h3>

        <p>Instruksi sesi 2
          Pada setiap soal, anda akan menemukan 5 buah gambar yang disusun secara berdampingan.Telitilah
          gambar-gambar tersebut. Tugas anda adalah menemukan tepat DUA gambar yang memilikikarakteristik yang
          serupa. TIGA gambar lainnya berfungsi sebagai pengecoh anda, sehingga berhati-hatilah dalam menentukan
          pilihan.


        </p>



        <h3>Contoh</h3>
        <ol type="1">
          <div>
            <div class="container mb-3">
              <li>

                <div class="container" style="margin-left: 10px;">

                  <div>
                    <p>a</p>
                    <img src="asset/CONTOH SUB 2 A.png" alt="" />
                  </div>
                  <div>
                    <p>b</p>
                    <img src="asset/CONTOH SUB 2B.png" alt="" />
                  </div>
                  <div>
                    <p>c</p>
                    <img src="asset/CONTOH SUB 2C.png" alt="" />
                  </div>
                  <div>
                    <p>d</p>
                    <img src="asset/CONTOH SUB 2D.png" alt="" />
                  </div>
                  <div>
                    <p>e</p>
                    <img src="asset/CONTOH SUB 2E.png" alt="" />
                  </div>
                  <div class="container">
                    <div class="wadah"><b>Jawaban Anda</b>

                      <br>
                      <input type="checkbox" id="n" class="kol" onclick="return  limitt();" name="3[]" value="A">
                      <label for="n"> A</label>
                      <input type="checkbox" id="n1" class="kol" onclick="return  limitt();" name="3[]" value="B">
                      <label for="n1"> B</label>
                      <input type="checkbox" id="n2" class="kol" onclick="return  limitt();" name="3[]" value="C">
                      <label for="n2">C</label>
                      <input type="checkbox" id="n3" class="kol" onclick="return  limitt();" name="3[]" value="D">
                      <label for="n3">D</label>
                      <input type="checkbox" id="n4" class="kol" onclick="return  limitt();" name="3[]" value="E">
                      <label for="n4">E</label>
                    </div>
                  </div>
                </div>
              </li>
            </div>

            <div class="container mb-3">
              <li>

                <div class="container mb-3" style=" margin-left:10px ;">

                  <div>
                    <p>a</p>
                    <img src="asset/CONTOH SUB 22A.png" alt="" />
                  </div>
                  <div>
                    <p>b</p>
                    <img src="asset/CONTOH SUB 22B.png" alt="" />
                  </div>
                  <div>
                    <p>c</p>
                    <img src="asset/CONTOH 22C.png" alt="" />
                  </div>
                  <div>
                    <p>d</p>
                    <img src="asset/CONTOH 22D.png" alt="" />
                  </div>
                  <div>
                    <p>e</p>
                    <img src="asset/CONTOH 22E.png" alt="" />
                  </div>
                  <div class="container">
                    <div class="wadah"><b>Jawaban Anda</b>
                      <br>
                      <input type="checkbox" id="n" class="koll" onclick="return  limit();" name="4[]" value="A">
                      <label for="n"> A</label>
                      <input type="checkbox" id="n1" class="koll" onclick="return  limit();" name="4[]" value="B">
                      <label for="n1"> B</label>
                      <input type="checkbox" id="n2" class="koll" onclick="return  limit();" name="4[]" value="C">
                      <label for="n2">C</label>
                      <input type="checkbox" id="n3" class="koll" onclick="return  limit();" name="4[]" value="D">
                      <label for="n3">D</label>
                      <input type="checkbox" id="n4" class="koll" onclick="return  limit();" name="4[]" value="E">
                      <label for="n4">E</label>
                    </div>
                  </div>
                </div>
              </li>
            </div>
          </div>
        </ol>


        <button type="submit" class="btn btn-warning text-light">mulai</button>
      </div>
  </form>

  </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <script src="intruksi2.js"></script>
</body>

</html>