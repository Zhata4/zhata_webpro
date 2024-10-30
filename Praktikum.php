<?php

$angka1 = 7;
echo "angka ke 1 = $angka1 <br>";

$angka2 = 8;
echo "angka ke 2 = $angka2 <br>";

$angka3 = 2;
echo "angka ke 3 = $angka3 <br>";

$menu = 3;

$rata = ($angka1 + $angka2 + $angka3)/3;

$jumlah = $angka1 + $angka2 + $angka3;

if ($menu == 1){
    echo "Rata-Rata = $rata";
}elseif ($menu == 2){
    echo "Penjumlahan = $jumlah";
}elseif ($menu == 3){ 
    echo "Rata-Rata = $rata <br>";
    echo "Penjumlahan = $jumlah";
}else{
    echo "Tidak ada pilihan";
}

?>