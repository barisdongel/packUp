<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<!-- Main Content -->
<div class="main-content">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Stok Ekle</h4>
      </div>
      <form action="../islem.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Ürün Adı</label>
            <input type="text" name="urun_ad" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Ürün Açıklama</label>
            <input type="text" name="urun_aciklama" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-sort-amount-up"></i> Ürün Birim</label>
            <input type="text" name="urun_birim" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-coins"></i> Ürün Fiyatı</label>
            <input type="text" name="urun_fiyat" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-layer-group"></i> Ürün Mevcut Stok</label>
            <input type="text" name="urun_mevcutstok" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-layer-group"></i> Ürün Genel Stok</label>
            <input type="text" name="urun_genelstok" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-layer-group"></i> Ürün Harcanan Stok</label>
            <input type="text" name="urun_harcananstok" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-md-12 text-right">
        <a class="btn btn-warning" href="stok.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
        <button class="btn btn-info" type="submit" name="stokekle">Ekle</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
