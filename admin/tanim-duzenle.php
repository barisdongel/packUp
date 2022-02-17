<?php include 'header.php' ?>
<?php include 'sidebar.php';
$tanimsor=$db->prepare("SELECT * FROM tanimlar_tbl where id=:id");
$tanimsor->execute(array("id" => $_GET['id']));
$tanimcek=$tanimsor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4>Alış Düzenle</h4>
			</div>

			<form action="../islem.php" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?=$tanimcek['id']; ?>">

				<div class="card-body">
					<div class="form-group">
						<label><i class="fa fa-heading"></i> Tanım Adı</label>
						<input type="text" name="tanim_ad" class="form-control" value="<?=$tanimcek['tanim_ad'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fa fa-file"></i> Tanım Boyut</label>
						<input type="text" name="tanim_boyut" class="form-control" value="<?=$tanimcek['tanim_boyut'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-hotel"></i> Tanım Adet</label>
						<input type="text" name="tanim_adet" class="form-control" value="<?=$tanimcek['tanim_adet'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-file-excel"></i> Tanım Kilogram</label>
						<input type="text" name="tanim_kg" class="form-control" value="<?=$tanimcek['tanim_kg'] ?>">
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
				<button class="btn btn-info" type="submit" name="tanimduzenle">Ekle</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
