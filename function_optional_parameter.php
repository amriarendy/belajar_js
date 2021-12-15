<!DOCTYPE html>
<html>
<head>
	<title>Function Optional Parameter</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Function Optional Parameter");

		// Optional Parameter 
		// secara default, parameter di function itu optional.
		// artinya kita tidak wajib mengisi valuenya ketika memanggil function.
		// jika tidak ada value yang kita kirim ke parameter ketika memanggul function, maka secara otomatis parameter tersebut bernilai undefined.

		function sayHello(firstName, middleName, lastName) {
			console.log(firstName);
			console.log(middleName);
			console.log(lastName);
		}
		
		sayHello();
		sayHello("Amria");
		sayHello("Amria", "Rendy");
		sayHello("Amria", "Rendy", "Desbintra");
	</script><br><br>
</body>
</html>