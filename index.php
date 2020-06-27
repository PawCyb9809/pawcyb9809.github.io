<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golemiada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <script src="https://cdn.jsdelivr.net/npm/emoji-toolkit@5.5.0/lib/js/joypixels.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/emoji-toolkit@5.5.0/extras/css/joypixels.min.css"/>
    <!--
    <link rel="stylesheet" href="css/emojionearea.min.css">
    <script src="js/emojionearea.min.js"></script>
    <script src="js/chat_functions.js"></script>
-->
</head>
<body>
    <div class="container ">
      <?php
    include_once("navbar.php");
    if(isset($_GET['p'])){
        $page=$_GET['p'];
    			switch ($page) {
                //Strony
                    case "artykuly":
						require_once('artykuly.php');
						break;   
                        
                    case "archiwum":
						require_once('archiwum.php');
						break;  

                //Domyślna
					default:
						require_once('czat.php');
						break;
                    }			
                }else{
                    require_once('czat.php');
                }
    ?>
        
    </div>
</body>
</html>