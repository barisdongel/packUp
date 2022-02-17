<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<!-- Main Content -->
<div class="main-content">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Tanım Ekle</h4>
      </div>
      <form action="../islem.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Tanım Adı</label>
            <input type="text" name="tanim_ad" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Tanım Boyutu</label>
            <input type="text" name="tanim_boyut" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-hotel"></i> Tanım Adeti</label>
            <input type="text" name="tanim_adet" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fa fa-file"></i> Tanım Kilogram</label>
            <input type="text" name="tanim_kg" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-question-circle"></i> Tanım Tür</label>
            <select name="tanim_tur" class="form-control" id="tanim_tur">
              <option value="kagit">Kağıt Tanımları</option>
							<option value="hortum">Hortum Tanımları</option>
							<option value="lak">Lak Tanımları</option>
							<option value="selefon">Selefon Tanımları</option>
							<option value="metalize">Metalize Tanımları</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-12 text-right">
        <a class="btn btn-warning" href="tanimlar.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
        <button class="btn btn-info" type="submit" name="tanimekle">Ekle</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
