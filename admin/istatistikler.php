<?php
//Sayıları Göstermek için sorgular
$kullanicisayisi =$db->prepare("SELECT COUNT(*) FROM kullanici_tbl");
$kullanicisayisi->execute();
$kullanicisay = $kullanicisayisi->fetchColumn();

$stoksayisi =$db->prepare("SELECT COUNT(*) FROM stokmalzeme_tbl");
$stoksayisi->execute();
$stokmalzeme = $stoksayisi->fetchColumn();

$siparissayisi =$db->prepare("SELECT COUNT(*) FROM siparis_tbl");
$siparissayisi->execute();
$siparissay = $siparissayisi->fetchColumn();

$urunsayisi =$db->prepare("SELECT COUNT(*) FROM satilabilirurun_tbl");
$urunsayisi->execute();
$urunsay = $urunsayisi->fetchColumn();
?>
<div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="card card-statistic-1">
			<div class="card-icon-square card-icon-bg-green">
				<i class="fas fa-users"></i>
			</div>
			<div class="card-wrap">
				<div class="padding-20">
					<div class="text-right">
						<h3 class="font-light mb-0">
							<i class="ti-arrow-up text-success"></i><?=$kullanicisay ?>
						</h3>
						<span class="text-muted">Kullanıcı</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="card card-statistic-1">
			<div class="card-icon-square card-icon-bg-cyan">
				<i class="fas fa-layer-group"></i>
			</div>
			<div class="card-wrap">
				<div class="padding-20">
					<div class="text-right">
						<h3 class="font-light mb-0">
							<i class="ti-arrow-up text-success"></i><?=$stokmalzeme ?>
						</h3>
						<span class="text-muted">Stok</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="card card-statistic-1">
			<div class="card-icon-square card-icon-bg-orange">
				<i class="fas fa-cart-arrow-down"></i>
			</div>
			<div class="card-wrap">
				<div class="padding-20">
					<div class="text-right">
						<h3 class="font-light mb-0">
							<i class="ti-arrow-up text-success"></i><?=$siparissay ?>
						</h3>
						<span class="text-muted">Sipariş</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="card card-statistic-1">
			<div class="card-icon-square card-icon-bg-purple">
				<i class="fas fa-cubes"></i>
			</div>
			<div class="card-wrap">
				<div class="padding-20">
					<div class="text-right">
						<h3 class="font-light mb-0">
							<i class="ti-arrow-up text-success"></i><?=$urunsay ?>
						</h3>
						<span class="text-muted">Satılabilir Üretilmiş Ürün</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
