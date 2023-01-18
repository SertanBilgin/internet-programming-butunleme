<?php
	include "Ust.php";
?>
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="https://reimg-teknosa-cloud-prod.mncdn.com/bannerimage/anasayfa_teknofirsat_tv_hero_16_19ocak_230120_0_MC/10618510966834.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
					
						</div>
					</div>
					
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="https://reimg-teknosa-cloud-prod.mncdn.com/bannerimage/anasayfa_teknofirsat_caspernotebook_230118_0_MC/10618495205426.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
						
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>YENİ ÜRÜNLER</h2>
			</div>
			<div class="product-slider owl-carousel">

			<?php
				$urunler=$db->query("SELECT * FROM urun ORDER BY urun_id DESC LIMIT 5");
				while($Urun=$urunler->fetch())
			
				UrunListeGorunumu($Urun);
				
			?>
			 
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>ÖNE ÇIKAN ÜRÜNLER</h2>
			</div>
			<div class="row">
				<?php
				$urunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY RAND() LIMIT 8");
				while($Urun=$urunler->fetch())
				{
				?>
				<div class="col-lg-3 col-sm-6">
					<?php UrunListeGorunumu($Urun)?>
				</div>
				<?php
				}
				?>
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->
<?php 
	include "alt.php";
?>

