<!DOCTYPE html>
<html>
<head>
	<title>NaN</title>
</head>
<body>
	<strong>NaN</strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("NaN");
		// Bagaimana jika ternyata data string yang kita coba konversi ke number bukanlah data yang valid>.
		// Jika data string yang kita coba lakukan konversi bukan lah data valid, maka hasil dari konversi tersebut adalah NaN (Not a Number).
		// NaN adalah number spesial yang menyebutkan bahwa ini bukanlah number.
		// Jika NaN dioperasikan dengan data number lainya, maka hasilknya akan menjadi NaN lagi.

		document.writeln(`<p>${parseInt("salah")}</p>`); // NaN
		document.writeln(`<p>${parseFloat("1.1text")}</p>`); // 1.1

		// Number() tidak akan mentolerir kesalahan pada data
		document.writeln(`<p>${Number("1.1ups")}</p>`); // NaN
		document.writeln(`<p>${Number("1x")}</p>`); // NaN
		document.writeln(`<p>${Number("bukan number")}</p>`); // NaN

		//Conth Operasi Pada Nan
		document.writeln("Contoh Operasi Pada NaN");
		const valueNaN = Number("salah"); //NaN
		const totalNaN = valueNaN + 100;
		document.writeln(`<p>${totalNaN}</p>`);

		// isNaN() Function
		// Kadang kita ingin mengecek apakah sebuah number itu NaN atau bukan.
		// Untuk melakukan pengecekan tersebut, kita bisa menggunakan function isNaN(Number).
		// Hasilnya adalah berupa data booblean, true jika NaN, false jika bukan.
		document.writeln("Contoh isNaN() Function");
		document.writeln(`<p>${isNaN(NaN)}</p>`);
		document.writeln(`<p>${isNaN(1000)}</p>`);

	</script>
</body>
</html>