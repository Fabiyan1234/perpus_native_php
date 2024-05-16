<?php 
$nilai = 50 ;

if($nilai > 90){
    echo "Predikat : A+";
}elseif ($nilai > 80 && $nilai <= 90) {
    echo "Predikat : A";
}elseif ($nilai > 70 && $nilai <= 80) {
    echo "Predikat : B+";
}elseif ($nilai > 60 && $nilai <= 70) {
    echo "Predikat : B";
}elseif ($nilai > 50 && $nilai <= 60) {
    echo "Predikat : C+";
}elseif ($nilai > 40 && $nilai <= 50) {
    echo "Predikat : C";
}elseif ($nilai > 30 && $nilai <= 40) {
    echo "Predikat : D";
}elseif ($nilai <= 30) {
    echo "Predikat : E";
}
?>