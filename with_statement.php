<!DOCTYPE html>
<html>
<head>
	<title>With Statement</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("With Statement");

		// With Statement
		// with statement merupakan fitur yang digunakan untuk menurunkan sebuah scope data.
		// dengan menggunakan with statement, kita bisa mengakses property dalam sebuah data tanpa harus menyebut datanya.

		// 
		const person = {
			firstName: "Amria",
			middleName: "Rendy",
			lastName: "Desbintra"
		}
		// Contoh pertama
		console.info("Contoh 1");
		console.log(person.firstName);
		console.log(person.middleName);
		console.log(person.lastName);

		// Contoh kedua
		console.info("Contoh 2");
		with (person) {
			console.log(firstName);
			console.log(middleName);
			console.log(lastName);
		}
		
	</script><br><br>
</body>
</html>