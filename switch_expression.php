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
		const nilai = "A";

		document.writeln("<p>- Switch Statement</p>");
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
				break; // boleh ditambahkan atau tidak
		}

		document.writeln("<p>- If Condition</p>");
		if (nilai === "A") {
			document.writeln("<p>Wow anda lulus dengan baik</p>");
		} else if (nilai === "B" || nilai === "C") {
			document.writeln("<p>Anda lulus</p>");
		} else if (nilai === "D") {
			document.writeln("<p>Anda tidak lulus</p>");
		} else {
			document.writeln("<p>Mungkin anda lelah</p>");
		}

	</script><br><br>
</body>
</html>