<?php 
	session_start();
	require_once('assets/classes/class.Config.php');
    require_once('assets/classes/class.Scores.php');
    require_once('assets/classes/class.Tools.php');
    require_once('assets/classes/class.TwitchUserAPI.php');
    require_once('assets/classes/class.TwitchSubscriberAPI.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<!--<base href="/">-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= Config::$title; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Core CSS -->
    <link href="assets/css/mainStyle.css" rel="stylesheet">

    <!-- Glitch Effect -->
    <link href="assets/css/glitchEffect.scss" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>

<body>
    
    <!-- Navigation -->
    <?php //include("assets/templates/nav.tpl"); ?>

    <!-- Header -->
    <?php //include("assets/templates/header.tpl"); ?>

    <!-- Core Content Include -->
     <?php 
            include("navigeturl.php"); 
            if(isset($_GET['page']) AND isset($site[$_GET['page']])) 
            { 
                if(!file_exists($site[$_GET['page']])) echo "page doesnt exist."; 
                include($site[$_GET['page']]);  
            } 
            else 
            { 
                 include("assets/pages/home.php");  
            }
    ?>   

	<!-- Footer -->
	<?php //include("assets/templates/footer.tpl"); ?>

	<!-- Javascripts -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/numbersGlitchEffect.js"></script>

    
	

</body>
</html>



