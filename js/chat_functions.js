let iloscwpisow = document.querySelectorAll(`[id*="p_time_dymek"]`).length;
let nr=1;
let id="p_time_dymek"+nr;
let visibletab=new Array(iloscwpisow);

 function hide(){
     iloscwpisow=document.querySelectorAll(`[id*="p_time_dymek"]`).length
     for(nr;nr<=iloscwpisow;nr++){
         id="p_time_dymek"+nr;
             document.getElementById(id).style.visibility = "hidden";
         visibletab[nr]='1';
     }
 }

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

 function scrollonstart() {
    let elmnt = document.getElementById("data");
    elmnt.scrollTop += elmnt.scrollHeight;
}

function loadnewmsg(str) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200 &&(this.responseText!="")) {
            para = document.createElement("div");               // Create a <p> element
            para.innerHTML = this.responseText;
            document.getElementById("data").appendChild(para);
        }
        hide();
        msgcount = document.querySelectorAll(`[id*="p_time_dymek"]`).length;
    };
    xhttp.open("GET", "getmsg.php?q="+str, true);
    xhttp.send();

    let elmnt = document.getElementById("data");
    let last  = document.querySelector('[id=data]:first-child > div:last-child').offsetHeight;
    if(elmnt.scrollTop>0 && elmnt.scrollTop<elmnt.scrollHeight-document.body.querySelector('[id=data]').offsetHeight-1.1*last){
    }else{
        elmnt.scrollTop += last;
    }       
}

//  emoji   <------    START    ------->
$(document).ready(function() {
    $("#id_input_text_czat").emojioneArea({
        saveEmojisAs: "shortname",
        search: false,
        filtersPosition: "bottom",
        hidePickerOnBlur: true,
        textcomplete: {
            maxCount  : 20,
            placement : 'top'
        },
        events: {
            keydown: function(editor, event) {
                if(event.which == 13 && !event.shiftKey) {  
                    event.preventDefault();
                    var text = $('#id_input_text_czat').data("emojioneArea").getText();
                    if(text!=""){
                        $.ajax({
                            url: "save.php",  // wysyłanie wiadomości z formularza w pliku czat.php
                            type: "POST",
                            data: {
                                id_user : 1,
                                login : "admin",
                                msg : text,
                                stan : 1				
                            },
                            async:true,
                            cache: false
                        });
                        $('#id_input_text_czat').data("emojioneArea").setText(""); 
                    }
                }
            }
        }
    });
});
//  emoji   <------    END    ------->		
