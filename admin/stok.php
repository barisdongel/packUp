<?php include 'header.php' ?>
<?php include 'sidebar.php';

$stoksor=$db->prepare("SELECT * FROM stokmalzeme_tbl ORDER BY id ASC");
$stoksor->execute();
$say=$stoksor->rowCount();

if (isset($_POST['arama'])) {
	$aranan=$_POST['aranan'];
	$stoksor=$db->prepare("SELECT * FROM stokmalzeme_tbl WHERE urun_ad LIKE '%$aranan%' ORDER BY id ASC");
	$stoksor->execute();
	$say=$stoksor->rowCount();
}
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<h4 class="text-center p-3">Stok - Malzeme Ekranı</h4>

			<form action="../islem.php" method="POST">
				<table class="table table-striped table-md text-center">
					<tr>
						<th class="text-center">Ürün Adı</th>
						<th>Ürün Açıklaması</th>
						<th>Ürün Birimi</th>
						<th>Ürün Fiyatı</th>
						<th>Ürün Mevcut Stoğu</th>
						<th>Ürün Genel Stoğu</th>
						<th>Ürün Harcanan Stoğu<th>
						<th style="width: 15%;"><a href="stok-ekle.php" class="btn btn-success"><i class="fa fa-plus"></i> Yeni Ekle</a></th>
					</tr>

					<?php while ($stokcek=$stoksor->fetch(PDO::FETCH_ASSOC)) {
						$urun_id=$stokcek['id'];
						?>
						<tr>
							<td class="text-center"><?=$stokcek['urun_ad']; ?></td>
							<td style="width:16%;"><?=$stokcek['urun_aciklama']; ?></td>
							<td style="width:16%;"><?=$stokcek['urun_birim']; ?></td>
							<td style="width:16%;"><?=$stokcek['urun_fiyat']; ?></td>
							<td style="width:16%;"><?=$stokcek['urun_mevcutstok']; ?></td>
							<td style="width:16%;"><?=$stokcek['urun_genelstok']; ?></td>
							<td style="width:16%;"><?=$stokcek['urun_harcananstok']; ?></td>
							<td><a href="stok-duzenle.php?id=<?=$stokcek['id'] ?>" class="btn btn-outline-info"><i class="fa fa-pencil-alt"></i> Düzenle</a></td>
							<td><a href="../islem.php?stoksil=ok&id=<?=$stokcek['id'] ?>" onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-outline-primary p-3"><i class="fa fa-trash"></i> Sil</a></td>
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
