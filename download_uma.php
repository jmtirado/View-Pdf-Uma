<?php 
if ($_POST)
{
	$cv = array('http://etsit.cv.uma.es/pluginfile.php','http://ccedu.cv.uma.es/pluginfile.php','http://ciencias.cv.uma.es/pluginfile.php','http://politecnica.cv.uma.es/pluginfile.php','http://arquitectura.cv.uma.es/pluginfile.php','http://industriales.cv.uma.es/pluginfile.php','http://informatica.cv.uma.es/pluginfile.php','http://bellasartes.cv.uma.es/pluginfile.php','http://ciencias.cv.uma.es/pluginfile.php','http://cccom.cv.uma.es/pluginfile.php','http://economicas.cv.uma.es/pluginfile.php','http://salud.cv.uma.es/pluginfile.php','http://comerciogestion.cv.uma.es/pluginfile.php','http://derecho.cv.uma.es/pluginfile.php','http://fest.cv.uma.es/pluginfile.php','http://filosofia.cv.uma.es/pluginfile.php','http://medicina.cv.uma.es/pluginfile.php','http://turismo.cv.uma.es/pluginfile.php','http://psicologia.cv.uma.es/pluginfile.php');
	$data = $_POST['DOM'];
	$htmlenc = urldecode($data);
	$urldocument = "";

	error_reporting(E_ERROR | E_PARSE);
	
	$domd = new DOMDocument;
	$domd->loadHTML($htmlenc);
	foreach ($domd->getElementsByTagName('a') as $node) {
    	$testurl=$node->getAttribute( 'href' );
		
		foreach( $cv as $valor)
		{
			if (strpos($testurl, $valor ) === 0) {
				$urldocument = $testurl;
			}
		}	
		

	}
	echo "Redireccionando...";
}
else{
	echo 'error in POST';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="refresh" content="0; url=<?php echo $urldocument;?>" />
	<title>Redirect</title>
</head>
<body>

</body>
</html>