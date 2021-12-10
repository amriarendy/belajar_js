<!DOCTYPE html>
<html>
<head>
	<title>Switch Statement</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Switch Statement");

		// kadang kita butuh menggunakan kondisi sederhana di if statement, seperti hanya menggunakan perbandingan ==.
		// switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatanya.
		// kondisi di switch statement hanya untuk perbandingan ==.

		switch (nilai) {
			case "A" :
				document.writeln("<p>Wow anda lulus dengan baik</p>");
				break;
			case "B":
			case "C":
				document.writeln("<p>Anda lulus</p>");
				break;
			case "D":
				document.writeln("<p>Anda tidak lulus</p>");
				break;
			default:
				document.writeln("<p>Mungkin anda lelah</p>");
		}

	</script><br><br>
</body>
</html>