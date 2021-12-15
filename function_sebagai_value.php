<!DOCTYPE html>
<html>
<head>
	<title>Function Sebagai Value</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Function Sebagai Value");

		// Functin Sebagai Value
		// function tidak hanya bisa digunakan sebagai kode program yang dieksekusi, tapi bisa juga sebagai value.
		// artinya, function bisa disimpan di variable, bisa juga dikirim melalui parameter ke function lainya.

		function sayHello(name) 
		{
			document.writeln(`<p>Hello ${name}</p>`);
		}

		let say = sayHello;

		sayHello("Amria");
		say("Rendy");


		say = sayHello;

		function giveMeName(callback)
		{
			callback("Amria"); // sayHello("Amria");
		}

		giveMeName(sayHello);
		giveMeName(say); // giveMeName(sayhello)

	</script><br><br>
</body>
</html>