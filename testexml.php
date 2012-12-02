<?php
if (isset($_GET['s'])) {
	$pesq = trim($_GET['s']);
}

$xmlfile = 'voip2.xml';

$dom = new DOMDocument();
$dom->load($xmlfile);

$xpath = new DOMXPath($dom);

//$nodes = $xpath->query('//voip[contains(@ext,"Mig") or contains(@nome,"Mig")]/@ext');


//$nodes = $xpath->query("//voip[contains(@ext,'$pesq')]");

$nodes = $xpath->query("//voip/*[contains(.,'$pesq')]/..");

$result = new DOMDocument('1.0','UTF-8');
$resultroot = $result->createElement('root');
$resultroot = $result->appendChild($resultroot);
foreach ($nodes as $resultnode) {
	$domnode = $result->importNode($resultnode,true);
	$resultroot->appendChild($domnode);
}


echo $result->saveXML();
 
 
?>