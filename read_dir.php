<?php
////////////////////////////////////////////// Liste avec lien
function ScanDirectoryCCM($dir_nom){
//$dir_nom = '.'; // dossier listé (pour lister le répertoir courant : $dir_nom = '.'  --> ('point')
$dir = opendir($dir_nom) or die('Erreur de listage : le répertoire n\'existe pas'); // on ouvre le contenu du dossier courant
$fichier= array(); // on déclare le tableau contenant le nom des fichiers
$dossier= array(); // on déclare le tableau contenant le nom des dossiers

while($element = readdir($dir)) {
	if($element != '.' && $element != '..' && strrchr($element,'.') != '.php') {
		if (!is_dir($dir_nom.'/'.$element)) {$fichier[] = $element;}
		else {$dossier[] = $element;}
	}
}

closedir($dir);

if(!empty($fichier)){

	sort($fichier); // pour le tri croissant, rsort() pour le tri décroissant
	$liste = fopen('script.js', 'w'); // Ouverture du fichier en écriture
	ftruncate($liste, 0); // tronque le fichier à 0
	fputs($liste, 
"jQuery(document).ready(function() {
\t$(\"#predayPhoto\").click(function() {
\t$(this).fadeOut(\"slow\");
\t});
\t$('.fancybox').fancybox();
\t$(\"#fancybox-manual-c\").click(function() {
\t$.fancybox.open(["); // On écrit dans le fichier
		
		foreach($fichier as $lien) {
			fputs($liste, "\t{href : \"$dir_nom/$lien\"},\n");
		}
	fputs($liste, "\t{href : \"$dir_nom/end/dayPhoto_big.png\"}\n");
	fputs($liste, 
"\t], {
\t\thelpers : {
\t\t\tthumbs : {
\t\t\t\twidth: 100,
\t\t\t\theight: 80
\t\t\t}
\t\t}
\t});
\t});
});"); // On écrit dans le fichier
//		foreach($fichier as $lien) {
//			fputs($liste, "\t$lien<br />\n");
//		}
//	fputs($liste, "</nom>");
	fclose($liste);	// Fermeture du fichier
 } 
}

