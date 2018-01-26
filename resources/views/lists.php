<!DOCTYPE html>
<html>
<head>
	<title>Listado</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Listado de productos</h1>

				<?php foreach ($products as $product) {
					echo "<strong>{$product->name}</strong> - {$product->description} <br>";
				} ?>
				
				<hr>
				<p>
					<a href="pdf.php">Exportar en PDF</a>
				</p>
			</div>
		</div>
	</div>
	
</body>
</html>