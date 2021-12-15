<!DOCTYPE html>
<html>
<head>
	<title>Masalah Variable VAR</title>
</head>
<body>
	<strong>Masalah Variable VAR<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Masalah Variable VAR");

		// Masalah Variable var
		// sebelumnya sudah dijelaskan bahwa penggunaan var sudah tidak direkomendasikan lagi, dan diganti dengan let.
		// pertanyaannya kenapa?
		// alasan var tidak direkomendasikan digunakan lagi adalah, karena var tidak memiliki block scope, artinya dia tidak mengikat ke local scope yang sebelumnya sudah kita bahas.
		// karena masalah ini, var bisa tidak terprediksi.
		// kita akan buat contoh penggunaan var dan let.

		// Contoh let
		console.info("Contoh Variable Let");
		let i = 20;

		for (let i = 0; i < 10; i++) {
			console.log(`Local : ${i}`);
		}

		console.info(`Global : ${i}`);

		// Contoh var
		console.info("Contoh Variable Var");
		var ii = 20;

		for (var ii = 0; ii < 10; ii++) {
			console.log(`Local : ${ii}`);
		}

		console.info(`Global : ${ii}`);


	</script><br><br>
</body>
</html>