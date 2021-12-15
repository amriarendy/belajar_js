<!DOCTYPE html>
<html>
<head>
	<title>Function dalam Function</title>
</head>
<body>
	<strong>Function dalam Function<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Function dalam Function");

		// Function dalam Function
		// tidak ada batasan dimana kita bisa membuat function.
		// termasuk jika kita ingin membuat funciton di dlam sebuah, kita bisa melakukannya.
		// function yang terdapat didlalam, kita sebut inner function.
		// inner function hanya bisa diakses di tempat kita membuat functionnya, tidak bisa di akses dari luar function.

		function outer()
		{
			function inner()
			{
				console.info("Inner");
			}

			inner()
			inner();
		}

		outer();
		// inner() // ERROR can not access inner function
	</script><br><br>
</body>
</html>