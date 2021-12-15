<!DOCTYPE html>
<html>
<head>
	<title>Tipe data array dasar</title>
</head>
<body>
	<strong>Tipe Data Array Dasar</strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Tipe Data Array Dasar");

		// Array adalah tipe data yang berisikan kumpulan data.
		// Array di JavaScript memiliki sifat dinamis, artinya datanya bisa bertambah dengan sendirinya saat kita masukan data ke dalam Array.

		// Kode menambah array.

		// Cara data di array akan disimpan dalam posisi berurutan, dimana urutan pertama dimulai dari nomor 0.
		// Setiap kita menambah data ke Array, otomatis data akan disimpan di urutan terakhir.
		// Urutan di array, kita sebut dengan index.
		// Perintah untuk

		let arrayKosong = [];
		let arrayNama = ["Amria", "Rendy", "Desbintra"];

		const namesArray = [];
		namesArray.push("Amria");
		namesArray.push("Rendy", "Desbintra");
		namesArray.push("Fauzan", "Meri", "Ade");

		console.info("Ini tipe data array dasar");
		console.table(namesArray);

		// Operasi di Array
		// array.push(value) => Menambah data ke Array
		// array.length => Untuk mendapatkan panjang Array
		// array[index] => Mendapat data di posisi index
		// array[index] = value => Mengubah data di posisi index
		// delete array[index] => Menghapus data di posisi index, namun index tidak bergeser

		console.info(namesArray[0]);
		console.info(namesArray[1]);
		console.info(namesArray[2]);
		console.info("Mengubah array value");

		namesArray[0] = "Goican";
		namesArray[1] = "id";
		namesArray[2] = "Created Service";
		console.table(namesArray);
		console.info("Mengubah array value");

		delete namesArray[2];
		console.table(namesArray);
		console.info("Menghapus array value");

		// Perlu Diingat
		// Data di dalam array tidak ada batasannya harus data apa.
		// Jadi kita bisa memasukan data apapun ke dalam array.
		// Bahkan kita juga bisa memasukan array ke dalam array jika kita mau.

		namesArray.push("Ini pengganti yang dihapus array index[2]");
		console.table(namesArray);
		console.info("Mengganti index array value");

		namesArray.push(1,2,3,4);
		console.table(namesArray);
		console.info("Memasukan data selain string");

		namesArray.push(1,2,3,4);
		namesArray.push(["amria", "rendy", "desbintra"]);
		console.table(namesArray);
		console.info("Memasukan array kedalam array");
	</script>
</body>
</html>