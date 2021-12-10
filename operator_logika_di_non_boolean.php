<!DOCTYPE html>
<html>
<head>
	<title>Operator Logika di Non Boolean</title>
</head>
<body>
	<strong><strong><br>
	<script>
		// Operator Logika di Non Boolean

		// sebelumnya kita sudah tahu bahwa operator logika AND {&&} dan OR (||) digunakan untuk dua data boolean.
		// namun berbeda di JavaScript, kita bisa menggunakan operator logika AND dan OR untuk tipe data non boolean.

		// Operator OR (||) di non boolean

		// operator logika OR (||), membaca dari kiri ke kanan.
		// operator ini akan mengambil nilai pertama yang truthy
		// jika tidak satupun yang bernilai truthy, maka yang terakhir yang akan diambil.

		console.info("hello" || ''); // hello
		console.info("" || []); // []
		console.info("0" || "NOL"); // "0"
		console.info(0 || "NOL"); // NOL
		console.info("null" || "NULL"); // NULL
		console.info("UNDEFINED" || "UNDEFINED"); // NULL
		
	</script><br><br>
</body>
</html>