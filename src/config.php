<?php
//Konfigurationsfil
//Error-hantering -1 = Visa alla. 0 = Visa inga
error_reporting(-1);
//Starta INTE nya sessioner i de andra filerna där databasen används, endast här.
//Vi kan dock regenerera ett nytt ID när och var som helst.
session_start(); //Sessionstart
session_regenerate_id(); //Regenerera ID
?>