<?php
$listMahasiswaJSON ='[
    { "nama": "Nurul Huda"},
    { "nama": "Pabloo"},
    { "nama": "Lumiere"},
    { "nama": "Avia"}
]';

$listMahasiswa = json_decode($listMahasiswaJSON);

foreach ($listMahasiswa as $key => $mahasiswa) {
    echo "{$key}. Nama: {$mahasiswa -> nama} <br>";
}