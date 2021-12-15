<!DOCTYPE html>
<html>
<head>
	<title>Getter dan Setter</title>
</head>
<body>
	<strong>Getter dan Setter<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Getter dan Setter");

		// getter dan setter adalah kemampuan membuat function yang berbeda untuk mengambil dat (Getter) dan mengubah data (Setter) pada sebuah property di object.
		// dengan menggunakan Getter dan Setter, kita bisa melakukan hal apapun dalam function sebelum sebuah property di akses atau di ubah, misal menambah validasi dan lain-lain.

		const person = {
			firstName: "Amria",
			lastName: "Rendy",
			// Getter
			get fullName() {
				return `${this.firstName} ${this.lastName}`;
			},
			// Setter
			set fullName(value){
				const array = value.split(" ");
				this.firstName = array[0];
				this.lastName = array[1];
			}
		};

		person.firstName = "Amria Rendy";
		console.table(person);

		person.firstName = "Mike Portnoy";
		console.table(person);

		person.firstName = "The Rev";
		console.table(person);


	</script><br><br>
</body>
</html>