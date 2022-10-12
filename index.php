
<?php 
include_once 'vendor/sonata-project/google-authenticator/src/FixedBitNotation.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php';
 
$g = new \Google\Authenticator\GoogleAuthenticator();
$secret = 'XVQ2UIGO75XRUKJO';
//the "getUrl" method takes as a parameter: "username", "host" and the key "secret"
echo '<img src="'.$g->getURL('monApp', 'AdresseSiteWeb', $secret).'" />';
 
?>


<!DOCTYPE html>
<html>

	<head>
		<title>Ma Formation</title>
		<meta charset="utf-8" />
		<meta name="description" content="Une description de la page..." />
		<meta name="author" content="Alexis RIGOULOT" />
		<meta name="copyright" content="© CC BY-NC-SA 4.0" />
	</head>
	<body>

    <form action ="check.php" method="post">
        <label for="code"> Mon CODE </label>
            <input type="text" name="blabla">
            <input type="submit" value="submit">


		
	</body>

</html>


