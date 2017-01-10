<?php
$ID=$_POST['ID'];
$dom = new DomDocument();
$dom->load('ProjetXML.xml');
$pfe = $dom->documentElement;
$PFE = $pfe->getElementsByTagName("PFE");

$projet = $pfe->getElementsByTagName("projet");
 
foreach($projet as $pr)
{
if ($pr->hasAttribute("ID") == (string)$identifiant) 
	{
	if ($pr->getAttribute("ID") == (string)$identifiant)
		{
		//print_r($animation);
		$pfe->removeChild($pr);
		}
	}
}
$dom->save('ProjetXML.xml');
header("Location: supprimer.php");
exit;
?>