<!DOCTYPE html>
<html>
<head>
	<title>Kata Kunci This</title>
</head>
<body>
	<strong>Kata Kunci This<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Kata Kunci This");

		// Kata kunci this adalah referensi ke object milik siapa.
		// tiap lokasi kata kunci this, bisa berbeda-beda referensi pemiliknya.
		// dalam object method, this merupakan referensi ke object pemilik functionnya.
		// di global scope, this merupakan referensi ke global object (di browser biasanya window)
		// dalam function, this merupakan referensi ke global object (di browser biasanya window).
		// di function dengan strict mode (akan dibahas nanti), this adalah undefined.
		// dalam event, this merupakan referensi ke element yang menerima event (dibahas di materi document object model).

		// Kata kunci this di global scope
		console.info(this);

		// Contoh 1
		function sample()
		{
			console.info(this);

			function inner()
			{
				console.info(this);
			}

			inner();
		}

		sample();

		// Contoh 2
		const person = {
			name: "Amria",
			sayHello: function (name){
				console.info(this);
			}
		};

		person.sayHello("Amria");

		// Contoh 3
		const person3 = {
			name: "Amria",
			sayHello: function (value){
				console.info(`Hello ${value} My Name Is ${this.name}`);
			}
		};

		person3.sayHello("Amria");
		person3.sayHello("Rendy");
	</script><br><br>
</body>
</html>