<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $tittel; ?> - Westerdals Oslo ACT</title>
        <meta name="author" content="Gruppe 36 - PJ2100">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<link rel="shortcut icon" href="img/icon.png" type="image/x-icon" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        
        <!-- Font Awesome ikoner -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
        <!-- JS start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
        <script>
            $(function() {
                $('#dato').datepicker({
                    dateFormat: 'dd.mm.yy'
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.rom.inaktiv').on('click', aktivtRom);
            });

            function aktivtRom() {
                $('.rom').removeClass('aktiv');
                $('.rom').addClass('inaktiv');
                $(this).removeClass('inaktiv');
                $(this).addClass('aktiv');
            }
        </script>
        <!-- JS slutt -->
    </head>
    <body>
        <div id="container">
            <div id="header">
                <a href="index.php"><img src="img/logo2.svg" id="logo" alt="Westerdals ACT" /></a>
                <div id="menu">
                    <ul>
                        <li><a href="index.php">Book rom</a></li>
                        <li><a href="">Redigere booking</a></li>
                    </ul>
                </div>
            </div>