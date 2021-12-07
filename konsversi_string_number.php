<!DOCTYPE html>
<html>
<head>
	<title>Konversi string dan number</title>
</head>
<body>
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
</body>
</html>