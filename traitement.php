<?php

$mat=$_POST["Matricule"];
$mail=$_POST["Email"];




$database="eni";
$login="root";
$password="";
$host="localhost";


$connexion=new PDO("mysql:host=$host;dbname=$database",$login,$password);
$ping="select * from ETUDIANT where NUM_MATRICULE=('$mat');";

$requete=$connexion->query($ping);
while($data=$requete->fetch())

{
    
    $test="select * from users where NUM_MATRICULE_ET=('$mat');";
    $requete2=$connexion->query($test);


    /*
    si nouveau utilisateur existe dans la base de donné étudiant
    
    */
    if($data2=$requete2->fetch())
    {
        /*
        
        si numero matricule existe dans la base de donné users 
        zany hoe efa manana compte accès wifi
        */
        echo("ERROR");
    }

    else{
        $tableau_aleatoire='0123456789azertyuiopqsdfghjklmwxcvbn';
    $x=0;
    $y=6;
    $mdp=substr(str_shuffle($tableau_aleatoire),$x,$y);
    $creation="insert into users(PASSWORD,NUM_MATRICULE_ET) values ('$mdp','$mat');";
    $connexion->exec($creation);
   
    $geting_info="select * from users where NUM_MATRICULE_ET='$mat';";
    $requete3=$connexion->query($geting_info);


    while($data3=$requete3->fetch())
    {   
        
        
        $id_mail=$data3['ID'];
        $password_mail=$data3['PASSWORD'];


         

    }


#rakotomalalamirantsoa1@gmail.com
$to=$mail;
$subject="";
$message=('voilà ton ID:  '.$id_mail.' <br> Et ton mot de passe pour accéder au wifi:  '.$password_mail);
$from="rakotomalalamirantsoa1@gmail.com";

echo($message);

if(mail($to,$subject,$message)){
    echo("ton mail a été envoyé");

}
else
{
    echo("ton mail n'a pas été envoyé");
}





   
    }
    
    
}
