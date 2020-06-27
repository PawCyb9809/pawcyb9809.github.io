<?php
    require_once "connect.php";
    $mysqli = new mysqli($host, $db_user, $db_password, $db_name);
        if($mysqli->connect_error) {
            exit('Could not connect');
        }
    mysqli_set_charset($mysqli,"utf8");
    
    $q = $_GET['q'];  //  id of next msg
    $qq = $q - 1;       //  id of actually displayed message
    $index = 1;
    $sql = "SELECT id_msg, id_user, login, msg, send_date, stan FROM message WHERE id_msg = $qq";
    $rezultat = $mysqli->query($sql);
        $wiersz = $rezultat->fetch_assoc();
            $id_user[0] = $wiersz['id_user']; //Dodanie pierwszego elementu do tablicy 
    $sql2 = "SELECT id_msg, id_user, login, msg, send_date, stan FROM message WHERE id_msg = $q";
    if($rezultat = $mysqli->query($sql2)){
        $wiersz = $rezultat->fetch_assoc();
            $id_msg = $wiersz['id_msg'];
            $msg = $wiersz['msg'];
            $id_user[$index] = $wiersz['id_user'];
            $login = $wiersz['login'];
            $stan = $wiersz['stan'];
            $send_date = $wiersz['send_date'];
            $flag = 0;
            if($id_msg == $q){
                include "msg.php";
            }
    }
?>