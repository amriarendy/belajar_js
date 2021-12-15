<!DOCTYPE html>
<html>
<head>
	<title>Objek Method</title>
</head>
<body>
	<strong>Objek Method<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Objek Method");

		// Object Method
		// pada tipe data object, kita sudah membahas tetang property di object.
		// karena sebenarnya function juga merupakan salah satu tipe data, jadi function pun sebenarnya bisa ditambahkan sebagai property di objek.
		// cara pembuatannya pun sama dengan function sebagai value
		// function di object kadang disebut juga sebagai object method

		// const person = {
		// 	name: "Amria",
		// 	sayHello: function (name) {
		// 		alert(`Hello ${name}`);
		// 	}
		// };
		// person.sayHello("Amria");

		// Menambahkan Method kw Object
		const person2 = {
			name : "Rendy"
		};
		person2.sayHello = function (name) {
			alert(`Hello ${name}`);
		};

		person2.sayHello("Desbintra");
	</script><br><br>
</body>
</html>