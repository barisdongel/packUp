<?php include 'header.php' ?>
<?php include 'sidebar.php';
$teklifsor=$db->prepare("SELECT * FROM teklifekrani_tbl where id=:id");
$teklifsor->execute(array("id" => $_GET['id']));
$teklifcek=$teklifsor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4>Teklif Düzenle</h4>
			</div>

			<form action="../islem.php" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?=$teklifcek['id']; ?>">

				<div class="card-body">
					<div class="form-group">
						<label><i class="fa fa-heading"></i> Sipariş veren Firma Adı</label>
						<input type="text" name="teklif_firmaad" class="form-control" value="<?=$teklifcek['teklif_firmaad'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fa fa-file"></i> Firma Vergi No</label>
						<input type="text" name="teklif_firmavergino" class="form-control" value="<?=$teklifcek['teklif_firmavergino'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-clock"></i> Sipariş Tarihi</label>
						<input type="text" name="teklif_siparistarihi" class="form-control" value="<?=$teklifcek['teklif_siparistarihi'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fab fa-product-hunt"></i> Satılabilir Üretilmiş Ürün Seçenekleri</label>
						<input type="text" name="teklif_satilabilirurunsecenekleri" class="form-control" value="<?=$teklifcek['teklif_satilabilirurunsecenekleri'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-cubes"></i> Ürün Adedi</label>
						<input type="text" name="teklif_urunadedi" class="form-control" value="<?=$teklifcek['teklif_urunadedi'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-scroll"></i> Kağıt Türü</label>
						<input type="text" name="teklif_kagitturu" class="form-control" value="<?=$teklifcek['teklif_kagitturu'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-sort-amount-up"></i> Baskı Tutarı</label>
						<input type="text" name="teklif_baskitutari" class="form-control" value="<?=$teklifcek['teklif_baskitutari'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-question-circle"></i>  Lak Var mı ?</label>
						<select name="teklif_lakvarmi" class="form-control" id="alis_teslimdurumu">
							<?php if ($teklifcek['teklif_lakvarmi'] == 0) {?>
								<option value="0">Yok</option>
								<option value="1">Var</option>
							<?php }else {?>
								<option value="1">Var</option>
								<option value="0">Yok</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label><i class="fas fa-question-circle"></i>  Metalize Varmı?</label>
						<select name="teklif_metalizevarmi" class="form-control" id="teklif_metalizevarmi">
							<?php if ($teklifcek['teklif_metalizevarmi'] == 0) {?>
								<option value="0">Yok</option>
								<option value="1">Var</option>
							<?php }else {?>
								<option value="1">Var</option>
								<option value="0">Yok</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label><i class="fas fa-question-circle"></i>  Kırım Varmı?</label>
						<select name="teklif_kirimvarmi" class="form-control" id="teklif_kirimvarmi">
							<?php if ($teklifcek['teklif_kirimvarmi'] == 0) {?>
								<option value="0">Yok</option>
								<option value="1">Var</option>
							<?php }else {?>
								<option value="1">Var</option>
								<option value="0">Yok</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label><i class="fas fa-question-circle"></i>  Delik Varmı</label>
						<select name="teklif_delikvarmi" class="form-control" id="teklif_delikvarmi">
							<?php if ($teklifcek['teklif_delikvarmi'] == 0) {?>
								<option value="0">Yok</option>
								<option value="1">Var</option>
							<?php }else {?>
								<option value="1">Var</option>
								<option value="0">Yok</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label><i class="fas fa-users"></i> Üretimde çalışacak İşçi Sayısı</label>
						<input type="text" name="teklif_iscisayisi" class="form-control" value="<?=$teklifcek['teklif_iscisayisi'] ?>">
					</div>
				</div>
			</div>
			<div class="col-md-12 text-right">
				<a class="btn btn-warning" href="teklif.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
				<button class="btn btn-info" type="submit" name="teklifduzenle">Ekle</button>
			</div>
		</form>
</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
