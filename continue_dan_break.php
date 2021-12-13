<!DOCTYPE html>
<html>
<head>
	<title>Continue dan break</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Continue dan break");

		for (let i = 1; i <= 100; i++) {
			if(i % 2 === 0) {
				continue;
			}
			document.writeln(`<p>Perulangan Ganjil ${i}</p>`);
		}

	</script><br><br>
</body>
</html>