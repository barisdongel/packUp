<?php include 'header.php' ?>
<?php include 'sidebar.php';

$geneltanimsor=$db->prepare("SELECT * FROM geneltanim_tbl ORDER BY id ASC");
$geneltanimsor->execute();
$say=$geneltanimsor->rowCount();
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<h4 class="text-center p-3">Genel Tanımlar</h4>

			<form action="../islem.php" method="POST">
				<table class="table table-striped table-md">
					<tr>
						<th class="text-center">İşçilik Maaliyeti</th>
						<th>Tasarım Maaliyeti</th>
						<th>Baskı Maaliyeti</th>
						<th>Diğer Maaliyetler</th>
						<th></th>
						<th style="width: 15%;"><a href="geneltanim-ekle.php" class="btn btn-success"><i class="fa fa-plus"></i> Yeni Ekle</a></th>
					</tr>

					<?php while ($geneltanim=$geneltanimsor->fetch(PDO::FETCH_ASSOC)) {
						$genel_id=$geneltanim['id'];
						?>
						<tr>
							<td class="text-center"><?=$geneltanim['iscilik_maaliyet']; ?></td>
							<td style="width:16%;"><?=$geneltanim['tasarim_maaliyet']; ?></td>
							<td style="width:16%;"><?=$geneltanim['baski_maaliyet']; ?></td>
							<td style="width:16%;"><?=$geneltanim['diger_maaliyet']; ?></td>
							<td><a href="geneltanim-duzenle.php?id=<?=$geneltanim['id'] ?>" class="btn btn-outline-info"><i class="fa fa-pencil-alt"></i> Düzenle</a></td>
							<td><a href="../islem.php?geneltanimsil=ok&id=<?=$geneltanim['id'] ?>" onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-outline-primary p-3"><i class="fa fa-trash"></i> Sil</a></td>
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
