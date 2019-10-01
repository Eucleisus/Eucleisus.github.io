<div id="section_fax">
	<link rel="stylesheet" href="css\disign_section_fax.css" />

	<?php
		try
		{	/* Connection à la base de donnée */
			$bdd = new PDO ('mysql:host=localhost;dbname=inf13', 'root','');
		}
			/* erreur */
		catch (Exception $e)
		{
			die ('Erreur :'.$e->getMessage());
		}

			/* recuperation des parametres */
		$filiere =($_GET['section']);

		/*if ($filiere==null)
			{
	?>			<h1>Notre Objectif</h1>
				<p>Dans l'optique d'aider les étudiants de l'Université de Dschang, nous les créateurs
				 et administrateurs du site <strong> RECEUIL DES ANCIENS SUJET </strong> proposont a cet effet 
				une selection d'anciennes épreuves d'examens et de cc (controle continu) ainsi que des
				 essaies de correction faites par des professeurs ou par des étudiants
				en master. De plus, nous les offronts un service d'impression pour qu'ils puissent 
				les avoirs en formats papiers, une FAQ (foires aux questions) qui les permettra de s'entraider et d'echanger.
	<?php
			}
		else{

			/* test */
		switch ($filiere) {

			case 'mi': //dans le cas où $filiere vaut mi
				echo '<h1>MATHS-INFO</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'mi\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
	?>				<a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a>
	<?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'phy': //dans le cas où $filiere vaut phy
				echo '<h1>PHYSIQUES</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'phy\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
	?>				<a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'bc': //dans le cas où $filiere vaut bc
				echo '<h1>BIOCHIMIE</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'bc\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'chi': //dans le cas où $filiere vaut chi
				echo '<h1>CHIMIE</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'chi\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'bv': //dans le cas où $filiere vaut bv
				echo '<h1>BIOLOGIE VEGETALE</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'bv\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'bm': //dans le cas où $filiere vaut bm
				echo '<h1>BIO-MEDICALE</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'bm\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'ba': //dans le cas où $filiere vaut ba
				echo '<h1>BIOLOGIE ANIMALE</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'ba\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'st': //dans le cas où $filiere vaut st
				echo '<h1>SCIENCE DE LA TERRE</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'st\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'hist': //dans le cas où $filiere vaut hist
				echo '<h1>HISTOIRE</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'hist\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'geo': //dans le cas où $filiere vaut geo
				echo '<h1>GÉOGRAPHIE</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'geo\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;


			case 'droit': //dans le cas où $filiere vaut droit
				echo '<h1>DROIT</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'droit\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'fasa': //dans le cas où $filiere vaut fasa
				echo '<h1>FASA</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'fasa\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'secogene': //dans le cas où $filiere vaut secogene
				echo '<h1>SECO GENE</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'secogene\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;

			case 'secopro': //dans le cas où $filiere vaut secopro
				echo '<h1>SECO PRO</h1>';
				$rep = $bdd->query('SELECT * FROM fax WHERE fax_filiere=\'secopro\'');
				while ( $data = $rep->fetch() )
				{
					echo '<ul class=\'liste_fax\'>';
					echo '<li>';
					echo $data['fax_nom'];
					?><a href="<?php echo $data['fax_chemin'];?>" target="_blank"><?php echo 'telecherger';?></a><?php
					echo'</li>';
					echo '</ul>';
				}
				break;
			default:
				echo '<h1><strong>parameter section not found</strong></h1>';
				break;
				$rep->closeCursor();
		}
	?>
</div>