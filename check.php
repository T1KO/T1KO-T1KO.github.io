<?php

// var_dump($_POST);

$error="";
$email=$_POST["email"];
$message=$_POST["message"];

if(trim($email)=="")
    $error="Գրեք ձեր էլ․հասցեն";

else if(trim($message)==""){
    $error="Գրեք հաղորդագրությունը";

}
else if(strlen($message)<10){
    $error="հաղորդագրությունը պետք է լինի 10 բառից ոչ պակաս";

};
if($error!=""){
echo $error;
exit;
}
$sumbect="=?utf-8?B'".base64_encode("Թեստային նամակ")."=?";
$headers="FROM:$email\r\nRepley-to:$email\r\nContent-type:text/html;charset=utf-8\r\n";
mail("eghiazaryant@gmail.com",$sumbect,$message,$headers);

header("Location: /about.php")
?>