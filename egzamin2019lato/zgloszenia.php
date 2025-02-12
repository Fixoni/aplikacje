<?php
if(array_key_exists("submit",$_POST)) {
    $db = mysqli_connect("localhost","root","","baza");
    $query = mysqli_query($db,'insert into zgloszenia values(0,'.$_POST["zespol"].',''')
}
?>