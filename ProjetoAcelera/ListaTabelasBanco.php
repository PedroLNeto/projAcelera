<?php
$database=$_POST["database"];
$root=$_POST["user"];
$password=$_POST["password"];

$conn = new PDO('mysql:host=localhost;dbname='.$database.';',$root,$password);

/*<------ Fim conexão banco ----->*/

/*$result_msg="INSERT INTO mensagem (mensagem) VALUES('funciona')";
$query =$conn->prepare($result_msg);


$query->execute();*/

$dados=$conn->query("SHOW TABLES");

        foreach($dados as $linha){
            echo $linha[0]."<br>";
        }
?>