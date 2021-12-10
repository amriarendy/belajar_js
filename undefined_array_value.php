<!DOCTYPE html>
<html>
<head>
	<title>Undefined Array Value</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Undefined Array Value");

		// Undefined adalah sebuah kata kunci di JavaScript.
		// Undefined adalah sebuah tipe data.
		// Sebuah variable yang belum ditambahkan nilai, maka artinya variable tersebut merupakan tipe undefined.
		// Kadang untuk programmer JavaScript pemula undefined ini memang agak sedikit membingungkan.
		// Undefined itu berbeda dengan null di bahasa pemrograman lain.

		const names = ["amria","rendy"];
		// delete name[0];

		if (names[2] === undefined) {
			console.info("Array Undefined");
		} else {
			console.info("Array Difined");
		}

		const person = {
			name: "amria"
		};

		if(person.name === undefined){
			console.info("Object Undefined");
		} else {
			console.info("Object Difined");
		}

	</script><br><br>
	
	<a href="undefined.php">Undifined</a>
</body>
</html>