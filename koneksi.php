<?php

$koneksi = mysqli_connect('localhost','root','','ukk_spp');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}