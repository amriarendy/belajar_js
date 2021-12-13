<!DOCTYPE html>
<html>
<head>
	<title>While Loop</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console<br><br>");
		console.info("While Loop");

		// While Loop
		// while loop adalah versi perulangan yan lebih sederhana dibanding for loop.
		// di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement.

		let counter = 1
		while (counter <= 10) {
			document.writeln(`<p>Perulagan ke ${counter}</p>`);
			counter++;
		}

		// With Statement Tidak Direkomendasikan
		// walaupu fitur with statement ini sangat menarik.
		// namun kebanyakan orang tidak merekomendasikan penggunaan with statement.
		// hal ini dikarenakan with statement kadang membuat sebuah kode menjadi ambigu.
		
	</script><br><br>
</body>
</html>