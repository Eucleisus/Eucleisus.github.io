<?php header('Content-Type: text/html; charset=utf-8'); ?>
<article>
	<?php 
		include("fonctions/connection.php");
		$bdd = connection();
		$anonces[] = array();
		$rep = $bdd->query("SELECT * FROM `communique`");
		$rep2 = $bdd->query("SELECT COUNT(*) AS nb FROM `communique`");
		$max = $rep2->fetch()['nb'];

		$i = mt_rand()%$max +1;
		$a = 0;
		while($donne = $rep->fetch() AND $i >1){
				$a = $donne;
				$i--;
			}

	?>
	
	<h3><?php echo $a['cmm_titre']; ?></h3>
	<p id="article_cmm"><?php echo $a['cmm_contenu']; ?></p>

	<p><strong>La prochaine normale se tiendra le jj/mm/aaaa</strong></p>
	<p><strong>Le prochain rattrapage se tiendra le jj/mm/aaaa</strong></p>
</article>

<style>
	@font-face{
		font-family: dayrom;
		src: url('polices/dayrom.eot') format('eot'),
			 url('polices/dayrom.woff') format('woff'),
			 url('polices/dayrom.ttf') format('truetype'),
			 url('polices/dayrom.svg') format('svg');
		}
	article{
		text-align: center;
		font-family: dayrom, verdana, serif;
	}
	article h3{
		text-decoration: underline;
	}
	#article_cmm{
		height: 225px;
		overflow: auto;
	}
	strong{
		color: white;
	}

</style>