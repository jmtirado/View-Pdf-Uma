<?php 
if ($_POST)
{
	$data = $_POST['DOM'];
	$htmlenc = urldecode($data);

	error_reporting(E_ERROR | E_PARSE);
	
	$domd = new DOMDocument;
	$domd->loadHTML($htmlenc);
	foreach ($domd->getElementsByTagName('a') as $node) {
    	$testurl=$node->getAttribute( 'href' );
 
    	if (strpos($testurl, 'http://etsit.cv.uma.es/pluginfile.php') === 0) {
    		$urldocument = $testurl;
    		
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