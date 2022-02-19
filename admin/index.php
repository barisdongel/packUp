<?php
include 'header.php';
include 'sidebar.php';

//İndex istatistikler için sorgular
$kullaniciara =$db->prepare("SELECT * FROM kullanici_tbl");
$kullaniciara->execute();

$kategoriler=$db->prepare("SELECT * FROM kategori_tbl");
$kategoriler->execute();

$calisansor =$db->prepare("SELECT * FROM calisanlar_tbl");
$calisansor->execute();
?>

<!-- Main Content -->
<div class="main-content">

  <?php include 'istatistikler.php'; ?>

</div>
<?php include 'footer.php' ?>
