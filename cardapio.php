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
<body>
<div id="tudo3">
  <div id="content">
    <div class="espaco_nav"><a href="index.php" class="btvoltar">Voltar para a Home</a></div>
    <div id="content_left">
      <div id="logotipo"><a href="index.php" target="_self"><img src="imagens/abbey-logo.png" width="222" height="175" border="0" /></a></div>
    </div>
    <div id="content_right_cardapio">
      <div class="titulo_pagina">Cardápio</div>
      <div id="containertexto">
        <hgroup>
          <h2>Bebidas:</h2>
          <h3>Uma grande variedade de cervejas nacionais e importadas, chopp
            Heineken, vinhos e whiskey.<br>
            </h3>
        </hgroup>
      </div>
      <div id="cerveja"><a href="imagens/cardapio.jpg" rel="lightbox"><img src="imagens/bebidas.png" width="300" height="100" /></a></div>
      <div id="containertexto">
        <hgroup>
          <h2>Cozinha:</h2>
		  <br>
		  <br>
		  <br>
		  <br>
          <h3>Especializada em pratos típicos europeus.</h3>
		  
        </hgroup>
      </div>
      <!-- inicio da parte onde aparece o cardapio de produtos do pub -->
      <div class="divisor-linhacardapio">.............................................................................................</div>
		<?php
		
			$sql    = "SELECT id,imagem,titulo,conteudo FROM cardapio;";
			$result = mysql_query($sql, $link);
			while ($row = mysql_fetch_assoc($result)){	
	
		?>
	  <div class="linha-cardapio">
        <div class="texto-cardapio">
          <h3><?php echo $row['titulo'];?><br>
            <?php echo $row['conteudo'];?> </h3>
        </div>
        <div class="foto-cardapio">
			<a href="./uploads/cardapio/h_<?php echo $row['imagem'];?>" rel="lightbox">
				<img src="./uploads/cardapio/g_<?php echo $row['imagem'];?>" width="79" height="52"  />
			</a>
		</div>
      </div>
      <div class="divisor-linhacardapio">.............................................................................................</div>
      <?php
			}

		?>
	  <div id="pagination-fotos">
			
		  </div>
	  
   </div>
  </div>
  <?php include("footer.php"); ?>
</div>
</body>
</html>
