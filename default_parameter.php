<!DOCTYPE html>
<html>
<head>
	<title>Default Parameter</title>
</head>
<body>
	<strong><strong><br>
	<script>
		document.writeln("Untuk operasi console bisa dilihat di inspect > console");
		console.info("Default Parameter");

		// sekarang kita tahu bahwa parameter itu optional, artinya kita bisa tidak memberi value terhadap parameter.
		// parameter juga bisa kita beri default value, artinya jika ketika kita tidak mengirim data ke parameter atau kita mengirim data undefined, maka secara otomatis parameter akan diisi oleh default value.

		function register(name, gender = "UKNOWN")
		{
			console.log(name);
			console.log(gender);
		}
		register();
		register("Amria", "Male");
		register("Budi");
		register("Portnoy", null);
		register("Portnoy", undefined);

	</script><br><br>
</body>
</html>