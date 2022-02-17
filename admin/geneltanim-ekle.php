<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<!-- Main Content -->
<div class="main-content">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Genel Tanım Ekle</h4>
      </div>
      <form action="../islem.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label><i class="fa fa-heading"></i> İşçilik Maaliyeti</label>
            <input type="text" name="iscilik_maaliyet" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Tasarım Maaliyeti</label>
            <input type="text" name="tasarim_maaliyet" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-hotel"></i> Baskı Maaliyeti</label>
            <input type="text" name="baski_maaliyet" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fa fa-file"></i> Diğer Maaliyetler</label>
            <input type="text" name="diger_maaliyet" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-md-12 text-right">
        <a class="btn btn-warning" href="geneltanimlar.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
        <button class="btn btn-info" type="submit" name="geneltanimekle">Ekle</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
