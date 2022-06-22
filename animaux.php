<?php
    require_once 'controleurs/animaux.php';
?>
<!doctype html> 
<html lang="en">
	 <head>
         <!-- Required meta tags -->
		 <meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="css/style.css">
		<!-- Bootstrap CSS -->
		 <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css 		  
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
		<title>Veterinaire</title> 
	</head>
<body>

<!-- Navigation -->
<?php
require_once 'section-template/navigation.php';
?>

		
<?php

        $controleur=new ControleurAnimaux;
        $controleur->afficherTableau();

?>

</body>
</html>