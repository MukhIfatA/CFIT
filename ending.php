<?php
// error_reporting(0);
// ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Terima Kasih</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <form id="berhasil" method="post">
    <div class="container pt-3">
      <div class="card border-top border-warning">
        <div class="card-body">
          <h5 class="card-title">Terima Kasih telah mengisi Tes</h5>
          <p class="card-text">Kirim Semua Jawaban Anda</p>
          <button name="submit" type="button" class="btn btn-warning text-light" style="width: 100%">Kirim</button>
        </div>
      </div>
    </div>
  </form>

  <script>
    $(document).ready(function () {
      // Retrieve data from localStorage
      // var formData = JSON.parse(localStorage.getItem('formData'));
      if (!sub4) {
        // Redirect to index.php
        window.location.href = 'index.php';
      }
      var sub1 = localStorage.getItem('sub1');
      var sub2 = localStorage.getItem('sub2');
      var sub3 = localStorage.getItem('sub3');
      var sub4 = localStorage.getItem('sub4');
      var data = localStorage.getItem('key');

      // Parse the JSON string into an object
      var parsedData = JSON.parse(data);
      var nik = parsedData[0].nik;
      var nama = parsedData[0].nama;
      console.log(nama);
      console.log(nik);
      console.log(sub1);
      console.log(sub2);
      console.log(sub3);
      console.log(sub4);


      // Send data to the server using AJAX
      $.ajax({
        type: "POST",
        url: "api/api_cfit_kirim.php",
        data: {
          nama: nama,
          nik: nik,
          sub1: sub1,
          sub2: sub2,
          sub3: sub3,
          sub4: sub4
        },
        success: function (response) {
          Swal.fire({
            title: 'Success!',
            text: response,
            icon: 'success',
            confirmButtonText: 'OK'
          }).then((result) => {
            // Check if the user clicked the "OK" button
            if (result.isConfirmed || result.isDismissed) {
              // Redirect to index.php
              window.location.href = 'index.php';
            }
          });
        },
        error: function (xhr, status, error) {
          console.error(xhr.responseText);

        }
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>