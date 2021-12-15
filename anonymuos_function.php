<!DOCTYPE html>
<html>
<head>
	<title>Anonymus Function</title>
</head>
<body>
	<strong>Anonymus Function<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Anonymus Function");

		// Anonymous Function
		// sebelumnya kita selaku membuat function dengan nama.
		// kita juga bisa membuat function tanpa nama function, atau istilahnya adalah anonymous function.
		// kita bisa buat anonymous dalam sebuah variable atau bisa juga kita buat ketika mengisi parameter.

		// Contoh 1

		const say = function (name) {
			document.writeln(`<p>Hello ${name}</p>`);
		};

		say("Amria");
		say("Rendy");

		// Contoh 2

		function giveMeName(callback)
		{
			callback("amria");
		}

		giveMeName(say);

		giveMeName(function (name) {
			document.writeln(`<p>Hello ${name}</p>`);
		});
		// catatan jika mau lebih dari 1 parameter function silahkan untuk menambahkan koma (,) setelah kurung kurawal.

		giveMeName(function (name) {
			document.writeln(`<p>Hello ${name}</p>`);
		});

		giveMeName(function (name) {
			document.writeln(`<p>Hello ${name}</p>`);
		});

	</script><br><br>
</body>
</html>