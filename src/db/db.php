<?php
//TODO: Lägg in den här filen ovanför webbroot vid lansering.
//Definera databasanslutning
//Starta INTE nya sessioner i de andra filerna där databasen används, endast här.
//Vi kan dock regenerera ett nytt ID när och var som helst.
include '../config.php';
//Databasanslutning
$dbMessage = null;
$dsn       = 'Ändra detta till databastyp, värd och databasnamn';
$login     = 'Användarnamn';
$password  = 'Lösenord';
$options   = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");

//Initiera anslutningen
try {
  $pdo = new PDO($dsn, $login, $password,$options);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Som standard hämtas innehållet i databasen som objekt
  session_regenerate_id(); //Regenerera ID
} catch (Exception $e) { //Just nu catchar vi ALLA fel, fixa en smartare hantering sen vid lansering
	 throw new PDOException('Could not connect to database, hiding connection details.'); // Hide connection details.
	 session_regenerate_id(); //Regenerera ID
}

?>