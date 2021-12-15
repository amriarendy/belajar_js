<!DOCTYPE html>
<html>
<head>
	<title>Arrow Fuction di Object</title>
</head>
<body>
	<strong>Arrow Fuction di Object<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Arrow Fuction di Object");

		// sebelumnya kita sudah bahas tentang arrow function.
		// arrow function juga bisa kita gunakan di sebagai object method
		// namun perlu diketahui, arrow function tidak bisa digunakan untuk mengakses arguments object, function generator, kata kunci this dan kata kunci super (dibahas di mater JavaScript Object Oriented Programming)
		// jadi pastikan gunakan Arrow Function hanya memang ketika kita tidak butuh fitur-fitur di atas.

		const person = {
			name: "Amria",
			sayHello: (name) => {
				console.info(this);
				console.info(`hello ${name}, my name is ${this.name}`);
			}
		};

		person.sayHello("Rendy");
	</script><br><br>
</body>
</html>