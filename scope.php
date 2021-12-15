<!DOCTYPE html>
<html>
<head>
	<title>Scope</title>
</head>
<body>
	<strong>Scope<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Scope");

		// Scope
		// scope merupakan area akses sebuah data.
		// ada dua jenis scope, global scope dan local scope.
		// setiap kita membuat function, maka kita akan membuat local scope untuk function tersebut.
		// data di global scope bisa diakses dari local scope, namun data di local scope hanya bisa di akses di local scope tersebut atau di scope local dibawahnya (dalam kasus function dalam function).

		// global scope
		// Contoh 1
		let counter = 0;

		function hitMe()
		{
			// local scope function hitMe
			counter++; // we can access
		}

		hitMe();
		hitMe();

		console.info(counter);

		// Contoh 2
		function first()
		{
			// local scope first
			let firstVariable = "First";
		}

		function second()
		{
			// local scope second
			let secondVariable = "Second";
		}

		first()
		second()
		// console.info(firstVariable); // can not access local scope
		// console.info(secondVariable); // can not access local scope

		// Nested Function Scope
		// Contoh 3
		function first()
		{
			let firstVariable = "First";

			function second()
			{
				console.info(firstVariable); // can access local scope
			}
			second();
		}
		first();
	</script><br><br>
</body>
</html>