<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<!-- Main Content -->
<div class="main-content">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Alış Ekle</h4>
      </div>
      <form action="../islem.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Firma Adı</label>
            <input type="text" name="alis_firmaad" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fa fa-heading"></i> Firma Vergi No</label>
            <input type="text" name="alis_firmavergino" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-hotel"></i> Firma Vergi Dairesi</label>
            <input type="text" name="alis_firmavergidairesi" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fa fa-file"></i> Fatura No</label>
            <input type="text" name="alis_faturano" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-heading"></i> Ürün Adı</label>
            <input type="text" name="alis_urunadi" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-sort-amount-up"></i> Ürün Birimi</label>
            <input type="text" name="alis_urunbirim" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-layer-group"></i> Ürün Adedi</label>
            <input type="text" name="alis_urunadedi" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-comment-alt"></i> Ürün Açıklaması</label>
            <input type="text" name="alis_aciklama" class="form-control">
          </div>
          <div class="form-group">
            <label><i class="fas fa-question-circle"></i>  Teslim Durumu</label>
            <select name="alis_teslimdurumu" class="form-control" id="alis_teslimdurumu">
              <option value="0">Teslim Edilmedi</option>
              <option value="1">Teslim Edildi</option>
            </select>
          </div>
          <div class="form-group">
            <label><i class="fas fa-question-circle"></i> Teslim Alınan Adet</label>
            <input type="text" name="alis_teslimalinanadet" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-md-12 text-right">
        <a class="btn btn-warning" href="alis.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
        <button class="btn btn-info" type="submit" name="alisekle">Ekle</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
