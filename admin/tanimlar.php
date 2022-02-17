<?php include 'header.php' ?>
<?php include 'sidebar.php';

$tanimsor=$db->prepare("SELECT * FROM tanimlar_tbl ORDER BY id ASC");
$tanimsor->execute();
$say=$tanimsor->rowCount();
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<h4 class="text-center p-3">Tanımlar</h4>

			<form action="../islem.php" method="POST">
				<table class="table table-striped table-md">
					<tr>
						<th class="text-center">Adı</th>
						<th>Boyutu</th>
						<th>Adet</th>
						<th>Kilogram</th>
						<th>Tür</th>
						<th></th>
						<th style="width: 15%;"><a href="tanim-ekle.php" class="btn btn-success"><i class="fa fa-plus"></i> Yeni Ekle</a></th>
					</tr>

					<?php while ($tanimcek=$tanimsor->fetch(PDO::FETCH_ASSOC)) {
						$tanim_id=$tanimcek['id'];
						?>
						<tr>
							<td class="text-center"><?=$tanimcek['tanim_ad']; ?></td>
							<td style="width:16%;"><?=$tanimcek['tanim_boyut']; ?></td>
							<td style="width:16%;"><?=$tanimcek['tanim_adet']; ?></td>
							<td style="width:16%;"><?=$tanimcek['tanim_kg']; ?></td>
							<td style="width:16%;"><?=$tanimcek['tanim_tur']; ?></td>
							<td><a href="tanim-duzenle.php?id=<?=$tanimcek['id'] ?>" class="btn btn-outline-info"><i class="fa fa-pencil-alt"></i> Düzenle</a></td>
							<td><a href="../islem.php?tanimsil=ok&id=<?=$tanimcek['id'] ?>" onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-outline-primary p-3"><i class="fa fa-trash"></i> Sil</a></td>
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
