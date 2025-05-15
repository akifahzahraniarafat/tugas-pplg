<?php
$i=1;
$siswa_kelas10=[
    "Akifah",
    "hela",
    "sahra",
    "pirqah",
    "sila",
    "parira",
    "pausia",
    "lalan",
    "nanad",
    "wiyahh",
    "asisah",
    "tati"
];
$siswa_kelas10[]="keyla";
$siswa_kelas10[]="kinan";
echo"Daftar anggokta kelas 10<br>";
foreach($siswa_kelas10 as $anggota_kelas10){
    echo$i++.".".$anggota_kelas10."</br>";
}