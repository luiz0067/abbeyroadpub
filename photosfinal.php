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
<?php
	

		
	$row=null;
	$result=null;
	$result=mysql_query($sql, $link);
	if (($_GET["id_categoria_fotos"]!=null)){
		$sql	= "SELECT id,id_categoria_fotos,imagem,obs FROM fotos where (id_categoria_fotos=0".$_GET["id_categoria_fotos"].")";
		$result=mysql_query($sql, $link);
		if ($result!=null)
		$imagem_antiga=$row["imagem"];
	}
		$categoria_fotos=0;
		if (isset($_GET["categoria_fotos"])){
		$categoria_fotos=$_GET["categoria_fotos"];	
	}
		else if (isset($_POST["categoria_fotos"])){
		$categoria_fotos=$_POST["categoria_fotos"];
	}	 
		
?>			

<body>
<div id="tudo4">
	<div id="content">
    <div class="espaco_nav"><a href="index.php" class="btvoltar">Voltar para a Home</a></div>
		<div id="content_left">
		  <div id="logotipo"><a href="index.php" target="_self"><img src="imagens/abbey-logo.png" width="222" height="175" border="0" /></a></div>
		</div>
    <div id="content_right">
	<div class="titulo_pagina">
		<div id="titulo">Galeria de fotos</div>
		<div id="voltar-anterior"><a href="photos.php" class="linkcomum" target="_self">Voltar</a></div>
	</div>
	<div id="galeria-fotos">
      <!-- inicio dos itens da pagina de fotos -->
				<?php	
						$sql = "select fotos.id,fotos.id_categoria_fotos,fotos.imagem,fotos.obs,categoria_fotos.data_evento,categoria_fotos.titulo,categoria_fotos.conteudo from fotos left join categoria_fotos on(fotos.id_categoria_fotos=categoria_fotos.id)where (categoria_fotos.id=0".$_GET["id_categoria_fotos"].")order by categoria_fotos.titulo asc  limit 0,1;";
						$result = mysql_query($sql,$link);
						if (($result!=null)&&(true)){
							while ($row = mysql_fetch_assoc($result)){
								$fotos_id=$row ['id'];
								$fotos_id_categoria=$row ['id_categoria_fotos'];
								$fotos_titulo=$row ['titulo'];
								$fotos_imagem=$row ['imagem'];
								$fotos_conteudo=$row ['conteudo'];
								$fotos_data_evento=$row ['data_evento'];
					?>	
	<div id="cabecalho-fotos">
		<div id="data-cabecalho-fotos">
			<h2>
				<?php echo $fotos_data_evento;?> |
			</h2>
		</div>
		<div id="titulo-cabecalho-fotos">
			<h2>
				<?php echo $fotos_titulo;?>
			</h2>
		</div>
	</div>
        <div id="descricao-galeria-fotos">
			<h3>
				<?php echo $fotos_conteudo;?>
			</h3>
		</div>
		<?php 
				}
			}
		?>
		<div class="divisor-fotos" style="margin-bottom:8px;">............................................................................................................</div>
		<div id="container-fotofinal">
		<?php	
			$pg = $_GET['pg'];
			if (!isset($pg))
			{
			$pg = 1;
			}
			$sql = "SELECT fotos.id,fotos.id_categoria_fotos,fotos.imagem,fotos.obs,categoria_fotos.data_evento,categoria_fotos.titulo,categoria_fotos.conteudo from fotos left join categoria_fotos on(fotos.id_categoria_fotos=categoria_fotos.id)where (categoria_fotos.id=0".$_GET["id_categoria_fotos"].")"; //altere (designgrafico) para o nome de sua tabela.
			$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta!!!");
			$lpp = 25; // defina o número de resultados por página.
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
			$sql = "select fotos.id,fotos.id_categoria_fotos,fotos.imagem,fotos.obs,categoria_fotos.data_evento,categoria_fotos.titulo,categoria_fotos.conteudo from fotos left join categoria_fotos on(fotos.id_categoria_fotos=categoria_fotos.id)where (categoria_fotos.id=0".$_GET["id_categoria_fotos"].") LIMIT $inicio, $lpp;";
			$result = mysql_query($sql, $link);			
			while ($row = mysql_fetch_assoc($result)){
					$fotos_id=$row ['id'];
					$fotos_id_categoria=$row ['id_categoria_fotos'];
					$fotos_titulo=$row ['titulo'];
					$fotos_imagem=$row ['imagem'];
					$fotos_conteudo=$row ['conteudo'];
					$fotos_data_evento=$row ['data_evento'];
		?>
        	<div class="foto_final">
				<a href="./uploads/fotos/h_<?php echo $fotos_imagem;?>" rel="lightbox[roadtrip]">
					<img src="./uploads/fotos/g_<?php echo $fotos_imagem;?>" width="79" height="52"  />
				</a>
			</div> 
		   <?php 
						}
		?>
		<div class="divisor-fotos">............................................................................................................</div>				
			
        </div>
		
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
					echo "<a class='seletores-pagina' href=\"photosfinal.php?id_categoria_fotos=$fotos_id_categoria&pg=".($pg - 1)."\" targe=\"_self\">Anterior</a> |"; // troque (pagina) pela link de sua página.    
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
					echo " <a class='seletores-pagina' href=\"photosfinal.php?id_categoria_fotos=$fotos_id_categoria&pg=".$i."\" target=\"_self\">".$i."</a> "; // troque (pagina) pela link de sua página.        
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
					echo "| <a class='seletores-pagina' href=\"photosfinal.php?id_categoria_fotos=$fotos_id_categoria&pg=".($pg + 1)."\" targe=\"_self\">Próxima</a>\n"; // troque (pagina) pela link de sua página.    
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
