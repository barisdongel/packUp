<?php include 'header.php' ?>
<?php include 'sidebar.php';
$stoksor=$db->prepare("SELECT * FROM stokmalzeme_tbl where id=:id");
$stoksor->execute(array("id" => $_GET['id']));
$stokcek=$stoksor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4>Stok Düzenle</h4>
			</div>

			<form action="../islem.php" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?=$stokcek['id']; ?>">

				<div class="card-body">
					<div class="form-group">
						<label><i class="fa fa-heading"></i> Ürün Adı</label>
						<input type="text" name="urun_ad" class="form-control" value="<?=$stokcek['urun_ad'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fa fa-file"></i> Ürün Açıklaması</label>
						<input type="text" name="urun_aciklama" class="form-control" value="<?=$stokcek['urun_aciklama'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-hotel"></i> Ürün Birimi</label>
						<input type="text" name="urun_birim" class="form-control" value="<?=$stokcek['urun_birim'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-map-pin"></i> Ürün Fiyatı</label>
						<input type="text" name="urun_fiyat" class="form-control" value="<?=$stokcek['urun_fiyat'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-user"></i> Ürün Mevcut Stoğu</label>
						<input type="text" name="urun_mevcutstok" class="form-control" value="<?=$stokcek['urun_mevcutstok'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-user"></i> Ürün Genel Stoğu</label>
						<input type="text" name="urun_genelstok" class="form-control" value="<?=$stokcek['urun_genelstok'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-user"></i> Ürün Harcanan Stoğu</label>
						<input type="text" name="urun_harcananstok" class="form-control" value="<?=$stokcek['urun_harcananstok'] ?>">
					</div>
				</div>
			</div>
			<div class="col-md-12 text-right">
				<a class="btn btn-warning" href="stok.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
				<button class="btn btn-info" type="submit" name="stokduzenle">Ekle</button>
			</div>
		</form>
</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
