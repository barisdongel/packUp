<?php
include 'baglan.php';

//verilerin çekileceği sitelere bağlanıyoruz
$connect_dolar = "https://kur.doviz.com/serbest-piyasa/amerikan-dolari";
$connect_euro = "https://kur.doviz.com/serbest-piyasa/euro";
$datadolar = file_get_contents($connect_dolar);
$dataeuro = file_get_contents($connect_euro);

//verileri siteden bulup işliyoruz
preg_match_all('@<div data-socket-key="USD" data-socket-type="C" data-socket-attr="s" class="text-xl font-semibold text-white">(.*?)</div>@si', $datadolar, $baslikdolar);
preg_match_all('@<div data-socket-key="EUR" data-socket-type="C" data-socket-attr="s" class="text-xl font-semibold text-white">(.*?)</div>@si', $dataeuro, $baslikeuro);
$dolarvirgulllu=implode("", $baslikdolar[1]);
$eurovirgullu=implode("", $baslikeuro[1]);

//virgüllü gelen veriyi noktalı hale çeviriyoruz
$dolar = str_replace(",",".",$dolarvirgulllu);
$euro = str_replace(",",".",$eurovirgullu);

//veritabanında döviz kurlarını güncelleme
$dovizguncelle=$db->prepare("UPDATE doviz_tbl SET
  dolar_satis=:dolarsatis,
  euro_satis=:eurosatis
  WHERE id=1
  ");
  $update=$dovizguncelle->execute(array(
    'dolarsatis' => $dolar,
    'eurosatis' => $euro
  ));

  $id=1;
  ?>
