<?php include 'home.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Buku Tamu SiTamu</title>
	<!-- CSS -->

	<!-- <link href="dist/css/select2.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="docs/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="docs/css/bootstrap.min.css">


	<!-- JS -->
	<script type="text/javascript" src="docs/js/jquery-latest-slim.min.js"></script>
	<script type="text/javascript" src="docs/js/jquery-ui-custom.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


</head>

<body style="background:#F1C2FF">


	<style type="text/css">
		.form-group,
		.form-group input {
			text-align: center;
		}

		.form-group label {
			color: #ffffff;
		}
	</style>

	<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "buku_tamu";

	$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));


	//jika tombol simpan diklik
	if (isset($_POST['bsimpan'])) {
		//persiapan simpan data ke database
		if (isset($_POST['gambarktp'])) {
			$folderPath = "upload/";
			$image_parts = explode(";base64,", $_POST['gambarktp']);
			$image_type_aux = explode("gambarktp/", $image_parts[0]);
			$image_type = $image_type_aux[1];

			$image_base64 = base64_decode($image_parts[1]);
			$fileName = uniqid() . '.jpg';

			$file = $folderPath . $fileName;
			file_put_contents($file, $image_base64);

			// print_r($fileName);
		} else {
			$file = null;
		}

		$keperluan = "";
		if ($_POST['keperluan'] == "lainnya") {
			$keperluan = $_POST['keperluan_lain'];
		} else {
			$keperluan = $_POST['keperluan'];
		}

		$simpan = mysqli_query($koneksi, "INSERT into ttamu (nama, nama_perusahaan, alamat, nope,keperluan, bidang, gambarktp)
										  VALUES ('$_POST[nama]','$_POST[nama_perusahaan]', '$_POST[alamat]', '$_POST[nope]', '$keperluan', '$_POST[bidang]','$file') ");
		if ($simpan) {
			//jika simpan berhasil maka tampilkan pesan
			echo "<script>
					alert('Simpan Data Sukses, Terima kasih Sdr/i $_POST[nama] atas kunjungannya..');
					document.location='index.php';
			      </script>";
		}
	}

	$query_keperluan = "SELECT * FROM opsi_pilihan WHERE opsi='keperluan'";
	$result_keperluan = mysqli_query($koneksi, $query_keperluan);

	$query_bidang = "SELECT * FROM opsi_pilihan WHERE opsi='bidang'";
	$result_bidang = mysqli_query($koneksi, $query_bidang);




	?>


	<div class="container">
		<div class="col-md-12">
			<form class="form" method="post">
				<center><img src="SITAMU 2.png" width="250px;"></center>
				<div class="panel panel-dark">
					<div class="panel-heading text-center" style="background: #500060; color:#ffffff">
						<b>BUKU TAMU DPMPTSP RIAU</b>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Anda" required>
						</div>
						<div class="form-group">
							<label>Nama Perusahaan</label>
							<input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="Masukkan Nama Perusahaan" required>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
						</div>
						<div class="form-group">
							<label>No.HP</label>
							<input type="text" name="nope" id="nope" class="form-control" placeholder="Masukkan No.HP" required>
						</div>
						<div class="form-group">
							<label>Keperluan</label>
							<select name="keperluan" class="js-example-basic-single" id="keperluan" style="width: 100%;" required>
								<option value=""><b> Pilih Keperluan : </b> </option>
								<?php
								if ($result_keperluan) {
									while ($row = mysqli_fetch_assoc($result_keperluan)) {
										echo "<option value='" . $row['isi'] . "'>" . $row['isi'] . "</option>";
									}
								}
								?>
								<option value="lainnya">Lainnya...</option>
							</select>
							<div id="lainnya">
								<br />
								<textarea name="keperluan_lain" id="keperluan_lain" class="form-control" rows="3"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label>Bidang</label>
							<div class="col">
								<select name="bidang" class="js-example-basic-single" id="bidang" style="width: 100%;" required>
									<option value="">Pilih Bidang</option>
									<?php
									if ($result_bidang) {
										while ($row = mysqli_fetch_assoc($result_bidang)) {
											echo "<option value='" . $row['isi'] . "'>" . $row['isi'] . "</option>";
										}
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label>Scan KTP</label>
							<center>
								<video allow="camera" autoplay></video>
							</center>

							<canvas style="display:none;"></canvas>
							<p><input type=button id="screenshot" value="Capture KTP" class="btn btn-success center-block"></p>
							<input type="hidden" name="gambarktp" class="image-tag">
							<div id="results" style="color: #ffffff;">Preview KTP</div>

							<script>
								const constraints = {
									video: true,
								};

								const video = document.querySelector("video");

								const hdConstraints = {
									video: {
										width: {
											min: 640
										},
										height: {
											min: 480
										}
									},
								};

								navigator.mediaDevices.getUserMedia(hdConstraints).then((stream) => {
									video.srcObject = stream;
								});

								const screenshotButton = document.querySelector("#screenshot");
								const img = document.querySelector("#screenshot-img");
								const canvas = document.createElement("canvas");

								screenshotButton.onclick = video.onclick = function() {
									canvas.width = video.videoWidth;
									canvas.height = video.videoHeight;
									canvas.getContext("2d").drawImage(video, 0, 0);
									$('.image-tag').val(canvas.toDataURL("image/webp"));
									document.getElementById('results').innerHTML = '<img src="' + canvas.toDataURL("image/webp") + '"/>';

								};
							</script>
							<button type="submit" name="bsimpan" class="btn btn-success center-block">Simpan</button>
						</div>
					</div>
			</form>



		</div>
	</div>
</body>

</html>
<script>
	$(document).ready(function() {
		$('.js-example-basic-single').select2();
	});
</script>


<script>
	$(document).ready(function() {
		$("#keperluan").change(function() {
			$(this).find("option:selected").each(function() {
				var optionValue = $(this).attr("value");
				if (optionValue == "lainnya") {
					$("#lainnya").show();
				} else {
					$("#lainnya").hide();
				}
			})
		}).change();
	})
</script>