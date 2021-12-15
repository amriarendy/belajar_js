<!DOCTYPE html>
<html>
<head>
	<title>Recursive Function</title>
</head>
<body>
	<strong>Recursive Function<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Recursive Function");

		// Reqursive Function
		// reqursive function adalah kemampuan function memanggil function dirinya sendiri.
		// kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial.

		function factorial(value)
		{
				let result = 1;
				for (let i = 1; i <= value; i++) {
					result *= i;
			}

			return result;
		}

		console.info(factorial(7));
		// console.info(1 * 2 * 3 * 4 * 5 * 6 * 7);

		// Factorial Recursive
		console.info("Factorial Recursive");
		function factorialRecursive(value)
		{
			if (value === 1) {
				return 1;
			} else {
				return value * factorialRecursive(value - 1);
			}
		}

		console.info(factorialRecursive(7));

		factorialRecursive(5);
		// 5 * factorialRecursive(4)
		// 5 * 4 * factorialRecursive(4)
		// 5 * 4 * 3 * factorialRecursive(4)
		// 5 * 4 * 3 * 2 * factorialRecursive(4)
		// 5 * 4 * 3 * 2 * 1
	</script><br><br>
</body>
</html>