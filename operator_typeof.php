<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<strong>Operator Typeof<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Operator Typeof");

		// typeof merupakan operator yang bisa kita gunakan untuk melihat tipe data sebuah value atau variable.
		// karena JavaScript merupakan dynamic langauge, jadi kadang kita perlu mengeck tipe data.
		// hasil dari operator typeof adalah string tipe datanya.

		// Type => Hasil Operator Typeof
		// Undefined => undefined
		// Null => object
		// Boolean => boolean
		// Number => number
		// BitInt => bigint
		// String => string
		// Symbol => symbol
		// Function => function
		// Lainnya => object

		Contoh 1
		let data;
		// let data = null;
		// let date = {};
		// let data = [];
		// let data = "amria";
		// let data = 100;
		
		const typeData = typeof data;
		document.writeln(`<p>${typeData}</p>`);

	</script><br><br>
</body>
</html>