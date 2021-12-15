<!DOCTYPE html>
<html>
<head>
	<title>Distructuring</title>
</head>
<body>
	<strong>Distructuring<strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("- Distructuring");

		// destructuring adalah fitur yang bisa digunakan untuk membongkar value-value di array atau object ke dalam variable-variable.
		// fitur ini sangat mempermudah kita ketika ingin mengambil data dari array atau object tanpa harus melakukan pengambilan data satu persatu.

		const names = ["Eko", "Amria", "Tri"];
		const firstName = names[0];
		const middleName = names[1];
		const lastName = names[2];

		console.info(firstName);
		console.info(middleName);
		console.info(lastName);

		// Destructuring Array
		console.info("- Destructuring Array");

		const name = ["Amria", "Rendy", "Desbintra", "Mike", "Portnoy"];

		const [firstName2, middleName2, lastName2, ...others2] = name;

		console.info(firstName2);
		console.info(middleName2);
		console.info(lastName2);
		console.info(others2);

		// Mengambil data di object (Destructuring Object)
		console.info("- Destructuring Object");
		const person = {
			firstName3: "Amria",
			lastName3: "Rendy",
			address: {
				street: "Jalan belum ada",
				city: "Jakarta",
				country: "Indonesia"
			},
			hobby: "Game",
			channel: "goican.id"
		};
		// let {firstName3, lastName3, address, ...others3} = person;
		// Nasted destructuring objek
		let {firstName3, lastName3, address:{city, street, country}, ...others3} = person;
		console.info(firstName3);
		console.info(lastName3);
		// console.info(address);
		console.info(country);
		console.info(street);
		console.info(others3);

		// Destructuring Function Parameter
		// destructuring tidak hanya bisa dilakukan di variable, tapi juga bisa dilakukan di function parameter.
		// hal ini membuat kita mudah ketika ingni mengambil nested data dalam array atau object dalam function.

		console.info("- Destructuring Function Parameter");
		function displayPerson({firstName4, middleName4, lastName4}) {
			console.info(firstName4);
			console.info(middleName4);
			console.info(lastName4);
		}

		const person4 = {
			firstName4: "Amria",
			middleName4: "Rendy",
			lastName4: "Desbintra"
		};
		displayPerson(person4);

		// Destructuring Function Parameter (2)
		console.info("- Destructuring Function Parameter (2)");

		function sum([first, second]) {
			return first + second;
		}

		console.info(sum([10, 10]));
		console.info(sum([20, 10]));

		// Default Value
		// yang paling menarik di destructuring adalah, kita bisa manambahkan default value.
		// jadi misal kita-kita melakukan destructuring terhadap array, ternyata tidak ada datanya, maka kita bisa menambahkan default value.
		// begitu juga pada object, jika ternyata propertynya tidak ada, maka kita bisa menambahkan default value.
		console.info("- Destructuring Function Array");

		const names5 = ["Amria", "Rendy"];
		const [firstName5, middleName5, lastName5 = "Mike"] = names5;

		console.info(firstName5);
		console.info(middleName5);
		console.info(lastName5);

		// Default Value Destructing Object
		console.info("- Default Value Destructuring Object");
		const person6 = {
			firstName6: "Amria",
			lastName3: "Rendy",
		};

		let {firstName6, middleName6 = "Portnoy", lastName6} = person6;
		console.info(firstName6);
		console.info(middleName6)
		console.info(lastName6);

		// Menggunakan Nama Variable Lain
		// saat melakukan destructuring di array, kita bisa dengan mudah membuat nama variable sesuka kita.
		// namun pada saat melakukan destructing, kita harus membuat nama variable sama dengan nama property.
		// kita juga bisa menggunakan nama variable lain saat melakukan destructuring object jika kita mau.
		console.info("- Destructuring Variable Lain");

	{	
		const person = {
			firstName: "Amria",
			middleName: "Rendy",
			lastName: "Desbintra"
		};

		let {firstName: namaDepan,
			middleName: namaTengah = "Kurniawan",
			lastName: namaBelakang} = person;

			console.info(namaDepan);
			console.info(namaTengah);
			console.info(namaBelakang);
	}

	</script><br><br>
</body>
</html>