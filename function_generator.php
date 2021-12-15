<!DOCTYPE html>
<html>
<head>
	<title>Function Generator</title>
</head>
<body>
	<strong>Function Generator<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Function Generator");

		// Funtion Generator
		// function generator adalah function yang digunakan untuk membuat data generator.
		// generator adalah data yang bisa di interasi seperti array.
		// untuk membuat function generator, kita perlu menggunakan tanda *(bintang) setelah kata function.
		// dan untuk mengembalikan data di tiap iterasi, kita bisa gunakan kata kunci yield diikuti datanya.

		function* createNames()
		{
			yield "Amria";
			yield "Rendy";
			yield "Desbinta";
		}

		const names = createNames();
		for (const name of names) {
			console.log(name);
		}

		// Function Generator Kompleks
		// LazyGenerator
		function* buatGanjil(value)
		{
			for (let i = 1; i <= value; i++) {
				if ( i % 2 === 1) {
					console.info(`Yield ${i}`); // Lazy Evaluation
					yield i;
				}
			}
		}
		const angkaGanjil = buatGanjil(100);
		console.info(angkaGanjil.next().value);
		console.info(angkaGanjil.next().value);
		console.info(angkaGanjil.next().value);

		// const numbers = buatGanjil(100);
		// for (const number of numbers) {
		// 	console.info(number);
		// }

		// Lazy Evaluation
		// generator itu sifatnya lazy.
		// jadi artinya jika kita tidak ada data belum kita ambil dari generatorm maka yield selanjutnya tidak akan di eksekusi.

		// Eager
		function buatGanjilArray(value)
		{
			const result = []
			for (let i = 1; i <= value; i++) {
				if ( i % 2 === 1) {
					console.info(`Yield ${i}`); // Lazy Evaluation
					result.push(i);
				}
			}
			return result;
		}

		const numbers = buatGanjilArray(100);
		for (const number of numbers) {
			console.info(number);
		}


	</script><br><br>
</body>
</html>