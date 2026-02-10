<?php
  // mengkoneksikan applikasi dgn database
  $koneksi = mysqli_connect("localhost", "root", "", "akademik");

  // cek koneksi
  if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
  }
?>