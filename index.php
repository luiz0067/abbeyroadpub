<?php
	include('./adm/conecta.php');
	error_reporting(0);
	ini_set(“display_errors”, 0 );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Abbey Road Pub</title>
 <link rel="shortcut icon" href="./imagens/imagens_contato/mini_logo.png" type="image/x-icon" />
<meta name="robots" content="index">
<meta name="robots" content="follow">
<meta name="Content-Language" content="de">
<meta http-equiv="pragma" content="no-cache">
<meta name="keywords" content="Abbey Road Pub, Pub Emporio santa maria, The Abbey Road, Abbey Road Toledo, Pub Toledo, Pub Zorzo, Pub Abbey Road Toledo" />
<meta name="description" content="Pub Inglês com uma nova proposta para a região, com shows das melhores bandas covers.">
	<script type="text/javascript">
		function trocardecor(elemento,cor){
				elemento.style.color=cor;
			}
	</script>
	<style>
	
	font-family: "bootle";
		src: url("./font/bootle.afm"); /* para IE */
		src: url("./font/bootle.dfont");
		src: url("./font/bootle.otf");
		src: url("./font/bootle.pfb");
		src: url("./font/bootle.ttf");
}
h1, h2, h3, h4, h5, h6 {
font-family: bootle;
}
@font-face {
	font-family: bootle;
	src: url(bootle.dfont);
}

@font-face {
	font-family: bootle;
	src: url(bootle.afm);
}

@font-face {
	font-family: bootle ;
	src: url(bootle.afm);
}
@font-face {
	font-family: bootle ;
	src: url(bootle.ttf);
}


	
	</style>
<link rel="shortcut icon" type="image/x-icon" href="">
	<script type="text/javascript" src="./js/jquery-1.6.1.min.js"></script> 
	<script type="text/javascript" src="./js/jquery.cycle.all.2.72.js"></script> 
	<script type="text/javascript" src="./js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="./js/jquery-ui-1.8.6.custom.min.js"></script>
	<script type="text/javascript" src="./js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
	<script type="text/javascript" src="./js/mascara.js"></script>
	<script type="text/javascript" src="./js/widget.js"></script>
	<script type="text/javascript" src="Scripts/swfobject_modified.js" type="text/javascript"></script>
	<script src="./js/jquery-1.7.2.min.js"></script>
<link href="./css/estilos.css" rel="stylesheet" type="text/css" media="screen">
<!-- /remove -->
<script src="./js/form_validation.js" type="text/javascript"></script><!--null-->
<!-- #remove -->
<script src="./js/jquery_004.js" type="text/javascript"></script><!--movimentos--><!--tamanhos-->
<script type="text/javascript">
     jQuery.noConflict();
</script>
<script src="./js/global.js" type="text/javascript"></script>	<!--movimentos--><!--tamanhos-->
<script src="./js/jquery_005.js" type="text/javascript"></script> <!--tamanhos-->
<script src="./js/jquery_003.js" type="text/javascript"></script> <!--movimentos-->
<script src="./js/jquery.js" type="text/javascript"></script>	<!--null-->
<script src="./js/jquery_002.js" type="text/javascript"></script>	<!--null-->
<!--[if IE]>
<link href="css/ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!-- /remove -->
<script type="text/javascript" src="mobileLink.js"></script><!--null-->
<!-- #mobile-hinting
//replace: styles.css=>mobile-styles.css, kontaktstyle.css=>mobile-form-styles.css
//remove: .remove, #navigation, #footernavi, .close, #preise, #facebook, #guestbook2, #zaubershowText, #aktionen, #ostalgieText, #ostalgieSlogan, #guestbook
-->
<script src="counter.js" type="text/javascript" language="javascript"></script>
</head>
	<body>
		<div id="wrapper">
			<h1 style="position: fixed; left: 56.2%; z-index:102;  " id="branding">	</h1>
			<!-- MOBILE NAVIGATION -->
			<!-- END OF MOBILE NAVIGATION -->
			<div style="width: 100px;" class="section" id="leftsection"></div>
			<!--      --------------------------------------------------------------------------      INICIO DAS ANCORAS DAS PAGINAS          --------------------------------------------------------------------------        -->
			<!--      ----------------------------------     ANCORA HOME        ----------------------------------         -->
			<div class="section" id="home">
				<span id="museumAnchor" class="anchor">
					<a name="eventos"></a>
					<a href="photos.php">
						<div id="eventos" class="ver">
								Veja os 
								Enventos
								Anteriores
						</div>
					</a>
						<?php
							$sql    = 'SELECT id,imagem,video,facebook,curtir,data_evento,titulo,conteudo FROM agenda order by titulo asc limit 0,1;';
							$result = mysql_query($sql, $link);
							while ($row = mysql_fetch_assoc($result)){
							$agenda_id_categoria=$row['id'];
							$agenda_video=$row['video'];
							$agenda_titulo=$row['titulo'];
							$agenda_imagem=$row['imagem'];							
						?>
					<div id="conteudo_agenda">
						
						<div id="conteudo_pub">
						<a href="bar.php">
							<div id="redondo_bar" class="ver">
								Saiba Mais...
							</div>
						</a>
						<div id="todo_bar">
							<div id="bar_topo"></div>
								<div id="bar_conteudo">
									<div class="titulos">
										O Bar
									</div>
									<div id="enfeite_eventos"></div>
									<div class="bar_texto">
										Com uma proposta temática que lembra e muito os
										melhores pub’s da Europa, o Abbey Road tem como objetivo
										principal, oferecer aos amantes do rock’ roll shows
										alternativos de bandas cover do rock nacional e
										internacional.
									</div>
								</div>
							<div id="bar_baixo"></div>
						</div>
					</div>
						<!--aqui-->
					</div>
				</span>
			</div>
			<!--      ----------------------------------     ANCORA THE PUB        ----------------------------------         -->
			<!--      ----------------------------------     ANCORA SERVIÇOS       ----------------------------------         -->
			<div class="section" id="servicos">
				<span id="cafeAnchor" class="anchor">
					<div id="conteudo_videos">
						<a href="videos.php">
							<div id="videos" class="ver_black">
								Assista 
								aos 
								Vídeos
							</div>
						</a>
					</div>
					<div id="todo_agenda">
							<div id="agenda_topo"></div>
							<a href="agenda.php?id=<?php echo $agenda_id_categoria;?>&imagem=<?php echo $agenda_imagem;?>">
								<div id="redondo_agenda" class="ver">
									Ver Agenda 
									Completa
								</div>
							</a>
								<div id="agenda_conteudo">
									<div class="titulos">
										Agenda de Eventos
									</div>
									<div id="enfeite_eventos"></div>
									<?php
										if($row['imagem']!=""){
									?>
									<a href="agenda.php?id=<?php echo $row['id'];?>&imagem=<?php echo $agenda_imagem;?>">
										<div id="imagem_eventos">
											<img src="./uploads/agenda/h_<?php echo  $row['imagem'];?>" border="0" width="225" height="136">
										</div>
									</a>
									<?php 
										}
										else {
									?>
									<div id="imgbanner">
										<object width="225" height="136">
										<param name="movie" value="<?php echo $row['video'];?>">
										<param name="allowFullScreen" value="true">
										<param name="allowscriptaccess" value="always">
										<embed src="http://www.youtube.com/v/<?php echo $row['video'];?>" type="application/x-shockwave-flash" width="225" height="136" allowscriptaccess="always" allowfullscreen="true">
										</object>
									</div>
									<?php 
										}
									?>
									<div class="evento_texto" style="margin-top:3px;">
										<?php echo $row['data_evento']?>
									</div>
									<a href="agenda.php?id=<?php echo $row['id'];?>&imagem=<?php echo $agenda_imagem;?>">
										<div class="evento_texto">
											<?php echo $row['titulo'];?> 
										</div>
									</a>
								</div>
								<?php
									}
									mysql_free_result($result);
								?>
								
							<div id="agenda_baixo"></div>
						</div>
					
				</span>
			</div>
			<!--      ----------------------------------     ANCORA FOTOS / VIDEOS       ----------------------------------         --> 
			<div class="section" id="fotovideo"> 
				<span id="ostalgieAnchor" class="anchor">
					<div id="conteudo_pub">
						<a href="cardapio.php">
							<div id="redondo_cardapio" class="ver">
								Ver Cardapio
								Completo...
							</div>
						</a>
						<div id="todo_cardapio">
							<div id="cardapio_topo"></div>
								<div id="cardapio_conteudo">
									<div class="titulos">
										Cardápio
									</div>
									<div id="enfeite_eventos"></div>
									<div class="cardapio_texto">
										Mais que cervejas, The Abbey Road Pub  
										traz experiências e emoções. 
									</div>
								</div>
							<div id="cardapio_baixo"></div>
						</div>
					</div>
				</span>
			</div>
			<!--      ----------------------------------     ANCORA AGENDA       ----------------------------------         -->
			<div class="section" id="agenda"> 
				<span id="zaubershowAnchor" class="anchor">
					<div id="conteudo_pub">
						<div id="redondo_promocao1" class="ver5">
							<div id="texto_tt">
								Newsletter
								Participe !!!
							</div>
						</div>
						<?php
							if ($_POST) {
								if($result!=null){
									$row = mysql_fetch_assoc($result);
									if ($_POST['acao']=='ENVIAR'){	
									$_POST["data_cadastro"]=Date("Y-m-d H:i:s");
									$sql = "insert into newsletter (data_cadastro,e_mail) values ('".$_POST["data_cadastro"]."','".$_POST["e_mail"]."');";
									echo $sql;
									if($sql){
												$erro = "E-mail salvo com sucesso!";
											  } else{
												  $erro = "Não foi salvar o E-mail";
											  }
									mysql_query($sql, $link);
									}
								}
							}
						?> 
						<div id="todo_promocao">
							<div id="promocao_topo"></div>
								<div id="promocao_conteudo">
									<div class="titulos">
										Newsletter
									</div>
									<div id="enfeite_eventos"></div>
									<div class="promocao_texto">
										Cadastre seu email e receba as novidades, 
										promoções e agenda do  Abbey Road Pub
									</div>
									<A NAME="banner"></A> 
									<form method="post" enctype="multipart/form-data" name="form1" id="form1">
										<div id="promocoes_input">
											<div class="input" >
												<input type="text" value="E-mail" onfocus="if(this.value=='E-mail')this.value='';" name="e_mail" style="border: 1px solid #ACACAC; width:220px;">
											</div>
											<div class="texto_submit">
												<div id="texto1_promocoes">
													Cadastre-se e receba 
													novidades e promoções!
												</div>
												<script>
												function alerta_e_mail()
												  {
												  alert("E-mail salvo com sucesso!");
												  }
												</script>
												<div style=" float:left clear:both;">
													<input type="submit"  onmouseover="trocardecor(this,'#B18B26')" onmouseout="trocardecor(this,'#ffffff')" style="background-color:#666666; font-size:12px; padding:3px 7px 3px 7px; color:#FFFFFF; cursor:pointer;  -moz-border-radius: 5px; -webkit-border-radius: 5px;border-radius: 5px; border:0px; " name="acao" value="ENVIAR" onclick="alerta_e_mail()"/>			
												</div>
												
											</div>
										</div>
									</form>
								</div>
							<div id="promocao_baixo"></div>
						</div>
					</div>
				</span>
			</div>
			<!--      ----------------------------------     ANCORA CONTATO        ----------------------------------         -->
			<div class="section" id="contato"> 
				<span id="traumweltAnchor" class="anchor">
					<div id="conteudo_pub">
						
							<div id="redondo_ultimo1" style="z-index:100;">
								<div id="parceiros_tt" style="z-index:100;" class="ver2">
									Conheca  Nossos 
									Parceiros
								</div>
							</div>
						
						<div id="todo_parceiros">
							<div id="wrapper1">
								<div>
									<div class="sliderbutton">
										<img src="./imagens/imagens_layout/seta_esquerda.png" border="0" alt="Previous" onclick="slideshow.move(-1)" height="14" width="7" onmouseover="this.src='./imagens/imagens_layout/seta_esquerda_hover.png';" border="0" onmouseout="this.src='./imagens/imagens_layout/seta_esquerda.png';" border="0">			
									</div>     
									<div style="overflow: hidden;" id="slider">
										<ul>
											<?php
													if ($result!=null){
													mysql_free_result($result);
												}
												$sql    = 'SELECT id,imagem,data_evento,titulo,link FROM parceiros;';
												$result = mysql_query($sql, $link);
												if (!$result) {
													echo "Erro do banco de dados, n䯠foi possivel consultar o banco de dados\n";
													echo 'Erro MySQL: ' . mysql_error();
													exit;
												}
												while ($row = mysql_fetch_assoc($result)){	
											?>
											
												<li>
													<a href="<?php echo $row['link'];?>"><img src="./uploads/parceiros/h_<?php echo $row['imagem'];?>"  height="90" width="165">
												</a>
												</li>
											
											<?php
												}
												mysql_free_result($result);
											?>
										</ul>
									</div>
									<div class="sliderbutton">
										<img src="./imagens/imagens_layout/seta_direita.png" border="0" alt="Next" onclick="slideshow.move(1)" height="14" width="7" onmouseover="this.src='./imagens/imagens_layout/seta_direita_hover.png';" border="0" onmouseout="this.src='./imagens/imagens_layout/seta_direita.png';" border="0">
									</div>
								</div>
							</div>
							<script type="text/javascript">
								var slideshow=new TINY.slider.slide('slideshow',{
									 id:'slider',
									 auto:3,
									 resume:true,
									 vertical:false,
									 navid:false,
									 activeclass:'current',
									 position:0
								});
							</script>
						</div>
					</div>
				</span>
			</div>
			<div style="width: 0px;" id="rightsection"></div>
		</div>
		<div id="navigationContainer">
			<div id="navigation">
				<ul>
					<li class="" id="divisor" class="home" style="margin-left:30px;">
						<a href="#" id="homeLink" class="link">
							THE PUB
						</a>
					</li>
					<li id="divisor">
						<a href="#" id="museumLink" class="link">
							CALENDAR OF EVENTS
						</a>
					</li>
					<li>
						<a href="#" id="zaubershowsLink" class="link">
							PHOTOS
						</a>
					</li>
					
					<li id="divisor" style="margin-left:190px;">
						<a href="#" id="ostalgieLink"  class="link">
							MOVIE
						</a>
					</li>
					<li id="divisor">
						<a href="#" id="traumweltLink"  class="link">
							MENU
						</a>
					</li>
					<li id="divisor">
						<a href="#" id="zauberhaftLink"  class="link">
							NEWSLETTER
						</a>
					</li>
					<li>
						<a href="contact.php" >
							CONTATO
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div  id="footer">
			<ul id="footernavi"></ul>
		</div>
		<!-- end of wrapper -->
		<div id="extraContainer" class="clearfix"></div>
		<?php 
			include ('footer.php');
		?>
	</body>
</html>
<?php
	include('./adm/rodape.php');
?>