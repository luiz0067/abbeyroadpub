<?php
	include('./adm/conecta.php');
	error_reporting(0);
	ini_set(“display_errors”, 0 );
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
<div id="tudo1">
  <div id="content">
    <div class="espaco_nav"><a href="index.php" class="btvoltar">Voltar para a Home</a></div>
    <div id="content_left">
      <div id="logotipo"><a href="index.php" target="_self"><img src="imagens/abbey-logo.png" width="222" height="175" border="0" /></a></div>
    </div>
    <div id="content_right">
      <div class="titulo_pagina">O Bar</div>
      <div id="fotos_o_bar">
        <div class="linhafotos_o_bar">
			<?php
			if ($result!=null){
				mysql_free_result($result);
			}
			$sql    = 'SELECT id,imagem,titulo FROM bar order by id desc limit 0,3;';
			$result = mysql_query($sql, $link);
			if (!$result) {
				echo "Erro do banco de dados, n䯠foi possivel consultar o banco de dados\n";
				echo 'Erro MySQL: ' . mysql_error();
				exit;
			}
			while ($row = mysql_fetch_assoc($result)){
			?>
				<div class="foto_miniatura">
					<a href="../uploads/bar/h_<?php echo $row['imagem'];?>" rel="lightbox[roadtrip]">
						<img src="../uploads/bar/g_<?php echo $row['imagem'];?>" width="138" height="92"  />
					</a>
				</div>
			<?php
				}
				mysql_free_result($result);
			?>
        </div>
		
      </div>
	  <a href="bar_imagens.php" >
	   <div id="bar_veja_mais">
			Veja mais
		</div>
		</a>
      <div id="containertexto">
        <hgroup>
          <h2>Quem Somos:</h2><br>
          <h3>Atuando no ramo de entretenimento a mais de 20 anos e com uma<br />
            extensa bagagem na realização e organização shows e eventos,com <br />
            destaque para o Empório Santa Maria, reconhecidamente como uma das<br />
            melhores casas de espetáculos do Brasil, apresentamos em grande estilo<br />
            um Pub típico europeu que faz parte de nosso complexo de ambientes.</h3>
          <h3>Com uma proposta temática que lembra  os melhores pub’s da Europa, o Abbey Road
            Pub que leva o nome do primeiro estúdio onde os Beatles gravaram em Londres, tem como objetivo principal
            oferecer aos amantes do rock’ roll shows alternativos de bandas cover e originais do rock nacional e internacional.</h3>
          <h2>Ambiente:</h2>
          <br />
          <h3>O Abbey Road Pub oferece uma área lounge, transmissão dos principais jogos esportivos e shows, 
          serviço de cozinha com pratos típicos e o ambiente principal encontra-se o palco, bistrôs camarotes e o bar. 
          </h3>
          </hgroup>
      </div>
    </div>
  </div>
  <?php include("footer.php"); ?>
</div>
</body>
</html>