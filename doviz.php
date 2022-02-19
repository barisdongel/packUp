<?php
include 'baglan.php';

$connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

$usd_buying = $connect_web->Currency[0]->BanknoteBuying;
$usd_selling = $connect_web->Currency[0]->BanknoteSelling;

$euro_buying = $connect_web->Currency[3]->BanknoteBuying;
$euro_selling = $connect_web->Currency[3]->BanknoteSelling;

//veritabanında döviz kurlarını güncelleme
$dovizguncelle=$db->prepare("UPDATE doviz_tbl SET
  dolar_alis=:dolaralis,
  dolar_satis=:dolarsatis,
  euro_alis=:euroalis,
  euro_satis=:eurosatis
  WHERE id=1
  ");
  $update=$dovizguncelle->execute(array(
    'dolaralis' => $usd_buying,
    'dolarsatis' => $usd_selling,
    'euroalis' => $euro_buying,
    'eurosatis' => $euro_selling
  ));

  $id=1;
  ?>
