<?php include 'header.php' ?>
<?php include 'sidebar.php';
$urunsor=$db->prepare("SELECT * FROM satilabilirurun_tbl where id=:id");
$urunsor->execute(array("id" => $_GET['id']));
$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4>Ürün Düzenle</h4>
			</div>

			<form action="../islem.php" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?=$uruncek['id']; ?>">

				<div class="card-body">
					<div class="form-group">
						<label><i class="fa fa-heading"></i> Satılacak Ürün</label>
						<input type="text" name="surun_satilacakurun" class="form-control" value="<?=$uruncek['surun_satilacakurun'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-hand-holding-usd"></i> Birim Başına Maaliyet</label>
						<input type="text" name="surun_birimbasinamaaliyet" class="form-control" value="<?=$uruncek['surun_birimbasinamaaliyet'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-clock"></i> Saatlik Ortalama Üretim</label>
						<input type="text" name="surun_saatlikortalamauretim" class="form-control" value="<?=$uruncek['surun_saatlikortalamauretim'] ?>">
					</div>
				</div>
			</div>
			<div class="col-md-12 text-right">
				<a class="btn btn-warning" href="urun.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
				<button class="btn btn-info" type="submit" name="urunduzenle">Ekle</button>
			</div>
		</form>
</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
