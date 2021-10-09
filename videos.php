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
	

	
?>	
<body>
<div id="tudo5">
  <div id="content">
    <div class="espaco_nav"><a href="index.php" class="btvoltar">Voltar para a Home</a></div>
    <div id="content_left">
      <div id="logotipo"><a href="index.php" target="_self"><img src="imagens/abbey-logo.png" width="222" height="175" border="0" /></a></div>
    </div>
    <div id="content_right">
      <div class="titulo_pagina">Vídeos</div>
      <div id="galeria-fotos">
      <div id="tenso">Galeria de Vídeos</div>
      <!-- inicio dos itens da pagina de fotos -->
 
		<?php
			$pg = $_GET['pg'];
			if (!isset($pg))
			{
			$pg = 1;
			}
			$sql = "SELECT id,video,data_evento,titulo,conteudo FROM video"; //altere (designgrafico) para o nome de sua tabela.
			$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta!!!");
			$lpp = 5; // defina o número de resultados por página.
			$total = mysql_num_rows($resultado);
			if ($total <= $lpp)
			{    
			$total_paginas = 1;
			} else {
			$total_paginas = ceil($total/$lpp);
			}
			$inicio = ($pg - 1) * $lpp;
			$final = $inicio + $lpp - 1;
			$ponteiro = 0;
			$i = "1";
			$colunas="5"; // defina o número de colunas desejado.
			$total="1";
			$sql    = "SELECT id,video,data_evento,titulo,conteudo FROM video LIMIT $inicio, $lpp;";
			$result = mysql_query($sql, $link);
			while ($row = mysql_fetch_assoc($result)){	
		?>
      	<div class="linhas-galeria-fotos">
        	<div class="data-evento-fotos"><?php echo $row['data_evento'];?> |</div>
            <div class="descricao-evento-foto">
				<a href="videosfinal.php?id=<?php echo $row['id'];?>">
					<h3 class="linkcomum">
						<?php echo $row['titulo'];?>
					</h3>
				</a>
			</div>
        </div>
        <div class="divisor-fotos">............................................................................................................</div>
			<?php
				}

			?>
			<div id="pagination-fotos">
			<?php
				if(!$total==$colunas){
					print"<table>";
					} else {
					print"</table>";
					}
					if ($pg == 1) {    
					echo "<a class='seletores-pagina'>";    
					echo "Anterior |";    
					echo "</a>";
					}
					else
					{    
					echo "<a class='seletores-pagina'>";    
					echo "<a class='seletores-pagina' href=\"videos.php?pg=".($pg - 1)."\" targe=\"_self\">Anterior</a> |"; // troque (pagina) pela link de sua página.    
					echo "</a>";
					}
					$i = 1;
					while ($i <= $total_paginas) {    
					if ($i == $pg)
					{        
					echo "<strong class='seletores-pagina'><a class='seletores-pagina'>";        
					echo " <b>|<u>$i</u>|</b> ";        
					echo "</a></strong>";    
					}
					else
					{
					echo "<strong class='seletores-pagina'><a class='seletores-pagina'>";        
					echo " <a class='seletores-pagina' href=\"videos.php?pg=".$i."\" target=\"_self\">".$i."</a> "; // troque (pagina) pela link de sua página.        
					echo "</a></strong>";    
					}
					$i = $i + 1;
					}
					if ($pg == $total_paginas)
					{    
					echo "<a class='seletores-pagina'>";   
					echo "| Próxima\n";    
					echo "</a>";
					}
					else
					{    
					echo "<a class='seletores-pagina'>";    
					echo "| <a class='seletores-pagina' href=\"videos.php?pg=".($pg + 1)."\" targe=\"_self\">Próxima</a>\n"; // troque (pagina) pela link de sua página.    
					echo "</a>"; }   
			?>
		  </div>
      </div>
    </div>
  </div>
  <?php include("footer.php"); ?>
</div>
</body>
</html>
