<?php
require_once "autoload.php";
use JoyPixels\JoyPixels;
use JoyPixels\Client as EmojioneClient;
$emojioneClient = new EmojioneClient();
JoyPixels::setClient($emojioneClient);
if($login=='admin'){ // admin - to login osoby zalogowanej 
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
if($id_user[$index]!=$id_user[$index-1]){
    $name_input_text_nick='<p style="margin:0px;margin-top:-10px;">'.$login.'</p>';
    echo $name_input_text_nick;
    $flag=1;
}
$index++;
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
$body = htmlspecialchars($msg);
$body = JoyPixels::shortnameToImage($body);
$body = nl2br($body);
echo $body;
echo '
    </p>
    </div>
        <p style="margin:0px; margin-top:-1.75em; font-size:0.7em;" id="p_time_dymek'.$id_msg.'">Wysłano 04.03.2020 | 12:56:34</p>
    </div>
';