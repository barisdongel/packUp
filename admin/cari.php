<?php include 'header.php' ?>
<?php include 'sidebar.php';

$carisor=$db->prepare("SELECT * FROM cariekrani_tbl ORDER BY id ASC");
$carisor->execute();
$say=$carisor->rowCount();

if (isset($_POST['arama'])) {
	$aranan=$_POST['aranan'];
	$carisor=$db->prepare("SELECT * FROM cariekrani_tbl WHERE firma_ad LIKE '%$aranan%' ORDER BY id ASC");
	$carisor->execute();
	$say=$carisor->rowCount();
}
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<h4 class="text-center p-3">Cari Ekranı</h4>

			<form action="../islem.php" method="POST">
				<table class="table table-striped table-md">
					<tr>
						<th class="text-center">Firma Adı</th>
						<th>Vergi No</th>
						<th>Vergi Dairesi</th>
						<th>Adres</th>
						<th>Yetkili Kişi</th>
						<th>İrtibat Kişisi</th>
						<th></th>
						<th style="width: 15%;"><a href="cari-ekle.php" class="btn btn-success"><i class="fa fa-plus"></i> Yeni Ekle</a></th>
					</tr>

					<?php while ($caricek=$carisor->fetch(PDO::FETCH_ASSOC)) {
						$urun_id=$caricek['id'];
						?>
						<tr>
							<td class="text-center"><?=$caricek['firma_ad']; ?></td>
							<td style="width:16%;"><?=$caricek['vergi_no']; ?></td>
							<td style="width:16%;"><?=$caricek['vergi_dairesi']; ?></td>
							<td style="width:16%;"><?=$caricek['adres']; ?></td>
							<td style="width:16%;"><?=$caricek['yetkili_kisi']; ?></td>
							<td style="width:16%;"><?=$caricek['irtibat_kisisi']; ?></td>
							<td><a href="cari-duzenle.php?id=<?=$caricek['id'] ?>" class="btn btn-outline-info"><i class="fa fa-pencil-alt"></i> Düzenle</a></td>
							<td><a href="../islem.php?carisil=ok&id=<?=$caricek['id'] ?>" onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-outline-primary p-3"><i class="fa fa-trash"></i> Sil</a></td>
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
