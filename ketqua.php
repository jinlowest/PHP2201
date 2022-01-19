<html>
	<body>
		<?php 
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];

		$d = $b*$b - 4*$a*$c;

		$canDelta = sqrt($d);

		

		if ($d < 0) {

			echo "<h2>Phuong trinh vo nghiem!<h2>";
		} elseif ($d == 0) {
			$x = (-($b)/(2*$a));
			echo "<h2>Phuong trinh co nghiem kep x = $x <h2>";
		}else {
			$x1 = ((-$b + $canDelta)/(2*$a));

			$x2 = ((-$b - $canDelta)/(2*$a));
			echo "<h2>Phuong trinh co hai nghiem phan biet x1 = $x1, x2 = $x2 <h2>";
		}
 
		?>
		
	</body>
</html>