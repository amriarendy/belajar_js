<!DOCTYPE html>
<html>
<head>
	<title>Operator Logika</title>
</head>
<body>
	<strong>Operator Logika</strong><br>
	<script>
		// Operator logika adalah operator untuk dua buat data boolean
		// Hasil dari operator logika adalah boolean
		// Operator logika biasanya digunakan untuk operasi boolean

		// Operator && => Dan
		// 1 && 1 =1
		// 1 && 0 = 0
		// 0 && 1 = 0
		// 0 && 0 = 0

		// Operator || => atau
		// 1 || 1 = 1
		// 1 || 0 = 0
		// 0 || 1 = 1
		// 0 || 0 = 0

		// Operator ! => kebalikan
		// ! + 1 = 0
		// ! + 0 = 1

		const nilaiUjian = 80;
		const nilaiAbsensi = 60;

		const lulusUjian = nilaiUjian > 75;
		document.writeln(lulusUjian);
		const lulusAbsensi = nilaiAbsensi > 75;
		document.writeln(lulusAbsensi);

		const lulus = lulusUjian && lulusAbsensi;
		document.writeln("<p>" + lulus + "</p>");

	</script><br><br>
</body>
</html>