<?php include 'header.php' ?>
<?php include 'sidebar.php';
$geneltanimsor=$db->prepare("SELECT * FROM geneltanim_tbl where id=:id");
$geneltanimsor->execute(array("id" => $_GET['id']));
$geneltanimcek=$geneltanimsor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4>Genel Tanım Düzenle</h4>
			</div>

			<form action="../islem.php" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?=$geneltanimcek['id']; ?>">

				<div class="card-body">
					<div class="form-group">
						<label><i class="fa fa-heading"></i> İşçilik Maaliyeti</label>
						<input type="text" name="iscilik_maaliyet" class="form-control" value="<?=$geneltanimcek['iscilik_maaliyet'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fa fa-file"></i> Tasarım Maaliyeti</label>
						<input type="text" name="tasarim_maaliyet" class="form-control" value="<?=$geneltanimcek['tasarim_maaliyet'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-hotel"></i> Baski Maaliyeti</label>
						<input type="text" name="baski_maaliyet" class="form-control" value="<?=$geneltanimcek['baski_maaliyet'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-file-excel"></i> Diğer Maaliyet</label>
						<input type="text" name="diger_maaliyet" class="form-control" value="<?=$geneltanimcek['diger_maaliyet'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-question-circle"></i> Döviz Türü</label>
						<select name="doviz_turu" class="form-control" id="doviz_turu">
							<option value="USD">Dolar (USD)</option>
							<option value="EUR">Euro (EUR)</option>
							<option value="TRY">Türk Lirası (TRY)</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-right">
				<a class="btn btn-warning" href="geneltanimlar.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
				<button class="btn btn-info" type="submit" name="geneltanimduzenle">Ekle</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
