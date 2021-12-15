<!DOCTYPE html>
<html>
<head>
	<title>In Operator</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("In Operator");

		// in operator adalah operator yang bisa dilakukan untuk mengecek apakah sebuah property ada di dalam object atau tidak.
		// jika property tersebut ada di object, maka hasilnya true, sedangkan jika tidak, maka hasilnya false.
		// tidak hanya di object, In juga bisa digunakan untuk mengecek index di array.

		const person = {
			firstName : "amria",
			lastName : "Rendy"
		};

		const result = "firstName" in person; // true
		document.writeln(`<p>${result}</p>`);

		if ("firstName" in person) {
			alert(`Hai ${person.firstName}`);
		} else {
			alert("why");
		}

		// Peringatan
		// in operator hanya akan mengecek apakah sebuah property atau index ada atau tidak.
		// jadi walaupun nilai properti atau indexnya undefined atau null, maka tetap akan dianggap ada.

		const student = {
			firstName2: "amria",
			middleName2: undefined,
			lastName2: "senju"
		}

		// contoh 2
		if ("middleName2" in student) {
			alert(`Hai ${student.middleName2}`);
		} else {
			alert("Hallo to");
		}

		//contoh 3
		const names = [null, "Rendy", null];
		const nameResult2 = 0 in names; // true
		document.writeln(`<p>${nameResult2}</p>`);

	</script><br><br>
</body>
</html>