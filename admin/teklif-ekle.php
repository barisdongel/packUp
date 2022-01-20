<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- Main Content -->
<div class="main-content">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Teklif Ekle</h4>
      </div>
      <form action="../islem.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Firma Adı</label>
            <input type="text" name="teklif_firmaad" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fa fa-file"></i> Firma Vergi No</label>
            <input type="text" name="teklif_firmavergino" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-clock"></i> Sipariş Tarihi</label>
            <input type="date" name="teklif_siparistarihi" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fab fa-product-hunt"></i> Satılabilir Ürün Seçenekleri</label>
            <input type="text" name="teklif_satilabilirurunsecenekleri" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-cubes"></i> Ürün Adedi</label>
            <input type="text" name="teklif_urunadedi" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-scroll"></i> Kağıt Türü</label>
            <input type="text" name="teklif_kagitturu" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-sort-amount-up"></i> Baskı Tutarı</label>
            <input type="text" name="teklif_baskitutari" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-question-circle"></i>  Lak Varmı?</label>
            <select name="teklif_lakvarmi" class="form-control" id="teklif_lakvarmi">
              <option value="0">Evet</option>
              <option value="1">Hayır</option>
            </select>
          </div>
          <div class="form-group">
            <label><i class="fas fa-question-circle"></i>  Metalize Varmı?</label>
            <select name="teklif_metalizevarmi" class="form-control" id="teklif_metalizevarmi">
              <option value="0">Evet</option>
              <option value="1">Hayır</option>
            </select>
          </div>
          <div class="form-group">
            <label><i class="fas fa-question-circle"></i>  Kırım Varmı?</label>
            <select name="teklif_kirimvarmi" class="form-control" id="teklif_metalizevarmi">
              <option value="0">Evet</option>
              <option value="1">Hayır</option>
            </select>
          </div>
          <div class="form-group">
            <label><i class="fas fa-question-circle"></i>  Delik Varmı?</label>
            <select name="teklif_delikvarmi" class="form-control" id="teklif_metalizevarmi">
              <option value="0">Evet</option>
              <option value="1">Hayır</option>
            </select>
          </div>
          <div class="form-group">
            <label><i class="fas fa-users"></i> Üretimde çalışacak İşçi Sayısı</label>
            <input type="number" name="teklif_iscisayisi" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-md-12 text-right">
        <a class="btn btn-warning" href="teklif.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
        <button class="btn btn-info" type="submit" name="teklifekle">Ekle</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
