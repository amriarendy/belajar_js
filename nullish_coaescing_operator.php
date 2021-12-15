<!DOCTYPE html>
<html>
<head>
	<title>Nullish Coalescing Operator</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Tipe Data Objek");

		// nullist value adalah null dan undefined. 
		// nullist coalescing operator (??) adalah operator mirip dengan ternary operator, yang membedakan adalah pada kondisim jka bernilai null atau undefinde, baru value defaultnya di ambil.

		let parameter;

		let data = parameter;
		if (data === undefined || data === null) {
			data = "nilai default";
		}
		document.writeln(`<p>${data}</p>`);

		data = parameter ?? "nilai default";
		document.writeln(`<p>${data}</p>`);
	</script><br><br>
</body>
</html>