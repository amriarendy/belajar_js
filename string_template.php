<!DOCTYPE html>
<html>
<head>
	<title>String Template</title>
</head>
<body>
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
</body>
</html>