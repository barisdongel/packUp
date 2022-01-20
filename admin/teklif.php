<?php include 'header.php' ?>
<?php include 'sidebar.php';

$teklifsor=$db->prepare("SELECT * FROM teklifekrani_tbl ORDER BY id ASC");
$teklifsor->execute();
$say=$teklifsor->rowCount();

if (isset($_POST['arama'])) {
	$aranan=$_POST['aranan'];
	$teklifsor=$db->prepare("SELECT * FROM teklifekrani_tbl WHERE teklif_firmaad LIKE '%$aranan%' ORDER BY id ASC");
	$teklifsor->execute();
	$say=$teklifsor->rowCount();
}
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<h4 class="text-center p-3">Teklifler</h4>

			<form action="../islem.php" method="POST">
				<table class="table table-striped table-md">
					<tr>
						<th class="text-center">Firma Adı</th>
						<th>Firma Vergi No</th>
						<th>Sipariş Tarihi</th>
						<th>Satılabilir Ürün Seçenekleri</th>
						<th>Ürün Adedi</th>
						<th>Kağıt Türü</th>
						<th>Baskı Tutarı</th>
						<th>Lak Varmı?</th>
						<th>Metalize Varmı ?</th>
						<th>Kırım Varmı ?</th>
						<th>Delik Varmı ?</th>
						<th>İşçi Sayısı</th>
						<th></th>
						<th style="width: 15%;"><a href="teklif-ekle.php" class="btn btn-success"><i class="fa fa-plus"></i> Yeni Ekle</a></th>
					</tr>

					<?php while ($teklifcek=$teklifsor->fetch(PDO::FETCH_ASSOC)) {
						$urun_id=$teklifcek['id'];
						?>
						<tr>
							<td class="text-center"><?=$teklifcek['teklif_firmaad']; ?></td>
							<td style="width:16%;"><?=$teklifcek['teklif_firmavergino']; ?></td>
							<td style="width:16%;"><?=$teklifcek['teklif_siparistarihi']; ?></td>
							<td style="width:16%;"><?=$teklifcek['teklif_satilabilirurunsecenekleri']; ?></td>
							<td style="width:16%;"><?=$teklifcek['teklif_urunadedi']; ?></td>
							<td style="width:16%;"><?=$teklifcek['teklif_kagitturu']; ?></td>
							<td style="width:16%;"><?=$teklifcek['teklif_baskitutari']; ?></td>
							<td style="width:16%;">
								<?php if ($teklifcek['teklif_lakvarmi']==0) {?>
									Yok
								<?php }else {?>
									Var
								<?php } ?>
							</td>
							<td style="width:16%;">
								<?php if ($teklifcek['teklif_metalizevarmi']==0) {?>
									Yok
								<?php }else {?>
									Var
								<?php } ?>
							</td>
							<td style="width:16%;">
								<?php if ($teklifcek['teklif_kirimvarmi']==0) {?>
									Yok
								<?php }else {?>
									Var
								<?php } ?>
							</td>
							<td style="width:16%;">
								<?php if ($teklifcek['teklif_delikvarmi']==0) {?>
									Yok
								<?php }else {?>
									Var
								<?php } ?>
							</td>
							<td style="width:16%;"><?=$teklifcek['teklif_iscisayisi']; ?></td>
							<td><a href="teklif-duzenle.php?id=<?=$teklifcek['id'] ?>" class="btn btn-outline-info"><i class="fa fa-pencil-alt"></i> Düzenle</a></td>
							<td><a href="../islem.php?teklifsil=ok&id=<?=$teklifcek['id'] ?>" onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-outline-primary p-3"><i class="fa fa-trash"></i> Sil</a></td>
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
