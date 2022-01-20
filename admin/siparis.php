<?php include 'header.php' ?>
<?php include 'sidebar.php';

$siparissor=$db->prepare("SELECT * FROM siparis_tbl ORDER BY id ASC");
$siparissor->execute();
$say=$siparissor->rowCount();

$teklifsor=$db->prepare("SELECT * FROM siparis_tbl inner join teklifekrani_tbl on teklifekrani_tbl.id=siparis_tbl.teklif_id");
$teklifsor->execute();
?>
<!-- Main Content -->
<div class="main-content">
	<div class="col-12 col-md-12 col-lg-12">
		<div class="card">
			<h4 class="text-center p-3">Sipariş Onay</h4>

			<form action="../islem.php" method="POST">

				<table class="table table-striped table-md text-center">
					<tr>
						<th class="text-center">Firma Adı</th>
						<th>Onay Durumu</th>
						<th></th>
					</tr>

					<?php while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) {
						$siparis_id=$sipariscek['id'];
						?>
						<tr class="text-center">
							<?php $teklifcek=$teklifsor->fetch(PDO::FETCH_ASSOC); ?>
							<td style="width:16%;"><a href="teklif-duzenle.php?id=<?=$teklifcek['id'] ?>"><?=$teklifcek['teklif_firmaad']; ?></a></td>
							<td style="width:16%;">
								<?php if ($teklifcek['onay_durumu']==0) {?>
									<p class="alert-danger">Onaylanmadı</p>
								<?php }else {?>
									<p class="alert-success">Onaylandı</p>
								<?php } ?>
							</td>
							<?php if ($teklifcek['onay_durumu']==0) { ?>
								<td style="width:16%;"><a href="../islem.php?onayla=ok&id=<?=$siparis_id?>" onclick="return confirm('Onaylamak istediğinize emin misiniz?')" class="btn btn-outline-success"> Onayla</a></td>
							<?php }else {?>
								<td style="width:16%;"><a href="../islem.php?onayiptal=ok&id=<?=$siparis_id?>" onclick="return confirm('Onayı iptal etmek istediğinize emin misiniz?')" class="btn btn-outline-danger"> Onayı İptal Et</a></td>
							<?php	}?>
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
