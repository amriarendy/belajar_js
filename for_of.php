<!DOCTYPE html>
<html>
<head>
	<title>For Of</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("For Of");

		// For Of 
		// jika for in digunakan untuk melakukan iterasi property atau index, berbeda dengan For Of, ini digunakan untk melakukan iterasi terhadap isi value dari iterable object, seperti array, string dan lain-lain.
		// for of tidak bisa digunakan untuk melakukn iterasi data di object, karena object bukanlah iterable

		// For Of dari Array
		document.writeln("For Of dari Array<br><br>");

		const names = ["amria", "rendy", "desbintra"];

		for (const name of names) {
			document.writeln(`<p>${name}</p>`);
		}

		// For Of dari String
		document.writeln("For Of dari String<br><br>");

		const fullName = "amria rendy desbintra";

		for (const character of fullName) {
			document.writeln(`<p>${character}</p>`);
		}

	</script><br><br>
</body>
</html>