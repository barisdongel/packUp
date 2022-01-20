<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<!-- Main Content -->
<div class="main-content">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Satılabilir Üretilmiş Ürün Ekle</h4>
      </div>
      <form action="../islem.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Satılacak Ürün</label>
            <input type="text" name="surun_satilacakurun" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-hand-holding-usd"></i> Birim Başına Maaliyet</label>
            <input type="text" name="surun_birimbasinamaaliyet" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-clock"></i> Saatlik Ortalama Üretim</label>
            <input type="text" name="surun_saatlikortalamauretim" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-md-12 text-right">
        <a class="btn btn-warning" href="urun.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
        <button class="btn btn-info" type="submit" name="urunekle">Ekle</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
