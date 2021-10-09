
<?php
	include('./adm/conecta.php');
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Abbey Road Pub and Lounge</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />



</head>
<?php

	$row=null;
	$result=null;
	$result=mysql_query($sql, $link);
	if (($_GET["id"]!=null)){
		$sql	= "SELECT id,video,data_evento,titulo,conteudo FROM video where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
		if ($result!=null)
	
		$video=0;
		if (isset($_GET["video"])){
		$video=$_GET["video"];	
	}
		else if (isset($_POST["video"])){
		$video=$_POST["video"];
	}	 
}
?>
<body>
<div id="tudo5">
  <div id="content">
    <div class="espaco_nav"><a href="index.php" class="btvoltar">Voltar para a Home</a></div>
    <div id="content_left">
      <div id="logotipo"><a href="index.php" target="_self"><img src="imagens/abbey-logo.png" width="222" height="175" border="0" /></a></div>
    </div>
    <div id="content_right">
      <div class="titulo_pagina">
      <div id="titulo">Vídeos</div>
      <div id="voltar-anterior"><a href="videos.php" class="linkcomum" target="_self">Voltar</a></div>
      </div>
	  
	  
	<?php
				$result = mysql_query($sql, $link);
				if ($result!=null)
				while ($row = mysql_fetch_assoc($result)){
			?>
      <div id="galeria-fotos">
      <!-- inicio dos itens da pagina de fotos -->
      	<div id="cabecalho-fotos">
        	<div id="data-cabecalho-fotos"><h2><?php echo $row['data_evento'];?> |</h2></div>
            <div id="titulo-cabecalho-fotos"><h2><?php echo $row['titulo'];?></h2>
		</div>
        </div>
        <div id="descricao-galeria-fotos">
		<span style="color:#FFFFFF;"> 
			<?php echo $row['conteudo'];?>
		</span>
		</div>
        <div class="divisor-fotos">............................................................................................................</div>
			<object width="460" height="345">
						<param name="movie" value="<?php echo $row['video'];?>">
						<param name="allowFullScreen" value="true">
						<param name="allowscriptaccess" value="always">
						<embed src="http://www.youtube.com/v/<?php echo $row['video'];?>" type="application/x-shockwave-flash" width="460" height="345" allowscriptaccess="always" allowfullscreen="true">
						</object>
		<div class="divisor-fotos">............................................................................................................</div>
      </div>
	  <?php
		}
			if ($result!=null){
				mysql_free_result($result);
			}
			?>
	  
	  
    </div>
  </div>
  <?php include("footer.php"); ?>
</div>
</body>
</html>