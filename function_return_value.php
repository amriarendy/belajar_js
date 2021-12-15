<!DOCTYPE html>
<html>
<head>
	<title>Function Return Value</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Function Return Value");

		// Function Return Value 
		// secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan value.
		// agar function bisa menghasilkan value, kita bisa menggunakan kata kunci return di dalam functionnya.
		// dan didalam block functin, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin kita hasilkan.
		// functino hanya bisa mengembalikan satu data, jika kita ingin mengembalikan beberapa data sekaligus, kita bisa menggunakan array sebagai return valuenya.

		// membuat function dengan parameter dan return value
		function sayHello(firstName, lastName)
		{
			const say = `hello ${firstName} ${lastName}`;
			return say;
		}

		// memanggil function dan menangkap return valuenya
		const result = sayHello("Amria", "Rendy");
		document.writeln(`<p>${result}</p>`);

		function getFinalScore(value)
		{
			if (value > 90) {
				return "A";
			} else if (value > 80) {
				return "B";
			} else if (value > 70) {
				return "C";
			} else if (value > 60) {
				return "D";
			} else {
				return "E";
			}
		}

		const finalValue = getFinalScore(95);
		document.writeln(`<p>${finalValue}</p>`);

		// Menghentikan eksekusi dengan return
		// saat kita menggunakan kata kuncti return, maka kode setelah return tersebut tidak akan dieksekusi.
		// kita bisa menggunakan return untuk menghentikan eksekusi sebuah function.

		function isContains(array, searchValue)
		{
			for (const element of array) {
				console.info(`Iterasi Element ${element}`);
				if (element === searchValue) {
					return true;
				}
			}
			return false;
		}

		const array = [1, 515, 12, 123, 11, 12, 5, 6, 97];
		const search = 10;
		const found = isContains(array, search);
		document.writeln(`<p>${found}</p>`);
		// console.info(isContains([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 5));
	</script><br><br>
</body>
</html>