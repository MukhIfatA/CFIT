<?php
$ch = curl_init();

$url = 'http://192.168.1.50:8000/api/Cfit/Store';

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POST, 1);

$data = array(
    'nama' => $_POST['nama'],
    'nik' => $_POST['nik'],
    'hasil_test_1' => $_POST['sub1'],
    'hasil_test_2' => $_POST['sub2'],
    'hasil_test_3' => $_POST['sub3'],
    'hasil_test_4' => $_POST['sub4'],

);
// echo $_POST['nama'];
$post_fields = http_build_query($data);

curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}
// $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// if ($httpCode != 200) {
// echo 'HTTP Error: ' . $httpCode;
// }

curl_close($ch);

// Proses respons
echo $response;
?>