<?php
if(isset($_POST['submit'])){ //wenn submit gedrückt wird
$titel=$_POST['titel']; //speichere den wert von titel in die Variable titel
$mail=$_POST['mail'];
$inhalt=$_POST['inhalt'];
$meineEmail="marc.weber@student.ksh.ch";
mail($meineEmail,$titel,$mail,$inhalt); //verschicken der mail mit den werten: E-Mail empfänger, E-Mail sender, titel und inhalt
header("Location: kontakt.html?mailsend");//bestätigung dass die Mail abgeschickt wurde
}>