<!DOCTYPE html>
<html>
<head>
	<title>Null</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Null Pada JavaScript");

		// null merupakan representasi data kosong. 
		// null berbeda dengan undefined, null berarti variable sudah ditambahkan valuenya, hanya saja valuenya null.
		// sedangkan undefined adalah variable belum ditambahkan value apapun.

		let firstName = null;
		// let firstName;
		// let firstName = "Amria";

		if (firstName === undefined) {
			console.info("Undefined");
		} else if (firstName === null) {
			console.info("Null");
		} else {
			console.info(`Difined ${firstName}`);
		}
	</script><br><br>
</body>
</html>