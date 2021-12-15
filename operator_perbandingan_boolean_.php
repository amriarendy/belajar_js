<!DOCTYPE html>
<html>
<head>
	<title>Operator perbandingan boolean</title>
</head>
<body>
	<strong>Operasi Perbandingan (Boolean)</strong><br>
	<script>
		// Operasai perbandingan adalah operasi untuk membandingkan dua buah data.
		// Operasi perbandingan adalah operasi yang menghasilkan nilai booblean (Benar atau Salah).
		// Jika hasil operasi adalah, maka nilainya adalah true.
		// Jika hasil operasinya adalah salah, maka nilainya adalah false.

		// > => Lebih dari.
		// < => Kurang dari.
		// >= => Lebih dari sama dengan.
		// <= => Kurang dari sama dengan.
		// == => Sama dengan.
		// === => Sama dengan dan sama tipe.
		// != => Tidak sama dengan.
		// !== => Tidak sama dengan atau tidak sama tipe.

		let resutlPerbandingan = 5 > "5";
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 < "5";
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 >= 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 <= 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 == 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 === 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 != 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 !== 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

	</script><br><br>
</body>
</html>