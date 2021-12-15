<!DOCTYPE html>
<html>
<head>
	<title>Closure</title>
</head>
<body>
	<strong>Closure<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Closure");

		// Closure
		// closure adalah kombinasi function dan bundle referensi ke data disekitarnya.
		// okw agak membingungkan memang, apalagi untuk yang baru pertama belajar.
		// kita sudah tahu bahwa local scope tidak bsa diakses di luar scopenya.
		// dengan kemampuang closure, kita bisa membuat sebuah function di local scope dan referendi ke data di sekitar local scope tersbut, keluar scopenya.

		function createAdder(value)
		{
			const owner = "Amria";
			function add(param)
			{
				console.info(owner);
				return value + param;
			}
			return add;
		}

		const addTwo = createAdder(2);
		// function addTwo(param) {
		// 	console.info("Amria");
		// 	return 2 + param;
		// }
		console.info(addTwo(10));
		console.info(addTwo(20));

		const addTen = createAdder(10);
		// function addTwo(param) {
		// 	console.info("Rendy");
		// 	return 10 + param;
		// }
		console.info(addTen(10));
		console.info(addTen(20));
	</script><br><br>
</body>
</html>