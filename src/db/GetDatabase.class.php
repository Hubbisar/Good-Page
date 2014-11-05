<?php
//Generell klass för att hämta data från databasen
class GetDatabase {
	require ('db.php'); //Kanske att vi måste lägga in denna i varje funktion, ska testa mig fram - Jonathan
	function getSingle ($rowId){
		//Hämta en rad från databasen baserat på ID
	}
	function getAll () {
		//Hämta alla rader från databasen 
	}
	function getSingleSpecial ($column, $where) {
		//Hämta en rad från databasen baserat på ett speciellt villkor
	}
}
?>