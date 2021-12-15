<!DOCTYPE html>
<html>
<head>
	<title>For In</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console<br><br>");
		console.info("For In");

		// For In 
		// for in merupakan perulangan for yang digunakan untuk mengiterasi seluruh dta property di objek atau index di array.
		// walaupun for in bisa digunakan untuk array, namun tidak direkomendasikan untuk array, karena biasanya kita jarang sekali butuh data index untuk array, kita bisa menggunakan For Of (yang dibahas setelah ini).

		document.writeln("For In Contoh 1 subject");

		const person = {
			firstName: "Amria",
			middleName: "Rendy",
			lastName: "Desbintra"
		};

		for (const property in person) {
			document.writeln(`<p>Property ${property} : ${person[property]}</p>`);
		}

		document.writeln("For In Contoh 2 array");

		const names = ["amria", "rendy", "desbintra"];
		for(const index in names){
			document.writeln(`<p>${index} : ${names[index]}</p>`);
		}

	</script><br><br>
</body>
</html>