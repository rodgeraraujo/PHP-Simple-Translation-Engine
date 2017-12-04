<?php
    error_reporting(E_ALL ^ E_NOTICE);
    include ('lang.php');
    include ('defaultLang.php');
    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>


<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Me Scroll Effect w/ jQuery</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <br><br><br>
        <center>
            <div class="wrapper">
            <div><h1><?php echo $lang[$default]['hello'] . ', ' . $lang[$default]['my_name'] . ' Rogério.'; ?></h1></div>
                <div class="roles">
                    <div>
                        <?php echo $lang[$default]['web_developer']; ?>
                    </div>
                    
                    <div>
                        <?php echo $lang[$default]['designer']; ?>
                    </div>
                    
                    <div>
                        <?php echo $lang[$default]['student']; ?>
                    </div>
                    
                    <div style="font-size: 23px">
                        <?php echo $lang[$default]['skills']; ?>
                    </div>
                </div>
            </div>
        </center>
            
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="script.js"></script>
        
        <footer id="footer">
            <center>
                <p></p>
                <p><?php echo $lang[$default]['translate']; ?> <a href="<?php echo $url . '?lang=pt'; ?>">pt-BR</a>.</p>
            </center>
        </footer>
    </body>
</html>