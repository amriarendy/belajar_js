<!DOCTYPE html>
<html>
<head>
	<title>Label</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Label");

		// Label
		// label merupakan penanda yang bisa digunakan dengan kata kunci break dan continiue.
		// secara default saat kita melakukan break atau continue, dia akan melakukan terhadap perulangan dimana kode break dan continue itu digunakan.
		// dengan menggunakan label, kita bisa melakukan break dan continue terhadap perulangan yang kita inginkan, asalkan pada perulangannya kita gunakan label.
		// untuk membuat label, kita bisa gunakan nama label lalu diikuti dengan : (titik dua).

		loopi:
		for (let i = 0; i < 10; i++) {
			loopj:
			for (let j = 0; j < 100; j++) {
				if (j > 10){
					continue;
					// continue loopi; // jika mau di bagian loopi yang mau digunakan. 
				}
				console.info(`${i} - ${j}`);
			}
		}

	</script><br><br>

</body>
</html>