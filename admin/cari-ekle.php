<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<!-- Main Content -->
<div class="main-content">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Cari Ekle</h4>
      </div>
      <form action="../islem.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Firma Adı</label>
            <input type="text" name="firma_ad" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fa fa-file"></i> Vergi No</label>
            <input type="text" name="vergi_no" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-hotel"></i> Vergi Dairesi</label>
            <input type="text" name="vergi_dairesi" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-map-pin"></i> Adres</label>
            <input type="text" name="adres" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-user"></i> Yetkili Kişi</label>
            <input type="text" name="yetkili_kisi" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-user"></i> İrtibat Kişisi</label>
            <input type="text" name="irtibat_kisisi" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-md-12 text-right">
        <a class="btn btn-warning" href="cari.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
        <button class="btn btn-info" type="submit" name="cariekle">Ekle</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
