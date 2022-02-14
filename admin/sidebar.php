<?php
$kullanicisor =$db->prepare("SELECT * FROM kullanici_tbl WHERE kullanici_ad=:ad");
$kullanicisor->execute(array(
  'ad' => $_SESSION['kullanici_ad']
));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <ul class="sidebar-menu">
      <li class="dropdown active" style="display: block;">
        <div class="sidebar-profile">
          <div class="siderbar-profile-pic">
            <img src="<?php echo $kullanicicek['kullanici_foto'] ?>" class="profile-img-circle box-center" alt="User Image">
          </div>
          <div class="siderbar-profile-details">
            <div class="siderbar-profile-name">HOŞGELDİN</div>
            <div class="siderbar-profile-name text-warning"><?php echo $_SESSION['kullanici_ad'] ?> </div>
            <div class="sidebar-profile-position">
              <?php if ($kullanicicek['kullanici_yetki']==0) {
                echo "Yetki : Root";
              }elseif ($kullanicicek['kullanici_yetki']==1) {
                echo "Yetki: Yönetici";
              }else{echo "Yetki: Üye";}
              ?></div>
            </div>
          </div>
        </li>
        <li class="menu-header">Admin Menü</li>
        <li><a class="nav-link" href="index.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
        <?php if($kullanicicek['kullanici_yetki']<=1) { ?>
          <li><a class="nav-link" href="cari.php"><i class="fas fa-chart-bar"></i><span>Cari</span></a></li>
          <li><a class="nav-link" href="stok.php"><i class="fas fa-warehouse"></i><span>Stok-Malzeme</span></a></li>
          <li><a class="nav-link" href="alis.php"><i class="fas fa-shopping-basket"></i><span>Alış</span></a></li>
          <li><a class="nav-link" href="urun.php"><i class="fab fa-product-hunt"></i><span>Üretilmiş Ürün</span></a></li>
          <li><a class="nav-link" href="teklif.php"><i class="fas fa-hand-holding-usd"></i><span>Teklif</span></a></li>
          <li><a class="nav-link" href="siparis.php"><i class="fas fa-shopping-cart"></i><span>Sipariş</span></a></li>
          <?php if ($kullanicicek['kullanici_yetki']==0) { ?>
            <li><a class="nav-link" href="kullanicilar.php"><i class="fas fa-user"></i><span>Kullanıcı Ayarları</span></a></li>
          <?php } ?>
        <?php } ?>
        <li><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Çıkış Yap</span></a></li>
      </ul>
    </aside>
  </div>
