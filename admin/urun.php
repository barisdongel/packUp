<?php include 'header.php' ?>
<?php include 'sidebar.php';

$urunsor=$db->prepare("SELECT * FROM satilabilirurun_tbl ORDER BY id ASC");
$urunsor->execute();
$say=$urunsor->rowCount();

if (isset($_POST['arama'])) {
	$aranan=$_POST['aranan'];
	$urunsor=$db->prepare("SELECT * FROM satilabilirurun_tbl WHERE surun_satilacakurun LIKE '%$aranan%' ORDER BY id ASC");
	$urunsor->execute();
	$say=$urunsor->rowCount();
}
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<h4 class="text-center p-3">Satilabilir Üretilmiş Ürün Ekranı</h4>

			<form action="../islem.php" method="POST">
				<table class="table table-striped table-md">
					<tr>
						<th class="text-center">Satilacak Ürün</th>
						<th>Birim Başına Maaliyet</th>
						<th>Saatlik Ortalama Üretim</th>
						<th></th>
						<th style="width: 15%;"><a href="urun-ekle.php" class="btn btn-success"><i class="fa fa-plus"></i> Yeni Ekle</a></th>
					</tr>

					<?php while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
						$urun_id=$uruncek['id'];
						?>
						<tr>
							<td class="text-center"><?=$uruncek['surun_satilacakurun']; ?></td>
							<td style="width:16%;"><?=$uruncek['surun_birimbasinamaaliyet']; ?></td>
							<td style="width:16%;"><?=$uruncek['surun_saatlikortalamauretim']; ?></td>
							<td><a href="urun-duzenle.php?id=<?=$uruncek['id'] ?>" class="btn btn-outline-info"><i class="fa fa-pencil-alt"></i> Düzenle</a></td>
							<td><a href="../islem.php?urunsil=ok&id=<?=$uruncek['id'] ?>" onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-outline-primary p-3"><i class="fa fa-trash"></i> Sil</a></td>
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
