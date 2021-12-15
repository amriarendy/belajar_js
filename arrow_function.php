<!DOCTYPE html>
<html>
<head>
	<title>Arrow Function</title>
</head>
<body>
	<strong>Arrow Function<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Arrow Function");

		// Arrow function adalah alternatif pembuatan function yang lebih sederhana dari function biasanya.
		// namun terdapat limitasi danjuga tidak bisa digunakan di semua situasi.
		// dinamakan arrow function karena menggunakan tanda => (seperti panah).
		// berikut contoh beberapa kekurangan arrow function.
			// ..tidak memiliki fitur arguments object.
			// ..tidak bisa menggunakan function generator.
			// ..tidak bisa mengakses this (yang nanti akan dibahas di function di object).
			// ..tidak bisa mengakses super (yang nanti akan dibahas di JavaScript Object Oriented Programming).

		// Membuat Arrow Function
		// const sayHello = (name) => {
		// 	const say = `Hello ${name}`;
		// 	console.info(say);
		// }

		const sayHello = (name) => console.info(`Hello ${name}`);
		sayHello("Amria");

		// Arrow Function Tanpa Blok
		// jika arrow function isinya sederhana, misal hanya satu baris.
		// kita bisa membuar arrow function tanpa harus menggunakan block.

		// Arrow Function Return Value
		// arrow function bisa mengembalikan value, sama seperti function biasanya.
		// jika menggunakan block, maka kita perlu menggunakan kata kunci return.
		// jika tidak menggunakan block kita tidak perlu menggunakan kata kunci return.

		const sum = (first, second) => first + second; // jika mau satu baris tidak perlu menambahkan return.

		const sum_return = (first, second) => {
			return first + second;
		}
		console.info(sum(10, 10));

		// Arrow Function Tanpa Kurung Parameter
		const sayHelloTanpaParameter = name => console.info(`Hello ${name}`);
		sayHelloTanpaParameter("Amria");

		// Arrow Function 2 Parameter tambahkan (field1, field2)
		// const sayHelloDuaParameter = name => console.info(`Hello ${name}`);
		// sayHelloDuaParameter("Amria");

		// Arrow Fonction Sebagai Parameter
		// karena arrow function sama seperti anonymous function.
		// jadi kita juga bisa menggunakna arrow function sebagai parameter di function lain.

		function giveNeName(callback) {
			callback("Amria");
		}

		// Anonymous Function
		// giveNeName((name) => console.info(`Hello ${name}`));

		// Arrow Function
		giveNeName(name => console.info(`Hello ${name}`));

	</script><br><br>
</body>
</html>