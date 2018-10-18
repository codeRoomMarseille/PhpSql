<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Objets en orbite</title>
		<link rel="stylesheet" type="text/css" href="css/dom.css">
	</head>

    <body>
        <!-- Corps de la page -->	
        <!-- Tableau des orbites -->	
		<TABLE BORDER="1">
		<CAPTION> Objets en orbites </CAPTION>
		<TR>
			<TH> Principale </TH>
			<TH> En orbite </TH>
		</TR>
		<?php include("tableau.php"); ?>
		</TABLE>
		<BR>
		<!-- Bouton radio des planètes -->	
		<?php include("planetes.php"); ?>
		
		<!-- Selection des planetes dans le tableau -->	
		<script src="scripts/selectPlanete.js" type="text/javascript"></script>		
    </body>
</html>
