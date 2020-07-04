<div id="content-div3" >
<?php
  if(isset($_SESSION["n_your_email"])){
    $n_your_email=$_SESSION["n_your_email"];
    if($n_your_email=="0"){
      echo '<div class="alert alert-danger alert-dismissible fade in notify delayedHide">
      <a href="#" class="close delayedHide">&times;</a>
      <strong>Błąd!</strong> Wysłanie wiadomości nie powiodło się! Nieprawidłowy adres E-mail!
    </div>';
    }
    session_unset();
  }
  if(isset($_SESSION["n_your_phone"])){
    $n_your_phone=$_SESSION["n_your_phone"];
    if($n_your_phone=="0"){
      echo '<div class="alert alert-danger alert-dismissible fade in notify delayedHide">
      <a href="#" class="close delayedHide">&times;</a>
      <strong>Błąd!</strong> Wysłanie wiadomości nie powiodło się! Nieprawidłowy numer telefonu!
    </div>';
    }
    session_unset();
  }
  if(isset($_SESSION["n_email"])){
    $n_email=$_SESSION["n_email"];
    if($n_email=="1"){
      echo '<div class="alert alert-success alert-dismissible fade in notify delayedHide">
      <a href="#" class="close delayedHide">&times;</a>
      <strong>Sukces!</strong> Wysłano wiadomość! 
    </div>';
    }else{
      echo '<div class="alert alert-danger alert-dismissible fade in notify delayedHide">
      <a href="#" class="close delayedHide">&times;</a>
      <strong>Błąd!</strong> Wysłanie wiadomości nie powiodło się!
    </div>';
    } 
    session_unset();
  }
?>
<!--

<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>
-->
  <div class="corpo_section stripe">
    <h2 class="section-title">Home</h2>
  </div>
  
  <img src="graphs/pablaz-c.png" class="imgdiv1 homeimg" alt="logo" >

  <div class="flex-wrap flex-revers">
    <div class="flex-item1">  
      <div class="mcontent">
        <h3 class="mtitle">Zobacz naszą ofertę</h3>
        <p>Staramy się, aby każdy nasz Klient znalazł idealny samochód dla siebie. Dbamy o różnorodność oferty, oferując auta najczęściej wybieranych i dobrych jakościowo marek, m.in. Audi, BMW, Renault, Skoda, Fiat lub Mercedes.</p> 
        <p>Zapoznaj się z naszą bogatą ofertą i odszukaj wymarzony samochód!</p>
      </div>
    </div>
    <div class="flex-item2">
        <a href="https://allegro.pl/uzytkownik/sancho2008" target="_blank">
          <img src="graphs/auta.png" class="auta" alt="auto">
        </a>
    </div>
  </div>
<div class="fixed-panel">
  <div class="flex-wrap flex-height">
    <div class="flex-item3" id="mitem">
      <div class="icon" id="micon">
        <i class="fas fa-check" aria-hidden="true"></i>
      </div>
      <div class="mcontent">
        <h3 class="mtitle">Gwarancja bezpieczeństwa</h3>
        <p>Na rynku motoryzacyjnym działamy już kilkanaście lat. Zbudowaliśmy własną markę, która daje gwarancję bezpiecznej i udanej transakcji.</p>
      </div>
    </div>

    <div class="flex-item3" id="mitem">
      <div class="icon" id="micon">
        <i class="fas fa-check" aria-hidden="true"></i>
      </div>
      <div class="mcontent">
        <h3 class="mtitle">Bogactwo oferty</h3>
      <p>Oferujemy naszym Klientom szeroki wybór samochodów używanych. Sprawdź naszą ofertę już teraz.</p>
      </div>
    </div>
    
    <div class="flex-item3" id="mitem">
        <img src="graphs/dpd.gif" id="mimg">
      <div class="mcontent">
        <h3 class="mtitle">Natychmiastowa wysyłka</h3>
        <p>Nasze produkty wysyłamy starannie zapakowane w trosce o bezpieczeństwo w podróży</p>
      </div>
    </div>
  </div>
</div>
</div>