<h3 class="navbar-brand gap">CHAT</h3>
<div class="card bg-light">
    <div class="card bg-light padd dymki-group" id="data">
        <?php 
            include "save.php";     // TASK TO DO:"Przerobić na sesje" Dodawanie wiadomości do bazy     
            $zapytanie="SELECT * FROM message";
            $rezultat = $polaczenie->query($zapytanie);
                $id_user[0] = $wiersz['id_user'] = $rezultat->fetch_assoc();    //  Dodanie pierwszego elementu do tablicy 
            $index = 1;
            $rezultat = $polaczenie->query($zapytanie);
                while($wiersz = $rezultat->fetch_assoc()){      //   Wypełnienie tablicy z powieleniem pierwszego elementu
                    $dbgolemiada[]=$wiersz;
                    $id_msg=$wiersz['id_msg'];
                    $msg=$wiersz['msg'];
                    $id_user[$index]=$wiersz['id_user'];
                    $login=$wiersz['login'];
                    $stan=$wiersz['stan'];
                    $flag=0;
                    if($stan==1){
                        include "msg.php";      // Generowanie dymka 
                    }else{
                        echo ' <p  style="margin:0px; " id="p_time_dymek'.$id_msg.'"></p>';
                    }
                }
                json_encode($dbgolemiada);      // dbgolemiada json format
            mysqli_close($polaczenie); 
        ?>
        <script>
            hide();  // ukrywa date wiadomosci
            scrollonstart();  // scrolluje czat do najnowszej wiadomości zaraz po wejściu na strone                  
            setInterval(function() { loadnewmsg(document.querySelectorAll(`[id*="p_time_dymek"]`).length+1); }, 200);  // sprawdza czy jest nowa wiadomość w bazie co 200ms
        </script>
    </div>
    <div class="bg-light container-editor">
        <form action="save.php" method="post" name="msgform" class="formmsg" id="msgform">
            <div class="form-group">
                <textarea rows="1" class="form-control gaptop sticky-bottm" id="id_input_text_czat" name="name_input_text_czat" placeholder="Wiadomość..." autofocus autocomplete="off" style="display:none;"></textarea>
                <button type="submit" class="btn btn-dark" id="id_btn_submit" style="display:none;">Submit</button>
            </div>
        </form>
    </div>
</div>