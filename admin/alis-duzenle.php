<?php include 'header.php' ?>
<?php include 'sidebar.php';
$alissor=$db->prepare("SELECT * FROM alisekrani_tbl where id=:id");
$alissor->execute(array("id" => $_GET['id']));
$aliscek=$alissor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4>Alış Düzenle</h4>
			</div>

			<form action="../islem.php" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?=$aliscek['id']; ?>">

				<div class="card-body">
					<div class="form-group">
						<label><i class="fa fa-heading"></i> Firma Adı</label>
						<input type="text" name="alis_firmaad" class="form-control" value="<?=$aliscek['alis_firmaad'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fa fa-file"></i> Firma Vergi No</label>
						<input type="text" name="alis_firmavergino" class="form-control" value="<?=$aliscek['alis_firmavergino'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-hotel"></i> Firma Vergi Dairesi</label>
						<input type="text" name="alis_firmavergidairesi" class="form-control" value="<?=$aliscek['alis_firmavergidairesi'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-file-excel"></i> Fatura No</label>
						<input type="text" name="alis_faturano" class="form-control" value="<?=$aliscek['alis_faturano'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-heading"></i> Ürün Adı</label>
						<input type="text" name="alis_urunadi" class="form-control" value="<?=$aliscek['alis_urunadi'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-sort-amount-up"></i> Ürün Birim</label>
						<input type="text" name="alis_urunbirim" class="form-control" value="<?=$aliscek['alis_urunbirim'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-layer-group"></i> Ürün Adedi</label>
						<input type="text" name="alis_urunadedi" class="form-control" value="<?=$aliscek['alis_urunadedi'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-comment-alt"></i> Açıklama</label>
						<input type="text" name="alis_aciklama" class="form-control" value="<?=$aliscek['alis_aciklama'] ?>">
					</div>
					<div class="form-group">
						<label><i class="fas fa-question-circle"></i>  Teslim Durumu</label>
						<select name="alis_teslimdurumu" class="form-control" id="alis_teslimdurumu">
							<?php if ($aliscek['alis_teslimdurumu'] == 0) {?>
								<option value="0">Teslim Edilmedi</option>
								<option value="1">Teslim Edildi</option>
							<?php }else {?>
								<option value="1">Teslim Edildi</option>
								<option value="0">Teslim Edilmedi</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label><i class="fas fa-question-circle"></i> Teslim Alınan Adet</label>
						<input type="text" name="alis_teslimalinanadet" class="form-control" value="<?=$aliscek['alis_teslimalinanadet'] ?>">
					</div>
				</div>
			</div>
			<div class="col-md-12 text-right">
				<a class="btn btn-warning" href="alis.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
				<button class="btn btn-info" type="submit" name="alisduzenle">Ekle</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
