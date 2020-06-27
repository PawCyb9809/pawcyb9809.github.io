<?php
// Dodawanie wiadomości do bazy
include 'connect.php';
 if(isset($_POST['msg'])&&!empty($_POST['msg'])){
    $newmsg=$_POST['msg'];
    $zapytanie = "SELECT * FROM users WHERE id=1";
        $rezultat = $polaczenie->query($zapytanie);
            $wiersz = $rezultat->fetch_assoc();
                $id_user=$wiersz['id']; // zmienić na zmienne sesyjne zalogowanego
                $login=$wiersz['login'];
    $zapytanie = "INSERT INTO message (id_user, login, msg, stan) VALUES ('$id_user','$login','$newmsg','1')";
    if (mysqli_query($polaczenie, $zapytanie)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
    $_POST = array();
    header("Location: index.php");
}
