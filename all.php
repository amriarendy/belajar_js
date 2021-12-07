<!DOCTYPE html>
<html>
<head>
	<title>Belajar JavaScript</title>
</head>
<body>
	<strong>Printf di JS</strong><br>
	<script>
		document.writeln("Hello World");
	</script><br><br>

	<strong>Printf di JS di patch folder</strong><br>
	<script src="script/hello-world.js"></script><br><br>

	<strong>Value number</strong><br>
	<script>
		document.writeln(100);
		document.writeln("<br>");
		document.writeln(100.5)
	</script><br><br>

	<strong>Number Binary</strong><br>
	<script>
		document.writeln(0b1111010);
	</script><br><br>

	<strong>Tipe data boolean (true,false)</strong><br>
	<script>
		document.writeln(true); //benar
		document.writeln("<br>");
		document.writeln(false); //salah
	</script><br><br>

	<strong>Tipe data string</strong><br>
	<script>
		document.writeln("Amria Rendy Desbintra");
		document.writeln("<br>");
		document.writeln('goican.id');
	</script><br><br>

	<strong>Menambah atau menggabungkan string</strong><br>
	<script>
		document.writeln("Nama : " + "Amria Rendy " + "Desbintra");
		document.writeln("<br>");
		document.writeln('Website ' + 'www.goican.id');
	</script><br><br>

	<strong>Escape Squence</strong><br>
	<script>

		// Enter => \n 
		// Tab => \t 
		// ' => \'
		// " => \"
		// \ => \\

		document.writeln("<textarea cols='100' rows='10'>");
		document.write("Amria\nRendy\nDesbintra\n");
		document.write("\\Home \\Sweet Home\n");
		document.write("\"www.goican.id\"\n");
		document.write('\'Jual Beli Di Goican\'\b');
		document.writeln("</textarea>");
	</script><br><br>

	<strong>Variable</strong><br>
	<script>
		// Variable ada tempat untuk menyimpan data.
		// Dengan menyimpan data di variable, kita bisa menggunakan lagi dengan menyebutkan nama variablenya.
		// Untuk membuat variable di JavaScript, kita bisa menggunakan kata kunci var diikuti dengan nama variablenya.
		// JavaScript adalah dynamic language, artinya variabe di JavaScript tidak terpaku harus menggunakan satu tipe data, kita bisa mengubah-ubah tipe data variable yang sama.

		// Cara membuat variable gunakan kata kunci awal "var" contoh var fullName;
		// kemalCase => diawali dengan huruf kecil kemudian suku kata kedua dan selanjutnya menggunakan kapital (Kebiasaan developer JavaSript)
		
		// Mengunbah Value di Variable gunakan "="
		var firstName = "Amria";
		var middleName = "Rendy";
		var lastName = "Desbintra";
		var fullName = "Amria" + " " + "Rendy" + " " + "Desbintra";

		document.writeln(firstName);
		document.writeln("</br>");
		document.writeln(middleName);
		document.writeln("</br>");
		document.writeln(lastName);
		document.writeln("</br>");
		document.writeln(fullName);
		document.writeln("</br>");

	</script><br><br>

	<strong>Kata kunci let dan const</strong><br>
	<script>
		// Sebelum tahun 2015, kata untuk membuat variable hanya bisa menggunakan kata kunci var.
		// Namun tahun 2015 sejak versi ECMAScript 2015, diperkenalkan kata kunci baru ntuk membuat variable, let dan const.
		// JavaScript sekarang tidak di rekomendasikan lagi menggunakan kata kunci var untuk membuat variable, namun diganti dengan let, hal ini dikarenakan ada masalah dari desain awal var.
		// Jangan gunakan var tapi gunakan let atau const.

		let firstNameLet = "Amria";
		let middleNameLet = "Rendy";
		let lastNameLet = "Desbintra";
		let fullNameLet = "Amria" + " " + "Rendy" + " " + "Desbintra";

		document.writeln(firstNameLet);
		document.writeln("</br>");
		document.writeln(middleNameLet);
		document.writeln("</br>");
		document.writeln(lastNameLet);
		document.writeln("</br>");
		document.writeln(fullNameLet);
		document.writeln("</br>");

		// Kata kunci const
		// Kata kunci let itu seperti kata kunci var, dimana data di variable tersebut bisa diubah-ubah sesuka hati.
		// Sedangkan kata kunci const berbeda, ketika sebuah variable sudah diisi di variable const, maka variable tersebut tidak bisa diubah lagi valuenya.
		// Variable sejening ini kadang dibilang juga konstant
		// Contoh :

		const application = "Belajar JavaScript Dasar";
		// application = "Gak Mau Belajar"; // Syntax Error lihat di browser > inspect > console

		// Kesimpulan let variable yang valuenya bisa diubah-ubah namun untuk const valuenya tidak bisa diubah-ubah.

	</script><br><br>

	<strong>Operator Aritmatika</strong><br>
	<script>
		// + => Pertambahan => Tambah
		// - => Pengurangan => Kurang
		// * => Perkalian => Kali
		// ** => Exponesial => Pangkat
		// / => Pembagian => Bagi
		// % => Sisa Bagi => Modulo

		let result = 1 + 2;
		document.writeln("<p>1+2 = " + result + "</p>");
		let originalResult = result;

		result = result - 1;
		document.writeln("<p>" + originalResult + " - 1 = " + result + "</p>");
		originalResult = result;

		result = result * 2;
		document.writeln("<p>" + originalResult + " * 2 = " + result + "</p>");
		originalResult = result;
	</script><br><br>

	<strong>Operator Augmented Assigmend</strong><br>
	<script>
		let resultAA = 1 + 2;
		document.writeln("<p> 1 + 2 = " + resultAA + "</p>");
		let originalResultAA = resultAA;

		resultAA -= 1;
		document.writeln("<p>" + originalResultAA + " - 1 = " + resultAA + "</p>");
		originalResultAA = resultAA;

		resultAA *= 2;
		document.writeln("<p>" + originalResultAA + " * 2 = " + resultAA + "</p>");
	</script><br><br>

	<strong>Operator Unary</strong><br>
	<script>
		// Cukup membutuhkan 1 data
		// + => Menandakan nilai positif;
		// - => Menandakan nilai negatif;
		// ++ => Increment, menaikan 1 angka;
		// -- => Decrement, menurunkan 1 anga;

		let = resultOp = +1;
		document.writeln("<p>" + resultOp + "</p>");

		resultOp--;
		document.writeln("<p>" + resultOp + "</p>" );

		resultOp++;
		document.writeln("<p>" + resultOp + "</p>")

		resultOp = -resultOp;
		document.writeln("<p>" + result + "</p>")
	</script><br><br>

	<strong>Operasi Perbandingan (Boolean)</strong><br>
	<script>
		// Operasai perbandingan adalah operasi untuk membandingkan dua buah data.
		// Operasi perbandingan adalah operasi yang menghasilkan nilai booblean (Benar atau Salah).
		// Jika hasil operasi adalah, maka nilainya adalah true.
		// Jika hasil operasinya adalah salah, maka nilainya adalah false.

		// > => Lebih dari.
		// < => Kurang dari.
		// >= => Lebih dari sama dengan.
		// <= => Kurang dari sama dengan.
		// == => Sama dengan.
		// === => Sama dengan dan sama tipe.
		// != => Tidak sama dengan.
		// !== => Tidak sama dengan atau tidak sama tipe

		let resutlPerbandingan = 5 > "5";
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 < "5";
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 >= 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 <= 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 == 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 === 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 != 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

		resutlPerbandingan = 5 !== 10;
		document.writeln("<p>" + resutlPerbandingan + "</p>");

	</script><br><br>

	<strong>Operator Logika</strong><br>
	<script>
		// Operator logika adalah operator untuk dua buat data boolean
		// Hasil dari operator logika adalah boolean
		// Operator logika biasanya digunakan untuk operasi boolean

		// Operator && => Dan
		// 1 && 1 =1
		// 1 && 0 = 0
		// 0 && 1 = 0
		// 0 && 0 = 0

		// Operator || => atau
		// 1 || 1 = 1
		// 1 || 0 = 0
		// 0 || 1 = 1
		// 0 || 0 = 0

		// Operator ! => kebalikan
		// ! + 1 = 0
		// ! + 0 = 1

		const nilaiUjian = 80;
		const nilaiAbsensi = 60;

		const lulusUjian = nilaiUjian > 75;
		document.writeln(lulusUjian);
		const lulusAbsensi = nilaiAbsensi > 75;
		document.writeln(lulusAbsensi);

		const lulus = lulusUjian && lulusAbsensi;
		document.writeln("<p>" + lulus + "</p>");

	</script><br><br>

	<strong>Console</strong><br>\
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Operasi Console");
		// JavaScript memiliki fitur untuk melakukan logging bernama console.
		// Loging adalah mekanisme yang biasa dilakukan oleh programmer untuk menampilkan informas. dari aplikasi yang sedang berjalan tanpa harus menunggu alur kerja aplikasi dan juga interaksi user.
		// Untuk melakukan ini, kita bisa menggunakan fitur Console di JavaScript
		// Untuk menggunakan console, kita cukup gunakan perintah console di jode JavaScriot

		// Console Method
		// console.info() => Memberitahu informasi
		// console.warn() => Membertahu informasi peringatan
		// console.error() => Memberitahu informasi error
		// console.table() => Memberitahu informasi dalam bentuk table

		console.debug("Hello-Debug"); // Untuk melihat debug. ubah level di inspect elements>Default level ganti ke Verbose
		console.info("Hello-Info");
		console.log("Hello-log"); // Sama seperti syntax info
		console.warn("Hello-Warn");
		console.error("Hellow-Error");
	</script><br><br>

	<strong>String Template</strong><br>
	<script>
		console.info("String Template");
		// Untuk menambahkan string dengan kata lain, bisa menggunakan operator + (plus).
		// Namu pada kasus tertentu, penggunaan operator + sangat menyulitkan, apalagi jika dalam jumlah banyak.
		// JS memiliki fitur yang beranam String Template, dimana kita bisa mensubtitusi data dari luar String ke dalam String, seperti mengambil data variable atau bahkan melakukan operasi matematika.
		// Untuk menggunakna String template, cara pembuatan String harus mengguanakan '(Backtick)', bukan '(Petik Satu)' atau "(Petik dua)".

		const nameStringTemplate = "Amria Rendy Desbintra";
		const firstNameStringTemplate = "Amria";
		const middleNameStringTemplate = "Rendy";
		const lastNameStringTemplate = "Desbintra"
		const value = 80;
		const template = `Name : ${nameStringTemplate} ${firstNameStringTemplate} ${middleNameStringTemplate} ${lastNameStringTemplate}`;
		const expression = `Name : ${nameStringTemplate}, lulus : ${value > 75}`;
		// const lama = "Name : " + firstNameStringTemplate + " " + middleNameStringTemplate + " " + lastNameStringTemplate'';

		console.info(template);
		console.info(expression);

		const multiline = `Nama Saya Amria,
		 Sekarang kerja, 
		 sering juga membuat project luar`;
		 document.writeln("pada backtick ini support dengan multiline");
		 // pada backtick ini support pada multiline
		document.writeln("<pre>");
		document.writeln(multiline);
		document.writeln("<pre>");
	</script><br><br>

	<strong>Konversi String dan Number</strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Konversi String dan Number");
		// Saat membuat aplikasi, kadang kita input dari pengguna selalu dalam bentuk String.
		// Sedangkan kita ingin mengelola datanya dalam bentuk number.
		// Maka sangat disarankan untuk melakukan konversi tipe data.

		// parseInt(string) => Mengkonversi dari string ke number (Bilangan bulat).
		// parseFloat(string) => Mengkonversi dari string ke number (Bilangan pecahan).
		// Number(string) => Mengkonversi dari string ke number (Bilangan bulat atau pecahan).
		// number.toString() => Mengkonversi dari number ke string.

		// Contoh 1
		const valueKonversi1 = parseInt("1");
		const valueKonversi2 = 1;
		const sum = valueKonversi1 + valueKonversi2;

		document.writeln(`<p>${sum}</p>`);

		// Contoh 2
		document.writeln('parseInt');
		document.writeln(`<p>${parseInt("1.1")}</p>`);
		document.writeln('parseFloat');
		document.writeln(`<p>${parseFloat("1.1")}</p>`);
		document.writeln('Number');
		document.writeln(`<p>${Number("1.1")}</p>`);

		// Contoh conver to String
		const a = 1;
		const b = 1;

		const total = a.toString() + b.toString();
		document.writeln('Convert toString');
		document.writeln(`<p>${total}</p>`)
	</script><br><br>

	<strong>NaN</strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("NaN");
		// Bagaimana jika ternyata data string yang kita coba konversi ke number bukanlah data yang valid>.
		// Jika data string yang kita coba lakukan konversi bukan lah data valid, maka hasil dari konversi tersebut adalah NaN (Not a Number).
		// NaN adalah number spesial yang menyebutkan bahwa ini bukanlah number.
		// Jika NaN dioperasikan dengan data number lainya, maka hasilknya akan menjadi NaN lagi.

		document.writeln(`<p>${parseInt("salah")}</p>`); // NaN
		document.writeln(`<p>${parseFloat("1.1text")}</p>`); // 1.1

		// Number() tidak akan mentolerir kesalahan pada data
		document.writeln(`<p>${Number("1.1ups")}</p>`); // NaN
		document.writeln(`<p>${Number("1x")}</p>`); // NaN
		document.writeln(`<p>${Number("bukan number")}</p>`); // NaN

		//Conth Operasi Pada Nan
		document.writeln("Contoh Operasi Pada NaN");
		const valueNaN = Number("salah"); //NaN
		const totalNaN = valueNaN + 100;
		document.writeln(`<p>${totalNaN}</p>`);

		// isNaN() Function
		// Kadang kita ingin mengecek apakah sebuah number itu NaN atau bukan.
		// Untuk melakukan pengecekan tersebut, kita bisa menggunakan function isNaN(Number).
		// Hasilnya adalah berupa data booblean, true jika NaN, false jika bukan.
		document.writeln("Contoh isNaN() Function");
		document.writeln(`<p>${isNaN(NaN)}</p>`);
		document.writeln(`<p>${isNaN(1000)}</p>`);

	</script>

	<strong>Tipe Data Array Dasar</strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Tipe Data Array Dasar");

		// Array adalah tipe data yang berisikan kumpulan data.
		// Array di JavaScript memiliki sifat dinamis, artinya datanya bisa bertambah dengan sendirinya saat kita masukan data ke dalam Array.

		// Kode menambah array

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

	<strong>Tipe Data Objek</strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Tipe Data Objek");
		// Dibahasa pemrograman lain seperti PHP, kita bisa menggunakan index berubah data lain selain numberm misal string.
		// Fitur ini biasanya disebut associative array atau hash
		// Di JavaScript associative array tidak didukung.
		// Jika kita memaksa memasukan data bukan number di index array, maka JavaScript akan merubah tipe data array tersebut menjadi object, dan ini bisa berbahaya, karena beberapa operasi di arrau mungkin bisa berubah hasilnya

		// Tipe data objek adalah tipe data yang mirip dengan tipe data array
		// Yang membedakan adalah index pada tipe data objek bisa menggunakan string
		// Index di objek biasanya disebut attributes atau properties, bukan index.

		const person = {};
		
	</script><br><br>
</body>
</html>