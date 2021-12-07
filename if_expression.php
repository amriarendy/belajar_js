<!DOCTYPE html>
<html>
<head>
	<title>If Expression</title>
</head>
<body>
	<strong>If Expression<<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("If Expression");
		// Dalam JavaScript, if adalah salah satu satu kata kunci yang digunakan untuk percabangan.
		// Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi.
		// Hampir di semua bahasa pemrograman mendukung if expression

		const examValue = 70;

		if (examValue > 80) {
			document.writeln("<p>Guud Job</p>");
		} else {
			document.writeln("<p>Try again next year</p>");
		}

		// Else if Expression
		// Kadang dalam if, kita butuh membuat beberapa kondisi
		// Kasus seperti ini, di JavaScript kita bisa menggunakan Else if expression

		const examValue2 = 90;

		if (examValue2 > 80) {
			document.writeln("<p>Guud Job</p>");
		} else if (examValue2 > 60 ) {
			document.writeln("<p>Noot Bad</p>");
		} else {
			document.writeln("<pTry again next year</p>");
		}
	</script><br><br>
</body>
</html>