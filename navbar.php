
<?php
    require_once("logowanie_funkcja.php");
?>
<nav class="sticky-top navbar navbar-expand navbar-light bg-light"> 
           <a class="navbar-brand" href="#">Golemiada</a>
           <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
               aria-expanded="false" aria-label="Toggle navigation"></button>
           <div class="collapse navbar-collapse" id="collapsibleNavId">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                   <li class="nav-item active">
                       <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="?p=artykuly">Artykuły</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="?p=archiwum">Archiwum</a>
                   </li>
                   <li class="nav-item align-right" onclick="document.getElementById('id01').style.display='block'">
                       <a class="nav-link" href="#" >Zaloguj się</a>
                   </li>
               </ul>
           </div>
        </nav>