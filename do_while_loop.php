<!DOCTYPE html>
<html>
<head>
	<title>do while loop</title>
</head>
<body>
	<strong>Do While Loop<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("do while loop");

		// Do While Loop
		// do while loop adalah perulangan yang mirip dengan while.
		// perbedaannya hanya pada pengecekan kondisi
		// pengecekan kondisi do while loop dilakukan di awal sebelum perulangan, dilakukan sedangkan di do while loop dilakukan setelah perulangan dilakukan.
		// oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan kondisi tidak bernilai true

		let counter = 100
		do {
			document.writeln(`<p>Perulagan ke ${counter}</p>`);
			counter++;
		} while (counter <= 10);

	</script><br><br>
</body>
</html>