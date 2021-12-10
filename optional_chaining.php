<!DOCTYPE html>
<html>
<head>
	<title>Optional Chaining</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Optional Chaining");

		// optional chaining operator (?) merupakan operator yang digunakan untuk mengamankan ketika kita ingin mengakses properti sebuah objek dari data nullish.
		// jika kita mencoba mengakses properti dari sebuah objek dari data nullish tanpa menggunakan optional chaining operator, maka akan terjadi error.

		// error mengakses property nullish
		const person = {
			address :{
				country : "Indonesia"
			}
		};

		let country = person?.address?.country;

		// if(person.address !== undefined && person.address !== null) {
		// 	country = person.address.country;
		// }

		document.writeln('Sukses');
		document.writeln(`<p>${country}</p>`);
		document.writeln('Sukses');
	</script><br><br>
</body>
</html>