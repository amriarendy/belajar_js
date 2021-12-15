<!DOCTYPE html>
<html>
<head>
	<title>Tipe data objek</title>
</head>
<body>
	<strong>Tipe Data Objek</strong><br>
	<script>

		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Tipe Data Objek");

		// Associative Array
		// Dibahasa pemrograman lain seperti PHP, kita bisa menggunakan index berubah data lain selain numberm misal string.
		// Fitur ini biasanya disebut associative array atau hash.
		// Di JavaScript associative array tidak didukung.
		// Jika kita memaksa memasukan data bukan number di index array, maka JavaScript akan merubah tipe data array tersebut menjadi object, dan ini bisa berbahaya, karena beberapa operasi di arrau mungkin bisa berubah hasilnya.

		// Tipe Data Objek
		// Tipe data objek adalah tipe data yang mirip dengan tipe data array.
		// Yang membedakan adalah index pada tipe data objek bisa menggunakan string.
		// Index di objek biasanya disebut attributes atau properties, bukan index.
		// Cara menggunakan objek {} (Kurung Kurawal).

		const person = {};
		// Menambah atau mengubah
		person["nama"] = "Amria Rendy";
		person["alamat"] = "Indonesia";
		person["umur"] = 25;
		console.table(person);
		// Menghapush
		delete person["umur"];
		console.table(person);
		console.info("Menghapush objek");

		// Membuat objek dengan properties
		const orang = {
			nama : "Amria Rendy",
			alamat : "Indonesia",
			umur : 25,
			"tempat dan tanggal lahir" : "Dimana aja boleh, 1996",
		};
		console.table(orang);
		console.info("Membuat objek dengan properties");

		// Mengaksses property objek
		console.info(`Nama : ${orang.nama}`);
		console.info(`Alamat : ${orang.alamat}`);
		console.info(`Umur : ${orang.umur}`);
		console.info(`ttl : ${orang["tempat dan tanggal lahir"]}`);
		console.info("Mengakses Property objek");
		
	</script><br><br>
</body>
</html>