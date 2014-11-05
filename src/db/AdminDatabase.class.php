<?php
//Generell klass för att lägga till, uppdatera och ta bort inlägg i databasen
class AdminDatabase {
	require ('db.php'); //Kanske att vi måste lägga in denna i varje funktion, ska testa mig fram - Jonathan
	function insertRow () {
		//Lägg in en rad i databasen
	}
	function insertSeveral ($numOfRows) {
		//Lägg in flera rader i databasen
	}
	function updateSingle () {
		//Uppdatera en rad i databasen
	}
	function updateSeveral ($numOfRows) {
		//Uppdatera flera rader i databasen
	}
	function deleteRow () {
		//Ta bort en rad från databasen
	}
	function deleteSeveral ($numOfRows) {
		//Ta bort flera rader från databasen
	}
}

?>