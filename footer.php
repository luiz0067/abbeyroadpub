<?php
	include('./adm/conecta.php');
?>
<div id="totalfooter">
  	<div id="footer">
    	<div id="espaco_redes"><img src="imagens/redes.png" width="145" height="40" usemap="#Map" border="0" />
          <map name="Map">
            <area shape="rect" coords="107,4,143,38" href="http://www.youtube.com/toledoemporio" target="_blank">
            <area shape="rect" coords="56,3,95,38" href="http://www.facebook.com/pages/Abbey-Road-Pub-and-Lounge/314219345352432?ref=ts&fref=ts" target="_blank">
            <area shape="rect" coords="3,3,35,36" href="https://twitter.com/emporio_toledo" target="_blank">
          </map>
    	</div>
        <div id="slide-cervejas">
        	<marquee direction="left" scrollamount="3" width="603" height="72" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()">
               <?php
			
					$sql    = 'SELECT id,imagem,obs FROM cervejas;';
					$result = mysql_query($sql, $link);
					while ($row = mysql_fetch_assoc($result)){
				?>
					<a target="_self"> <img src="./uploads/cervejas/g_<?php echo $row['imagem'];?>" height="72" width="150"/>
				<?php
					}

				?>
    		</marquee>
        </div>
        <div id="midiamix"><a href="http://facebook.com/studiomidiamix" target="_blank"><img src="imagens/midiamix.png" width="110" height="72" border="0" /></a></div>
  </div>
</div>