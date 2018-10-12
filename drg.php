<?php 
	include 'json.php';
	 //open connection to mysql db
    $connection = mysqli_connect("localhost","root","1717","sigbpjs") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "SELECT *
	FROM setting";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $row['judul'];?> - <?php echo $row['desc'];?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
		<!-- Custom styles for this template -->
		<link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-example.min.css" />
		<!-- Add fancyBox main JS and CSS files -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
		<link rel="shortcut icon" href="admin/favicon.ico">
  </head>

  <body>
	
	
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <a class="navbar-brand" href="index.php"><?php echo $row['judul'];?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="faskes.php">Peta Semua Faskes</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="rs.php">Rumah Sakit</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="puskesmas.php">Puskesmas</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="dr.php">Dokter</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link active" href="drg.php">Dokter Gigi</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="ku.php">Klinik Utama</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="kp.php">Klinik Pratama</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="Apotik.php">Apotik</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="optik.php">Optik</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="admin/" target=_blank>Login</a>
          </li>
        </ul>
      </div>
    </nav>
	
  	<main role="main">
		<div class="bh-sl-container">
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<div class="bh-sl-form-container">
						<form id="bh-sl-user-location" class="form-inline" method="post" action="#" role="form">
							<div class="form-input form-group">
								<label for="bh-sl-search">Masukkan Nama atau Kode Faskes :</label>
								<input class="form-control" type="text" id="bh-sl-search" name="bh-sl-search" />
								<label for="bh-sl-address">atau Alamat :</label>
								<input class="form-control" type="text" id="bh-sl-address" name="bh-sl-address" />
								<button id="bh-sl-submit" class="btn btn-primary" type="submit" role="button">Cari</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="bh-sl-map-container" class="bh-sl-map-container">
				<div class="container-fluid">
					<div id="map-results-container" class="row">
						<div id="bh-sl-map" class="bh-sl-map col-md-9"></div>
						<div class="bh-sl-loc-list col-md-3">
							<ul class="list list-unstyled"></ul>
						</div>
					</div>
				</div>
		  </div>
		</div>
  	</main>
	
	 <footer class="container">
      <p>Copyrght &copy; 2018. <?php echo $row['creator'];?>&trade;. All rights reserved.</p>
    </footer>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/libs/handlebars.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyBu23Tq-l4FtWr-P7FEpU8fsGGKS1PPh2E&language=id&region=ID"></script>
	<script src="assets/js/plugins/storeLocator/jquery.storelocator.js"></script>
	<script>
			$(function() {
				$('#bh-sl-map-container').storeLocator({
					distanceAlert : 60,
					dataType: 'json',
					dataLocation: 'data/drg.json',
					slideMap : false,
					// ==== hapus comment 3 baris code di bawah ini, untuk mendisable autogeocode ===
					//defaultLoc: true,
					//defaultLat: '-8.3113063',
					//defaultLng : '122.9371411',
					// ==============================================================================
					autoGeocode: true,	// untuk mendeteksi lokasi user secara reatime
					storeLimit : -1,
					lengthUnit : 'km',
					mapSettings : {
						//mapTypeId: google.maps.MapTypeId.ROADMAP,
						zoom     : 13
					},
					catMarkers : {
						'Apotek' : ['assets/img/apotek.png', 32, 32],
						'Dokter Praktik Perorangan' : ['assets/img/dokter.png', 32, 32],
						'Dokter Gigi' : ['assets/img/drg.png', 32, 32],
						'Rumah Sakit' : ['assets/img/rumah.png', 32, 32],
						'Puskesmas' : ['assets/img/puskesmas.png', 32, 32],
						'Klinik Utama' : ['assets/img/ku.png', 32, 32],
						'Klinik Pratama' : ['assets/img/kp.png', 32, 32],
						'Optik' : ['assets/img/optik.png', 32, 32],
					},
					nameAttribute         : 'faskes',
					nameSearch			  : true,
					// Language options
					addressErrorAlert     : 'Alamat tidak dapat ditemukan',
					autoGeocodeErrorAlert : 'Pendeteksian lokasi Anda secara otomatis tidak berhasil. Silahkan masukkan alamat.',
					distanceErrorAlert    : 'Sayang sekali, lokasi terdekat yang Anda cari lebih dari ',
					kilometerLang         : 'kilometer',
					kilometersLang        : 'kilometer',
					mileLang              : 'mil',
					milesLang             : 'mil',
					noResultsTitle        : 'Tidak ada hasil',
					noResultsDesc         : 'Tidak ada lokasi yang dtemukan dengan Alamat yang Anda berikan.',
					nextPage              : 'Lanjut &raquo;',
					prevPage              : '&laquo; Kembali',
				});
			});
		</script>

  </body>
</html>
<?php } ?>