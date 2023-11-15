<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person = new Person("Karim","Kandang Mas");

// manipulasi properti nama, alamat, negara
$person->nama = "Karim,";
$person->alamat = "Kandang Mas,";
$person->negara = "Indonesia,";

// menampilkan hasil
echo "nama = {$person->nama}";
echo "alamat = {$person->alamat}";
echo "negara = {$person->negara}";
