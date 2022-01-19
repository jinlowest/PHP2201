
<?php 
	//Hinh 1:
	for ($i=0; $i < 5; $i++) { 
			echo "<br>";
		for ($j=0; $j <= $i ; $j++) { 
			echo "*";
		}
	}
	//Hinh 2:
	for ($i=0; $i < 5; $i++) { 
			echo "<br>";
		for ($j=4; $j >= $i ; $j--) { 
			echo "*";
		}
	}
	//hinh 3
	for ($i = 0; $i < 5; $i++) { 

		for ($j = 4; $j > $i ; $j--) { 
			echo "&nbsp&nbsp";
		}

		for ($j = 0; $j <= $i ; $j++) { 
			// code...
			echo "*";
		}
		echo "<br>";
	}
	//Hinh 4:
	for ($i = 0; $i < 5; $i++) { 

		for ($j = 0; $j < $i ; $j++) { 
			echo "&nbsp&nbsp";
		}

		for ($j = $i; $j < 5 ; $j++) { 
			// code...
			echo "*";
		}
		echo "<br>";
	}
	//Hinh 5:
	for ($i = 1; $i < 6; $i++) { 

		for ($j = $i; $j < 5 ; $j++) { 
			echo "&nbsp&nbsp";
		}

		for ($j = 1; $j <= (2*$i -1) ; $j++) { 
			// code...
			echo "*";
		}
		echo "<br>";
	}
	//Hinh 6:
	for ($i = 1; $i < 6; $i++) { 

		for ($j = 1; $j < $i ; $j++) { 
			echo "&nbsp&nbsp";
		}

		for ($j = 1; $j <=(5*2 - (2*$i -1)) ; $j++) { 
			// code...
			echo "*";
		}
		echo "<br>";
	}







 ?>


<!--  <?php echo date("D M d, Y G:i a"); ?> -->

<!-- <html>
	<body>
		<form action="ketqua.php" method="POST">
			a: <input type="text" name="a"><br>
			b: <input type="text" name="b"><br>
			c: <input type="text" name="c"><br>
			<input type="submit">
		</form>
	</body>
</html> -->
