<!DOCTYPE html>
<html>
<head>
	<title>Rest Parameter</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Rest Parameter");

		// Rest Parameter 
		// rest parameter adalah fitur dimana kita bisa mengirim data sebanyak-banyaknya pada satu parameter, dan secara otomatis akan di konversi menjadi array.
		// untuk membuat rest parameter, ada ketentuannya.
		// rest parametre hanya boleh ada satu di function, tidak boleh lebih dari satu.
		// rest parameter hanya boleh berada di posisi paling akhir, tidak boleh di depan atau ditengah, kecuali memang cuma ada 1 parameter.
		// di bahasa pemrograman lain, ada juga yang bilang ini adalah variable argument.

		function sum(name, ...data) {
			let total = 0 
			for (const item of data) {
				total += item;
			}
			console.info(`Total ${name} is ${total}`);
		}
		sum('Orance', 2, 3, 4, 6, 7, 8);
		sum('Apple', 5, 5, 6, 7, 5, 6);
		sum('Banana', 9, 5, 2, 3, 4);

		// Spread Syntax
		// kadang kita terlanjur memilik data berupa array.
		// tapi untungnya kita juga bisa mengirim array ke rest parameter.
		// kita bias gunakan ...(titik tiga kali) diikuti dengan array-nya ketika memanggil function.
		// fitur ini dinamakan Spread Syntax.

		// contoh yang error
		const values_error = [10,10,10,10,10];
		sum ('test', values_error);

		// contoh yang spread syntax
		const values = [10,10,10,10,10];
		sum ("test", ...values);

		// Arguments Object
		// sebelum ada fitur rest parameter, di JavaScript sudah ada fitur yang bernama arguments object.
		// ini adalah fitur dimana kita bisa mengambil semua parameter dalam bentuk array dengan menggunakan object bernama arguments.
		// arguments secara otomatis bisa digunakan di function.
		// namun perlu diingat, bahwa untuk JavaScript saat ini, lebih baik disarankan menggunakan rest parameter dibandingkan object.

		function oldSum()
		{
			let total = 0
			for (const argument of arguments) {
				total += argument;
			}
			document.writeln(`<p>Total is ${total}</p>`);
		}
		oldSum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

	</script><br><br>
</body>
</html>