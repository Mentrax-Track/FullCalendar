
<?php
 
$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];
 
// connexion � la base de donn�es
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', '');
 } catch(Exception $e) {
 exit('Impossible de se connecter � la base de donn�es.');
 }
 
$sql = "INSERT INTO evenement (title, start, end) VALUES (:title, :start, :end)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end));
?>



