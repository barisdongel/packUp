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
						<th>Tanım ID</th>
						<th>İşçilik Maaliyeti</th>
						<th>Tasarım Maaliyeti</th>
						<th>Baskı Maaliyeti</th>
						<th>Diğer Maaliyetler</th>
						<th>Toplam (TRY)</th>
						<th>Toplam (USD)</th>
						<th>Toplam (EUR)</th>
						<th></th>
						<th style="width: 15%;"><a href="geneltanim-ekle.php" class="btn btn-success"><i class="fa fa-plus"></i> Yeni Ekle</a></th>
					</tr>

					<?php while ($geneltanim=$geneltanimsor->fetch(PDO::FETCH_ASSOC)) {
						$genel_id=$geneltanim['id'];
						//döviz türünü kontrol etme
						if ($geneltanim['doviz_turu']=="USD") {
							$toplam = $geneltanim['iscilik_maaliyet'] + $geneltanim['tasarim_maaliyet'] + $geneltanim['baski_maaliyet'] + $geneltanim['diger_maaliyet'];
							$dolartoplam = $toplam;//değerler dolar olarak girildiği için toplam değer zaten dolar değeri
							$parite = $dovizcek['euro_satis'] / $dovizcek['dolar_satis'];//euro/dolar paritesi hesaplanıyor
							$eurotoplam = $toplam / $parite;//hesaplanan parite ile dolar olarak girilen değerlerin toplamının Euro'da karşılığı bulunuyor
							$turklirasi = $toplam * $dovizcek['dolar_satis'];//dolar olarak girilen değerler, doların anlık kurdaki durumu ile çarpılarak Türk Lirası değeri bulunuyor
							$sembol = "$";//seçilen doviz türüne göre tabloda gösterilecek sembol
						// ! AŞAĞIDA Kİ KODLAR'DA YUKARIDA Kİ YORUM SATIRLARI İLE AYNI MANTIKTA ÇALIŞIYOR
						}elseif ($geneltanim['doviz_turu']=="EUR") {
							$toplam = $geneltanim['iscilik_maaliyet'] + $geneltanim['tasarim_maaliyet'] + $geneltanim['baski_maaliyet'] + $geneltanim['diger_maaliyet'];
							$turklirasi = $toplam * $dovizcek['euro_satis'];
							$parite = $dovizcek['dolar_satis'] / $dovizcek['euro_satis'];
							$dolartoplam = $toplam / $parite;
							$eurotoplam = $toplam;
							$sembol = "€";
						}else {
							$toplam = $geneltanim['iscilik_maaliyet'] + $geneltanim['tasarim_maaliyet'] + $geneltanim['baski_maaliyet'] + $geneltanim['diger_maaliyet'];
							$turklirasi = $toplam;
							$dolartoplam = $toplam / $dovizcek['dolar_satis'];
							$eurotoplam = $toplam / $dovizcek['euro_satis'];
							$sembol = "₺";
						}
						?>
						<tr>
							<td class="text-center"><?=$geneltanim['id']; ?></td>
							<td style="width:16%;"><?=$geneltanim['iscilik_maaliyet'].$sembol; ?></td>
							<td style="width:16%;"><?=$geneltanim['tasarim_maaliyet'].$sembol; ?></td>
							<td style="width:16%;"><?=$geneltanim['baski_maaliyet'].$sembol; ?></td>
							<td style="width:16%;"><?=$geneltanim['diger_maaliyet'].$sembol; ?></td>
							<td style="width:16%;"><?=$turklirasi?>₺</td>
							<td style="width:16%;"><?=kisalt($dolartoplam, 11)?>$</td>
							<td style="width:16%;"><?=kisalt($eurotoplam, 11)?>€</td>
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
