<!DOCTYPE html>
<html>
<head>
	<title>Function Parameter atau Argument</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Function Parameter atau Argument");

		// Function Parameter
		// kita bisa mengirim informasi ke function yang ingin kita panggil.
		// untuk melakukan hal tersebut, kita perlu menambahkan parameter atau argument di function yang sudah kita buat.
		// parameter ditempatkan di dalam kurung () di deklarasi method.
		// parameter bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma.

		// Membuat funtion dengan parameter
		function sayHello(firstName, lastName)
		{
			document.writeln(`<p>hello ${firstName} ${lastName}</p>`);
		}

		// Memanggil function dengan parameter.
		sayHello("Amria", "Rendy");
		sayHello("Mike", "Portnoy");
	</script><br><br>
</body>
</html>