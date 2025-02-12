<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    
</body>
</html>
<?php
$data=date("Y-m-d");
$czas=date("H:i");
/*
setcookie("pismo",(int)$_COOKIE["pismo"]+1,time()+3600);
if(isset($_COOKIE["pismo"])) {
echo "Jesteś naszym stałym klietem ".$_COOKIE["pismo"]." razy a ostatni był $data $czas";
} else {
    echo "Witamy po raz pierwszy na stronie";
}*/

setcookie("pismo",time(),time()+30*86400);
if(isset($_COOKIE["pismo"])) {
echo "jesteś naszym stałym klietem";
} else {
    echo "Odwiedziełeś nas ostani raz w ".date('d.m.Y,H;i',$_COOKIE["pismo"]);
}
?>