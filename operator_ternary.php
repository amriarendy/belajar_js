<!DOCTYPE html>
<html>
<head>
	<title>Operator Ternary</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Operator Ternary");

		// ternary operator adalah operator sederhana dari if statement.
		// ternery operator terdiri dari kondisi yang dievaluasi, jika true maka nilai pertama diambil, jika false, maka nilai kedua diambil.

		// kode tanpa ternary operator

		const nilai = 75;
		let ucapan;

		if (nilai >= 75) {
			ucapan = "Selamat Anda Lulus";
		} else {
			ucapan = "Silahkan Coba Lagi";
		}
		document.writeln("ini tanpa ternary operator");
		document.writeln(`<p>${ucapan}</p>`);
	</script><br><br>
</body>
</html>