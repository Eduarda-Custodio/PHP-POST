<?php
$tab = $_POST['tab'];

print ("TABUADA DO ". $tab . "<br><br>");

for ($i=0; $i<=10; $i++){
    print($i . "X" . $tab . "=" . $i*$tab . "<br>");
}


?>