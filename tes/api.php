<?php
// URL API yang akan diakses
$api_url = 'https://recruitment.fastprint.co.id/tes/api_tes_programer';

// Data autentikasi (username dan password)
$username = 'tesprogrammer200923C16';
$password = "bisacoding-".date('d/m/Y');

// Data yang akan dikirimkan dalam permintaan POST
$post_data = array(
    'Username' => $username,
    'Password' => $password
);

// Inisialisasi cURL session
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$response = curl_exec($ch);
curl_close($ch);

// Mengecek apakah request berhasil
// if ($response === false) {
//     die('Error: Gagal mengakses API.');
// }

// Menampilkan respons dari API
var_dump($response);
?>
