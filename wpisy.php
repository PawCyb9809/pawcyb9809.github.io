<?php 
    for($i=10;$i>0;$i--){
        echo '
            <div class="card bg-light mb-3 gap" >
            <div class="card-header">
        ';
        $name_input_text_nick='<p style="float:left;margin:0px;">Anon</p>';
        echo $name_input_text_nick;
        echo '
               <p style="float:right;margin:0px;" align="right">04.03.2020 | 12:56:34</p>
            </div>
                <div class="card-body">
                    <h5 class="card-title">
                ';
                $numer_wpisu=$i;
                $name_input_text_title="Wpis nr".$numer_wpisu;
                echo $name_input_text_title;
                echo '
                </h5>
                 <p class="card-text">
                 ';
                 $name_input_text_msg="Some quick example text to build on the card title and make up the bulk of the card's content.";
                 echo $name_input_text_msg;
                 echo '
                 </p>
                 </div>
                 </div>
        ';
    }
?>