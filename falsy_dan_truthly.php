<!DOCTYPE html>
<html>
<head>
	<title>Falsy dan Truthly</title>
</head>
<body>
	<strong><strong><br>
	<script>

		// Falsy
		// falsy atau kadang dtulis falsey, adalah value yang ketika dalam konteks boolean, dia dianggap false.
		// ini adalah salah satu unik dari JavaScript, yang berguna, namun kadang juga sering membingungkan.
		// jadi di javascript, kondisi itu tudak hanya bisa boolean, tapi dilar boolean pun bisa, namun kita harus tahu beberpa data falsy, atau dianggap falash'

		// false => boolean false
		// 0, -0 => number 0 dan -0 dianggao false
		// "",",`` => semua string kosong dianggap false
		// null  => null dianggap false
		// undefined => undefined dianggap false
		// NaN => Not a Number dianggap false

		// Truthy
		// truthy adalah kebalikan dari falsy, dimana datanya dianggap bernilai treu
		// sederhana sekali sebenarnya unutk mengetahui sebuah data itu adalah truthy, yaitu data yang bukan bernilai falsy.

		let data = "";
		// let data;
		// let data = [];
		// let data = null;

		if (data) {
			document.writeln("TRUE");
		} else {
			document.writeln("FALSE");
		}

	</script><br><br>
</body>
</html>