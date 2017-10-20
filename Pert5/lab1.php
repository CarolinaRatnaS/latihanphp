<?php
//PENJELASAN
// $2a$10$HaloHaloHaloHaloHalo22
// $2a$ = algoritmanya
// 10$ = cost nya
// HaloHaloHaloHaloHalo22 = passwordnya yg terdiri dari 22 karakter

//ENKRIPSI CARA 1
$string = "rahasikita";

$encrypted = password_hash($string, PASSWORD_BCRYPT);

echo $encrypted;

//CARA 2
$salt = '$2a$10$HaloHaloHaloHaloHalo22';
$encry2 = crypt($string, $salt);

echo "<br />";
echo $encry2;
?>