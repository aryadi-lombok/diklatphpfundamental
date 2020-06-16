<?php
	function jalan() {
			echo 'Mobil Jalan';
	}
	function berhenti() {
			echo '<br> Mobil Berhenti';
	}
	
	function ganti_gigi($gigi) {
			echo 'Mobil ganti gigi ke '.$gigi;
	}
	
	function pengurangan($a, $b) {
			$c = $a - $b;
			return 'Hasil pengurangan '.$a.' dan '.$b.' adalah '. $c;
	}

	function penambahan($a, $b) {
			$c = $a + $b;
			return 'Hasil penambahan '.$a.' dan '.$b.' adalah '. $c;
	}
	
	jalan();
	berhenti();
	echo '<br>';
	ganti_gigi(5);
	echo '<br>';
	$x = 40;
	$y = 22;
	$hasil = pengurangan($x, $y);
	echo $hasil;
	
	echo '<br>';
	$x = 44;
	$y = 5;
	$hasil = penambahan($x, $y);
	echo $hasil;	