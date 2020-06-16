<html>

<body>
<?php
	$d=date("D");
	
	if ($d == "Fri") {
			echo "have a nice weekend";
	} else {
				echo "have a nice Day";
	}
	
	
	echo '<br>';
	$nilai= 88;
	echo 'nilai akhir= '.$nilai.'<br>';
	if ($nilai >=90 && $nilai < 100) {
			echo "nilai A";
	} else if ($nilai >=80 && $nilai < 90) {
				echo "nilai B";
	} else if ($nilai >=70 && $nilai < 80) {
				echo "nilai C";
	} else {
		echo "nilai D";
	}
	
	
	
	
	
	?>
</body>
</html>