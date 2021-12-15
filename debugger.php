<!DOCTYPE html>
<html>
<head>
	<title>Debugger</title>
</head>
<body>
	<strong>Debugger<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Debugger");

		// debugger digunakan untuk melakukan proses debugging.
		// debugging adalah proses mencari bug (masalah) yang biasa terjadi di kode program kita.
		// dengan debugger kita bisa menghentikan kode program di posisi yang kita inginkan (breakpoint), lalu melihat semua isi variable yang ada pada saat kode program sedang berhenti.

		function createFullName(firstName, midlleName, lastName)
		{
			debugger;
			const fullName = `${firstName} ${lastName} ${lastName}`;
			return fullName;
		}

		createFullName("Amria", "Rendy", "Desbintra");

		function sum(...numbers){
			debugger; // debugernya
			let total = 0;
			for (const number of numbers) {
				total = number; // error-nya ada ditotal silahkan tambahkan + sebelum sama dengan
			}
			return total; 
		}
		console.info(sum(1, 1, 1, 1, 1));

	</script><br><br>
</body>
</html>