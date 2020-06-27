<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Golemiada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container ">
        <?php 
           include_once("navbar.php");
        ?>
        <form action="" method="post">
            <div class="container h100px">
                    
            </div>
            <h3 class="navbar-brand gap">Dodaj wpis</h3>
            <div class="form-group">
                <input type="text" class="form-control gap" name="name_input_text_nick" id="id_input_text_nick" aria-describedby="helpId" placeholder="Anon">
                <textarea class="form-control gap" name="name_input_textarea_msg" id="id_input_textarea_msg" rows="3" placeholder="Wiadomość..."></textarea>
                <button type="submit" class="btn btn-dark gap">Submit</button>
            </div>
        </form>
</body>
</html>