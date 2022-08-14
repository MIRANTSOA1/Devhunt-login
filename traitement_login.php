<?php
$log=$_POST["Id"];
$mdp=$_POST["Pass"];

$database="eni";
$login="root";
$password="";
$host="localhost";


$connexion=new PDO("mysql:host=$host;dbname=$database",$login,$password);
$ping="select * from users where (ID=('$log') && PASSWORD=('$mdp'));";

$requete=$connexion->query($ping);

if($data=$requete->fetch())
{
echo (' team titans goooo');

}
else{
    echo("nangidy");
}





?>