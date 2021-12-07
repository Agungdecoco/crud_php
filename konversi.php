<?php

include 'koneksi.php';

function konversi($mean){

  if ($mean >= 90) {
    $ipk = "A";
  } elseif ($mean >= 80) {
    $ipk = "B";
  } elseif ($mean >= 70) {
    $ipk = "C";
  } elseif ($mean >= 60) {
    $ipk = "D";
  } else {
    $ipk = "E";
  }
  return $ipk;
}


?>
