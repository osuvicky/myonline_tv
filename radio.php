<?php
require_once("connect/conexion.php");
if(isset($_POST["id"])){
	$id=$_POST["id"];
}else{
	$id=1;
}
			$sql="SELECT * FROM radio WHERE id=".$id;
			$res=$conexion->query($sql);
			$fila=$res->fetch_assoc();
?>
<script src="js/radio.js"></script>
<center><img src="img/image.png" width="20%" /></div></center>
<?php if (isset($_POST["id"])){ ?>
<script>
$("#apagedo").show();
$("#reproducir").hide();
</script>
<div id="radio"><audio id="rad" autoplay><source src="http://s43.myradiostream.com:19154/;" type="audio/mpeg"></source></div>
<?php }else{ ?>
<script>
$("#apagedo").hide();
$("#reproducir").show();
</script>
<div id="radio"><audio id="rad"><source src="http://s43.myradiostream.com:19154/;" type="audio/mpeg"></source></div>
<?php } ?>
<div class="controlRadio">
	<center><a href="#" target="_blank"><img title="#" src="#"></a></center><br />
	<img class="choosen" src="img/<?php echo $fila["img"] ?>" />
	<img id="volumeMenu" src="img/down.png">
	<img id="reproducir" class="imgRadio" src="img/RadioOn.png">
	<img id="apagado" class="imgRadio" src="img/RadioOff.png">
	<img id="volumeMax" src="img/up.png">
	<div class="name">Radio App <?php echo $fila["name"] ?></div>
</div>
<div id="vide0"><video id="vid"><source src="http://livestre.am/5uXGA" type="audio/mpeg"></source></div>
<div class="controlVideos">
	<center><a href="#" target="_blank"><img title="#" src="#"></a></center><br />
	<img class="choosen" src="img/<?php echo $fila["img"] ?>" />
	<img id="volumeMenu" src="img/down.png">
	<img id="reproducir" class="imgRadio" src="img/RadioOn.png">
	<img id="apagado" class="imgRadio" src="img/RadioOff.png">
	<img id="volumeMax" src="img/up.png">
	<div class="name">Radio App <?php echo $fila["name"] ?></div>
</div>
 <video width="320" height="240" controls>
  <source src="http://livestre.am/5uXGA" type="video/mp4">
  <source src="http://livestre.am/5uXGAg" type="video/ogg">
  Your browser does not support the video tag.
</video> 