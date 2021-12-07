<!DOCTYPE html>
<html>
<head>
	<title>Kata Kunci let dan const</title>
</head>
<body>
	<strong>Kata kunci let dan const</strong><br>
	<script>
		// Sebelum tahun 2015, kata untuk membuat variable hanya bisa menggunakan kata kunci var.
		// Namun tahun 2015 sejak versi ECMAScript 2015, diperkenalkan kata kunci baru ntuk membuat variable, let dan const.
		// JavaScript sekarang tidak di rekomendasikan lagi menggunakan kata kunci var untuk membuat variable, namun diganti dengan let, hal ini dikarenakan ada masalah dari desain awal var.
		// Jangan gunakan var tapi gunakan let atau const.

		let firstNameLet = "Amria";
		let middleNameLet = "Rendy";
		let lastNameLet = "Desbintra";
		let fullNameLet = "Amria" + " " + "Rendy" + " " + "Desbintra";

		document.writeln(firstNameLet);
		document.writeln("</br>");
		document.writeln(middleNameLet);
		document.writeln("</br>");
		document.writeln(lastNameLet);
		document.writeln("</br>");
		document.writeln(fullNameLet);
		document.writeln("</br>");

		// Kata kunci const
		// Kata kunci let itu seperti kata kunci var, dimana data di variable tersebut bisa diubah-ubah sesuka hati.
		// Sedangkan kata kunci const berbeda, ketika sebuah variable sudah diisi di variable const, maka variable tersebut tidak bisa diubah lagi valuenya.
		// Variable sejening ini kadang dibilang juga konstant
		// Contoh :

		const application = "Belajar JavaScript Dasar";
		// application = "Gak Mau Belajar"; // Syntax Error lihat di browser > inspect > console

		// Kesimpulan let variable yang valuenya bisa diubah-ubah namun untuk const valuenya tidak bisa diubah-ubah.

	</script><br><br>
</body>
</html>