<?php
session_start();
//Error
    $flag=true;
//First Name
    if(!empty($_POST['first-name'])){
        $first_name=trim(htmlspecialchars($_POST['first-name']));
    }else{
        $first_name='Anonim';
    }

//Last Name
    if(!empty($_POST['last-name'])){
        $last_name=trim(htmlspecialchars($_POST['last-name']));
    }else{
        $last_name='';
    }

//Email
    if(!empty($_POST['your-email'])){
        $your_email=trim(htmlspecialchars($_POST['your-email']));
        $your_email=filter_var($your_email, FILTER_VALIDATE_EMAIL);

        if($your_email===false){
            $_SESSION["n_your_email"]="0";
            header('Location: ../index.php');
            exit();
        }
    }else{
        $flag=false;
    }

//Phone
    if(!empty($_POST['your-phone'])){
        $your_phone=trim(htmlspecialchars($_POST['your-phone']));
        $your_phone=filter_var($your_phone, FILTER_VALIDATE_INT);

        if($your_phone===false){
            $_SESSION["n_your_phone"]="0";
            header('Location: ../index.php');
            exit();
        }
    }else{
        $your_phone='Brak';
    }

//Message
    if(!empty($_POST['your-message'])){
        $your_message=trim(htmlspecialchars($_POST['your-message']));
    }else{
        $flag=false;
    }

//Consent
    if(isset($_POST['your-consent'])){
        $your_consent=$_POST['your-consent'];
        $your_consent=filter_var($your_consent, FILTER_VALIDATE_BOOLEAN);
    }else{
        $flag=false;
    }

//Error checking
    if($flag==true){
        $to = 'kontakt@autohandel-blaz.pl';
        $subject = "=?UTF-8?B?".base64_encode("Wiadomość od: $first_name $last_name")."?=";
        $txt = "$first_name $last_name napisał(a): "."\r\n\n"."$your_message"."\r\n\n"."Tel. kontaktowy: $your_phone"."\r\n"."E-mail: $your_email";
        $headers = "$your_email";

        $tmp = mail($to, $subject, $txt, $headers, "-f kontakt@autohandel-blaz.pl");
        if($tmp){
			$_SESSION["n_email"]="1";
        }else{
            $_SESSION["n_email"]="0";
        }
    }

header('Location: ../index.php');
?>