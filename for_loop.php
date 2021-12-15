<!DOCTYPE html>
<html>
<head>
	<title>For Loop</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console<br><br>");
		console.info("For Loop");


		// For Loop 
		// for adalah salah satu kunci yang bisa digunakan untuk melakukan perualangan.
		// Blok kode yang terdapat didalam for akan selalu diulangi selama kodisi for terpenuhi.

		// Syntax perualangan for

		// for(init statement; kodisil post statement) {
			//blok perulangan
		// }

		// init statement akan dieksekusi hanya sekali di awal sebelum perulangan.
		// kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulanggan akan dilakukan, jika false perulangan akan berhenti.
		// post statement akan dieksekusi setiap kali di akhir perulagnan.
		// init statement, kondisi dan post statement tidak wajib diisi, jika kondisi tidak di isi, berarti kondisi bernilai true.

		// contoh perulangan dengan kondisi
		let counter = 1;
		for( ; counter <= 10;){
			document.writeln(`<p>Perulangan ke ${counter}</p>`)

			counter++;
		}

		// perulangan denga init statement
		for(let counter = 1; counter <= 10;) {
			document.writeln(`<p>Perulangan ke ${counter}</p>`);
			counter++;
		}

	</script><br><br>
</body>
</html>