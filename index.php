<!DOCTYPE html>
<html>
<head>
	<title>Hogwart Coins Combination</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php
	if(isset(($_POST['hitung']))){
		$kapasitas = $_POST['inputbil'];
		$cara = 0;
		for ( $i = $kapasitas; $i >= 0; $i -= 200) {
			for ( $j = $i; $j >= 0; $j -= 100) {                
				for ( $k = $j; $k >= 0; $k -= 50) {
					for ( $l = $k; $l >= 0; $l -= 25) {
						for ( $m = $l; $m >= 0; $m -= 10) {
							for ( $n = $m; $n >= 0; $n -= 5) {
								$cara++;
							}
						}
					}
				}
			}
		}
	}
	?>

	<div class="container">
		<h2 class="judul">Cara Mengombinasikan Uang Di Hogwarts</h2>	
		<div class="keterangan" >
			<h3>Daftar Koin yang Tersedia: </h3>
			<ul>
				<li>1s</li>
				<li>5s</li>
				<li>10s</li>
				<li>25s</li>
				<li>50s</li>
				<li>G1(100s)</li>
				<li>G1(200s)</li>
			</ul>
		</div>
		<form method="post" action="index.php">
			<p class="brand" >Jumlah Uang</p>
			<input type="text" name="inputbil" class="input" placeholder="Masukkan Jumlah Uang" ></input>
			<input type="submit" name="hitung" class="tombol" value="Target" ></input></br></br>
			<p class="brand" >Jumlah Cara</p>
		</form>
		<?php if(isset($_POST['hitung'])) {?>
		<input type="text" value="<?php echo $cara; ?>" class="input"></input>
		<?php }else{ ?>
		<input type="text" value="0" class="input"></input>
		<?php } ?>
	</div>
	<div>
		<a href="home.php">HOME</a>
	</div>
</body>
</html>