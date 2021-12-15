<!DOCTYPE html>
<html>
<head>
	<title>Strict Mode</title>
</head>
<body>
	<strong>Strict Mode<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Strict Mode");

		// Strict Mode.
		// saat kita menjalankan kode program JavaScript, secara default kode program kita berjalan dalam mode tidak strict, atau istilahnya sloppy mode.
		// pada ECMAScript 5, diperkenalkan mode strict, dimana ketika strict mode dijalankan, maka akan merubah beberapa cara kerja di JavaScript, seperti.
		// ~ merubah beberapa JavaScript error dari yang tadinya silent error, menjadi throw erro (terlihat).
		// ~ memperbaiki beberapa kesalahan engine JavaScript untuk optimasi.
		// ~ menolak beberapa kode perintah yang kedepannya akan digunakan di ECMAScript
		// url 'https://developer.mozila.org/en-US/docs/Web/JavaScript/Reference/Strict_mode/Transitioning_to_strict_mode'.

		// Cara menyalakan Strict Mode
		// untuk menyalakan strict mode, kita bisa menambahkan `use strick` pada baris awal file javascript kita.
		// atau bisa juga ditambahkan di awal function kita.

		function useStrictMode()
		{
			'use strict'; // kode manjalankan mode strict
			const person = {
				firstName: "Amria"
			}
			with (person) { // errornya akan disini..
				console.info(firstName);
			}
		}

		useStrictMode();
	</script><br><br>
</body>
</html>