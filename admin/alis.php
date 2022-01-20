<?php include 'header.php' ?>
<?php include 'sidebar.php';

$alissor=$db->prepare("SELECT * FROM alisekrani_tbl ORDER BY id ASC");
$alissor->execute();
$say=$alissor->rowCount();

if (isset($_POST['arama'])) {
	$aranan=$_POST['aranan'];
	$alissor=$db->prepare("SELECT * FROM alisekrani_tbl WHERE alis_firmaad LIKE '%$aranan%' ORDER BY id ASC");
	$alissor->execute();
	$say=$alissor->rowCount();
}
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<h4 class="text-center p-3">Alış Ekranı</h4>

			<form action="../islem.php" method="POST">
				<table class="table table-striped table-md">
					<tr>
						<th class="text-center">Firma Adı</th>
						<th>Vergi No</th>
						<th>Vergi Dairesi</th>
						<th>Fatura No</th>
						<th>Ürün Adı</th>
						<th>Ürün Birim</th>
						<th>Ürün Adedi</th>
						<th>Ürün Açıklama</th>
						<th>Ürün Teslim Durumu</th>
						<th>Ürün Teslim Alınan Adedi</th>
						<th></th>
						<th style="width: 15%;"><a href="alis-ekle.php" class="btn btn-success"><i class="fa fa-plus"></i> Yeni Ekle</a></th>
					</tr>

					<?php while ($aliscek=$alissor->fetch(PDO::FETCH_ASSOC)) {
						$urun_id=$aliscek['id'];
						?>
						<tr>
							<td class="text-center"><?=$aliscek['alis_firmaad']; ?></td>
							<td style="width:16%;"><?=$aliscek['alis_firmavergino']; ?></td>
							<td style="width:16%;"><?=$aliscek['alis_firmavergidairesi']; ?></td>
							<td style="width:16%;"><?=$aliscek['alis_faturano']; ?></td>
							<td style="width:16%;"><?=$aliscek['alis_urunadi']; ?></td>
							<td style="width:16%;"><?=$aliscek['alis_urunbirim']; ?></td>
							<td style="width:16%;"><?=$aliscek['alis_urunadedi']; ?></td>
							<td style="width:16%;"><?=$aliscek['alis_aciklama']; ?></td>
							<td style="width:16%;">
								<?php if ($aliscek['alis_teslimdurumu']==0) {?>
									<p>Teslim Edilmedi</p>
								<?php }else {?>
									<p>Teslim Edildi</p>
								<?php } ?>
							</td>
							<td style="width:16%;"><?=$aliscek['alis_teslimalinanadet']; ?></td>
							<td><a href="alis-duzenle.php?id=<?=$aliscek['id'] ?>" class="btn btn-outline-info"><i class="fa fa-pencil-alt"></i> Düzenle</a></td>
							<td><a href="../islem.php?alissil=ok&id=<?=$aliscek['id'] ?>" onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-outline-primary p-3"><i class="fa fa-trash"></i> Sil</a></td>
						</tr>
					<?php } ?>
				</table>
			</div>
			<div class="col-md-12 text-right">
				<a class="btn btn-warning" href="index.php"><i class="fa fa-long-arrow-alt-left"></i> Geri Dön</a>
			</div>
		</form>
	</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
