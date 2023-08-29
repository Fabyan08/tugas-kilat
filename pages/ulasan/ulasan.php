<?php
include('./config/koneksi.php');
if (isset($_SESSION['id_user']) == null) {
} else {
	$sql = "SELECT * FROM user WHERE id_user='$_SESSION[id_user]'";
	$query = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_array($query);
}

?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Contact Us</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="?">Contact</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Contact Area =================-->
<section class="contact_area section_gap_bottom">
	<div class="container">
		<div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="contact_info">
					<div class="info_item">
						<i class="lnr lnr-home"></i>
						<h6>Malang, Jawa Timur</h6>
						<p>Jl. Ikan Piranha 67</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-phone-handset"></i>
						<h6><a href="#">0812 3456 7890</a></h6>
						<p>Mon to Fri 9am to 6 pm</p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-envelope"></i>
						<h6><a href="#">tugaskilat@gmail.com</a></h6>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<?php
				if (isset($_SESSION['id_user']) == null) { ?>
					<form class="row contact_form" action="pages/ulasan/tambah-ulasan.php" method="post" id="contactForm">
						<div class="col-md-6">
							<div class="form-group">
								<p>Nama</p>
								<input type="text" required class="form-control" id="name" name="nama" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = ''">
							</div>
							<div class="form-group">
								<p>Email</p>
								<input type="email" required class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
							<div class="form-group">
								<p>No HP</p>
								<input type="text" required class="form-control" id="subject" name="no" placeholder="Enter Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="pesan" id="message" rows="1" placeholder="Kirimkan Ulasan" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kirimkan Ulasan'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" name="submit" value="submit" class="primary-btn">Kirim Ulasan</button>
						</div>
					</form>
				<?php	} else { ?>
					<form class="row contact_form" action="pages/ulasan/tambah-ulasan.php" method="post" id="contactForm">
						<div class="col-md-6">
							<div class="form-group">
								<p>Nama</p>
								<input type="text" required class="form-control" id="name" name="nama" placeholder="Enter your name" readonly value="<?= $data['nama']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = ''">
							</div>
							<div class="form-group">
								<p>Email</p>
								<input type="email" required readonly class="form-control" id="email" name="email" placeholder="Enter email address" value="<?= $data['email']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
							<div class="form-group">
								<p>No HP</p>
								<input type="text" required readonly value="<?= $data['no']; ?>" class="form-control" id="subject" name="no" placeholder="Enter No HP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Number HP'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" required name="pesan" id="message" rows="1" placeholder="Kirimkan Ulasan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kirimkan Ulasan'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" name="submit" value="submit" class="primary-btn">Kirim Ulasan</button>
						</div>
					</form>
				<?php }
				?>

			</div>
		</div>
	</div>
</section>
<!--================Contact Area =================-->