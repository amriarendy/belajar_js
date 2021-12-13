<!DOCTYPE html>
<html>
<head>
	<title>Break dan Continue</title>
</head>
<body>
	<strong>Break dan Continue<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Break dan Continue");

		// Break dan Continue
		// pada switch statement, kta sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch.
		// sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
		// namun berbeda dengan continue, continue digunakan untk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya.

		let counter = 1;
		while (true) {
			document.writeln(`<p>perulangan ke ${counter}</p>`);
			counter++;

			if (counter > 8) {
				break;
			}
		}

	</script><br><br>
	<a href="continue_dan_break.php">continue_dan_break</a>
</body>
</html>