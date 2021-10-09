<?php
include('./adm/conecta.php');
	
error_reporting(0);
ini_set(“display_errors”, 0 );

	
	$agenda_id="";
	$agenda_conteudo="";
	$agenda_imagem="";
	$agenda_data_evento="";

	$id="";
	if(isset($_GET["id"])){
		$id=$_GET["id"];
	}
	else if(isset($_POST["id"])){
		$id=$_POST["id"];
	}
	
	$sql="";//consulta select
	$linha=null;//registro da consulta
	$row="";//mesma coisa depende do meu estado de humor
	$result=null;//todos os resultados
		if($id!=""){//verrifica se o parametro esta vazio se nao preenche com ""
			$sql = "select id,imagem,video,facebook,curtir,data_evento,titulo,conteudo FROM agenda where(id=".$id.");";
			$result=mysql_query($sql, $link);//realiza a consulta
			$row = mysql_fetch_assoc($result);//resgata a linha da consulta
			$agenda_id_categoria=$row['id'];
			$agenda_video=$row['video'];
			$agenda_titulo=$row['titulo'];
			$agenda_imagem=$row['imagem'];
			$agenda_data_evento=$row['data_evento'];
			$agenda_conteudo=$row['conteudo'];
			$agenda_data_cadastro=$row['data_cadastro'];
		}
		else{//verrifica se o parametro esta vazio se nao preenche com ""
			$sql = "select id,imagem,video,facebook,curtir,data_evento,titulo,conteudo FROM agenda ;";
			$result = mysql_query($sql, $link);
			$row = mysql_fetch_assoc($result);
			$agenda_id_categoria=$row['id'];
			$agenda_titulo=$row['titulo'];
			$agenda_video=$row['video'];
			$agenda_imagem=$row['imagem'];
			$agenda_data_evento=$row['data_evento'];
			$agenda_conteudo=$row['conteudo'];
			$agenda_data_cadastro=$row['data_cadastro'];
		}

		
?>
<?php
/*	Este arquivo pertense ao artigo escrito no site Pluriweb
	Para maiores informações acesse:
	http://www.pluriweb.com.br/artigos/24-paginas-de-erros-personalizadas-com-php
*/
	
$site		= $_SERVER['HTTP_HOST'];
$erro 		= (int)$_SERVER['QUERY_STRING'];
$url 		= $_SERVER['HTTP_REFERER'];
$uri 		= $_SERVER['REQUEST_URI'];
$data 		= date("d/m/Y H:i:s");
$ip 		= $_SERVER["REMOTE_ADDR"];
$email		= "null@null.com.br";
$pagina 	= "http://".$site."/erro/".$erro.".shtml";
$assunto	= "Erro ".$erro." - ".$site;
$msgErro	= "[".$data."] IP: ".$ip." - ERRO ".$erro." - LINK: ".$uri." - REFERÊNCIA: ".$url;

if(isset($erro)){
	if(file_exists($erro.".shtml")){
		mail($email,$assunto,$msgErro); 	// envia um e-mail
	
		$fp = fopen("erro.txt", "a"); 		// grava em arquivo de log
			  fputs ($fp, "$msgErro\r\n");
			  fclose($fp);
		
		header ("Location: $pagina"); 		// redireciona o visitate
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Abbey Road</title>
<link rel="stylesheet" type="text/css" href="./css/estilo-agenda.css" />
<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
 <link rel="shortcut icon" href="./imagens/imagens_contato/mini_logo.png" type="image/x-icon" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery/jquery.js"></script>           
<script type="text/javascript" src="jquery/jquery-ui.js"></script>        
<script type="text/javascript" src="jquery/jquery-mousewheel.js"></script>
<script type="text/javascript" src="jquery/jScrollbar.jquery.min.js"></script>
	<link rel="stylesheet" href="jquery/jScrollbar.jquery.css" type="text/css" />
<script type="text/javascript">                                           
	$(document).ready(function(){
		$('.jScrollbar1, .jScrollbar2, .jScrollbar3, .jScrollbar4, .jScrollbar5').jScrollbar();
	});                                        
</script>  
<style type="text/css">
		body {
			margin:0px;
		}
		
		.jScrollbar1, 
		.jScrollbar2,
		.jScrollbar3,
		.jScrollbar4,
		.jScrollbar5
		{margin:10px}
	</style>  
</head>

<body>
<div id="tudo">
  <div id="conteudo">
    <div id="lampadas">
      <div id="lampadaleft">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="153" height="395" id="FlashID" title="lampadaleft">
          <param name="movie" value="./flash/lampada.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="transparent" />
          <param name="swfversion" value="7.0.70.0" />
          <!-- Esta tag param solicita que os usuários com o Flash Player 6.0 r65 e versões posteriores baixem a versão mais recente do Flash Player. Exclua-o se você não deseja que os usuários vejam o prompt. -->
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <!-- A tag object a seguir aplica-se a navegadores que não sejam o IE. Portanto, oculte-a do IE usando o IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="./flash/lampada.swf" width="153" height="395">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="wmode" value="transparent" />
            <param name="swfversion" value="7.0.70.0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- O navegador exibe o seguinte conteúdo alternativo para usuários que tenham o Flash Player 6.0 e versões anteriores. -->
            <div>
              <h4>O conteúdo desta página requer uma versão mais recente do Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obter Adobe Flash player" width="112" height="33" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object>
      </div>
      <div id="topoespaco">
        <div class="espaco" style="width:777px; height:187px; float:left;"></div>
		<a href="index.php" class="btvoltar">
        <div id="imgtopo" name="Voltar para a Home" title="Voltar para a Home" value="Voltar para a Home"><img src="./imagens/imagens_contato/topo.png" width="777" height="208" /></div></a>
      </div>
      <div id="lampadaright"><img src="./imagens/imagens_contato/lampada2.png" width="153" height="395" /></div>
    </div>
    <div id="papel">

      <div class="tituloagenda">Agenda de Eventos</div>
      <div id="banner">
		<A NAME="banner"></A> 
		<?php
				$result = mysql_query($sql, $link);
				if ($result!=null)
				while ($row = mysql_fetch_assoc($result)){
				if($_GET['video']==""){
		?>	  
			<div id="imgbanner">
				<a href="<?php echo $row['facebook'];?>" target="_blank">
					<img src="./uploads/agenda/h_<?php echo $agenda_imagem;?>" width="681" height="367" />
				</a>
			</div>
			<?php 
				}
				else {
			?>
			<div id="imgbanner">
				<object width="681" height="367">
				<param name="movie" value="<?php echo $_GET['video'];?>">
				<param name="allowFullScreen" value="true">
				<param name="allowscriptaccess" value="always">
				<embed src="http://www.youtube.com/v/<?php echo $_GET['video'];?>" type="application/x-shockwave-flash" width="681" height="367" allowscriptaccess="always" allowfullscreen="true">
				</object>
			</div>
			<?php 
				}
			?>
			<?php
				} 
					 if ($result!=null){
						mysql_free_result($result);
				}
			?>
      </div>
	  <div id="conteudo_baixo_img">
			<div id="img_menu">
				<div class="conteudo_video">
					<?php				
						if($_GET['imagem']==""){
					?>	  
					<a href="?id=<?php echo $agenda_id_categoria;?>&imagem=<?php echo $agenda_imagem;?>#banner">
						<div class="menu_video">
							Cartaz
						</div>
					</a>
					<?php
						}
					?>
					<?php				
						if($_GET['imagem']!="")
						{
					?>	  
					<a href="?id=<?php echo $agenda_id_categoria;?>&imagem=<?php echo $agenda_imagem;?>#banner">
						<div class="menu_video1">
							Cartaz
						</div>
					</a>
					<?php				
						}
					?>
					<?php				
						if($_GET['video']==""){
					?>	 					
					<a href="?id=<?php echo $agenda_id_categoria;?>&video=<?php echo $agenda_video;?>#banner">
						<div class="menu_video">
							Vídeos
						</div>
					</a>
					<?php				
						}
					?>
					<?php				
						if($_GET['video']!=""){
					?>	 					
					<a href="?id=<?php echo $agenda_id_categoria;?>&video=<?php echo $agenda_video;?>#banner">
						<div class="menu_video1">
							Vídeos
						</div>
					</a>
					<?php				
						}
					?>
				</div>
			</div>
			<div id="texto_antes_redes">
				Curta nosso PUB:
				
			</div>
			<div id="redes_sociais">
				<div id="fb-root"></div>
				<script>
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
					<div class="fb-like" data-href="http://www.facebook.com/pages/Abbey-Road-Pub-and-Lounge/314219345352432?fref=ts" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
			</div>	
		</div>
	  <div class="clear" style="height:21px;"></div>
		<article id="esquerda">
		<div class="infoagenda">
		<?php
				$result = mysql_query($sql, $link);
				if ($result!=null)
				while ($row = mysql_fetch_assoc($result)){
			?>
			<div class="nomeevento">
				<div class="tpevento"></div>
				<div class="escritaevento">
					<?php echo $agenda_titulo;?>
				</div>
			</div>
			<div class="dataevento">
				<?php echo $agenda_data_evento;?>
			</div>
			
				<!-- EXEMPLE 4 -->	
			<div class="clear" style="height:24px;"></div>
			<div class="jScrollbar4">
				<div class="jScrollbar_mask" style="float: left;">
					<?php echo $agenda_conteudo?>
				</div>
				<div class="jScrollbar_draggable" style="margin-left: 15px;">
					<a href="#" class="draggable ui-draggable"></a>
				</div>
				<div class="clr"></div>
			</div>					
				<?php
			}
			if ($result!=null){
				mysql_free_result($result);
			}
			?>
		</div>

		</article>
      <div class="coluna_divisora"></div>
      <article id="direita">
      	<div id="listagenda">
			<div class="jScrollbar5">
				<div class="jScrollbar_mask" style="float: left;">
					<?php
						if ($result!=null){
							mysql_free_result($result);
						}
						$sql    = 'SELECT id,imagem,video,facebook,curtir,data_evento,titulo,conteudo FROM agenda;';
						$result = mysql_query($sql, $link);
						if (!$result) {
							echo "Erro do banco de dados, não foi possivel consultar o banco de dados\n";
							echo 'Erro MySQL: ' . mysql_error();
							exit;
						}
						while ($row = mysql_fetch_assoc($result)){
					?>
					<div id="conteudo_evento">
						<div class="listadata"><?php echo $row['data_evento'];?></div>
						<div class="listanome" style="text">
							<a class="listanome" href="?id=<?php echo $row['id'];?>&imagem=<?php echo $agenda_imagem;?>#banner">
								<?php echo $row['titulo'];?> 
							</a>
						</div>
					</div>
					<?php
						}
						mysql_free_result($result);
					?>
				</div>
					<div class="jScrollbar_draggable" style="margin-left: 15px;">
						<a href="#" class="draggable ui-draggable"></a>
					</div>
				<div class="clr"></div>
			</div>	
       </div>
      </article>
	  <div class="baixo">
			<img src="./imagens/imagens_contato/rodape.png" width="673" height="156" border="0" />
	  </div>
    </div>
  </div>
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
