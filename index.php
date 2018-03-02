<?php require_once("connect/conexion.php") ?>
<!doctype html>
<html>
<head>
	<meta charset="utf8">
	<title>Radio Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#sintonizar").load("radio.php");
			$("img#selectRadio").click(function(){
				var id=$(this).attr("data-id");
				$("#sintonizar").load("radio.php",{id:id});

			});
		});
	</script>
</head>
<body>
	<div class="principalRadio">
		<div id="sintonizar"></div>
		<div id="carrusel">
			<?php
			$sql="SELECT * FROM radio";
			$res=$conexion->query($sql);
			while($file=$res->fetch_assoc()){
			?>

			<img id="selectRadio" data-id="<?php echo $file["id"] ?>" title="<?php echo $file["name"] ?>" src="img/<?php echo $file["img"] ?>" />

			<?php }$conexion->close(); ?>

		</div>
	</div>
</body>
</html>