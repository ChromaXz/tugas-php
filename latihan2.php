<?php
//fungsi if
//jika umur lebih dari 20 tahun maka anda dapat mengendarai mobil, selain itu tidak boleh
//jika umur lebih 17 tahun, maka anda dapat mengendarai motor
//jika umur lebih 10 tahun, maka anda dapat mengendarai sepeda
$umur = 19;
if ($umur > 20) {
    echo " Anda dapat mengendarai mobil";
} else if ($umur >= 17 && $umur <= 20){
    echo "anda dapat mengendarai motor";
} else if ($umur >= 10 && $umur < 17){
    echo "anda dapat mengendarai sepeda";
} else {
    echo "anda tidak dapat mengendarai apapun";
}
echo "<hr>";

//jika umur < 40 dan umur >= 17 keterangan dewasa
//jika umur < 17 dan umur >= 9 keterangan remaja
//jika umur < 9 dan umur > 5 keterangan anak-anak
//jika umur <= 5 dan umur > 0 keterangan balita
//selain itu umur > 40 keterangan tua
//JAWABAN

$umur1 = 20;
if ($umur1 >= 40) {
    echo " Umur Saya $umur1 saya Tua";
} else if ($umur1 >= 17 && $umur1 < 40){
    echo " Umur Saya $umur1 saya Dewasa";
} else if ($umur1 < 17 && $umur1 >= 9){
    echo "Umur saya $umur1 saya remaja";
} else if ($umur1 < 9 && $umur1 > 5){
    echo "Umur saya $umur1 saya anak anak";
} else {
    echo " umur saya $umur1 saya balita hehe";
}
echo "<br>";

//menggunakan cara ternary
//soal: jika nilai > 6 maka nilai baik jika tidak maka nilai buruk
$nilai = 8;
echo $nilai > 6? "Baik" : "Buruk";
?>