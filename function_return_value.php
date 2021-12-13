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

		}
	</script><br><br>
</body>
</html>