<!DOCTYPE html>
<html>
<head>
	<title>Popup Confirm</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect>console");
		console.info("Alert, Prompt dan Confirm");
		// JavaScript memiliki fitu yang bernama alert, prompt dan confirm.
		// Alert digunakan untuk memberi peringatan berupa popup text di browser.
		// Prompt digunakan untuk meminta input string dari pengguna browser dalam benntu popup input text
		// Sedangankan confirm digunakan input boolean dari pengguna browser dalam bentuk popup input pilihan.

		//popup alert
		const masuk = confirm("Anda yakin mau masuk?");
		if (masuk) {
			const name = prompt("siapa nama anda");
			alert(`Hello ${name}`);
		} else {
			alert("selamat belajar");
		}
		
	</script><br><br>
</body>
</html>