<div class="card bg-light padd dymki-group" id="data">
    <?php 
        require_once "connect.php";
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        mysqli_set_charset($polaczenie,"utf8");
        if(isset($_POST['name_input_text_czat'])&&!empty($_POST['name_input_text_czat'])){
            $newmsg=$_POST['name_input_text_czat'];
            $zapytanie = "SELECT * FROM users WHERE id=1";
            $rezultat = $polaczenie->query($zapytanie);
            $wiersz = $rezultat->fetch_assoc();
            $id_user=$wiersz['id'];
            $login=$wiersz['login'];
            $zapytanie = "INSERT INTO message (id_user, login, msg, stan) VALUES ('$id_user','$login','$newmsg','1')";
            $rezultat = $polaczenie->query($zapytanie);
            $_POST = array();
            header("Location: index.php");
        }
        $zapytanie="SELECT * FROM message";
        $rezultat = $polaczenie->query($zapytanie);
        while($wiersz = $rezultat->fetch_assoc()){
            $id_msg=$wiersz['id_msg'];
            $msg=$wiersz['msg'];
            $id_user=$wiersz['id_user'];
            $login=$wiersz['login'];
            $stan=$wiersz['stan'];

            if($login=='admin'){
                echo '
                <div class="card radius30 bg-transparent dymki-wyslane">
            ';
            }else{
                echo '
                <div class="card radius30 bg-transparent dymki-odebrane">
            ';
            }
            echo '
            <div class="card-header bg-transparent dymki-header">
            ';

            $name_input_text_nick='<p style="margin:0px;margin-top:-10px;">Anon</p>';
            echo $name_input_text_nick;
            echo '
            </div>
            ';
                            
        if($login=='admin'){
            echo '
            <div class="card-body radius30 dymki-wyslane" onclick="visible('.$id_msg.')">
            ';
        }else{
            echo '
            <div class="card-body text-light radius30 dymki-odebrane" onclick="visible('.$id_msg.')">
            ';
        }
            echo '<p class="card-text">';
            echo $msg;
            echo '
            </p>
            </div>
        <p style="margin:0px; margin-top:-1.75em; font-size:0.7em;" id="p_time_dymek'.$id_msg.'">Wysłano 04.03.2020 | 12:56:34</p>
            </div>
            ';
            }
    ?>
    <script>
                    var iloscwpisow=document.querySelectorAll(`[id*="p_time_dymek"]`).length;
                    var nr=1;
                    var id="p_time_dymek"+nr;
                    var visibletab=new Array(iloscwpisow);
                    function hide(){
                        for(nr;nr<=iloscwpisow;nr++){
                            id="p_time_dymek"+nr;
                            document.getElementById(id).style.visibility = "hidden";
                            visibletab[nr]='1';
                        }
                    }
                    hide();
                    function visible(n){
                        id="p_time_dymek"+n; 
                        if(visibletab[n]=='0'){
                            document.getElementById(id).style.visibility = "hidden";
                            document.getElementById(id).style.marginTop= "-1.75em";
                            visibletab[n]='1';
                        }else if(visibletab[n]=='1'){
                            document.getElementById(id).style.visibility = "visible";
                            document.getElementById(id).style.marginTop= "";
                            visibletab[n]='0';
                        }else{
                            visibletab[n]='1';
                        }
                    }
                    function scroll() {
                    var elmnt = document.getElementById("data");
                    elmnt.scrollTop += 4000;
                    }
                    scroll();
    </script>
</div>
<div>
    <form action="" method="post" name="msgform" class="formmsg">
        <div class="form-group">
            <input type="text" class="form-control gaptop sticky-bottm" name="name_input_text_czat" placeholder="Wiadomość..." autofocus autocomplete="off">
            <button type="submit" class="btn btn-dark" id="id_btn_submit" style="display:none;">Submit</button>
        </div>
    </form>
    <?php
        mysqli_close($polaczenie); 
    ?>
</div>