
<html>

<body>
<?php

	
	echo '<br>';
	$grade= 45;
	echo 'grade= '.$grade.'<br>';
	if ($grade >=80 && $grade < 100) {
			echo "grade A";
	} else if ($grade >=70 && $grade < 80) {
				echo "grade B";
	} else if ($grade >=60 && $grade < 70) {
				echo "grade C";
	} else {
		echo "Tidak Lulus";
	}
	
	
	
	
	
	?>
</body>
</html>