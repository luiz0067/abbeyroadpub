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
    <div id="content_right">
      <div class="titulo_pagina">Contact</div>
      <div id="containertexto">
        <hgroup>
        
        <h2>AbbeyRoad Pub LTDA.</h2><br>

		<h3>Rua da faculdade ( ao lado do Empório Santa Maria)<br>
		45 3054 5701<br>
		pub@abbeyroadpub.com.br<br>
		Toledo - PR<br><br>


		Para entrar em contato seja para reservas, aluguel do bar <br>
        ou mesmo sugestões, preencha os campos abaixo:</h3>

        </hgroup>
      </div>
      <!-- inicio do formulario de contato -->
      <div id="espacoformulario">
      	<form action="enviar.php" name="form" method="post">
			Nome: <input type="text" class="input_contato" name="nome" id="input_nome"  /><br><br>
            Endereço: <input name="endereco" type="text" class="input_contato" id="input_endereco"  /><br><br>
            Telefone: <input name="telefone" type="text" class="input_contato" id="input_telefone"  /><br><br>
            E-mail: <input name="email" type="text" class="input_contato" id="input_email"  /><br><br>
            Cidade: <input name="cidade" type="text" class="input_contato" id="input_cidade"  />
            Estado: <input name="cidade" type="text" class="input_contato" id="input_estado"  /><br><br>
            Mensagem<br>
            <textarea name="mensagem" rows="4" id="mensagem"></textarea>
            <input type="submit" id="btenviar" value="ENVIAR" name="ENVIAR"  />
          <input type="reset" id="btlimpar" value="LIMPAR" name="LIMPAR"  />
        </form>
      </div>

    

    </div>
  </div>
  <?php include("footer.php"); ?>
</div>
</body>
</html>