<!DOCTYPE html >
<html>
<head>
<title> INFOHACKER!! </title> </head>

<body>
<h1> ACESSO A INFORMAÇÃO </h1>

<?php
 $servername="localhost";
 $username="id20529078_info";
 $password="Aa@06102005";
 $namedb="id20529078_agenda";


$conn= new mysqli($servername,$username,$password); $name db
if ($conn->connect_error); {
  die ("connection failed ". $ conn->connect_error);
}

echo "conectado ao db"
?>

<?php
$sql= "SELECT" nome, sobrenome, celular ne from alunos ;
$result=$conn->querry(sql);

if ($ result-> num_rows>0){
  while($row=$result->fetch_assoc()){
  
  echo"nome:."$row ["nome"].$row["sobrenome"]."celular".$row["celular"]". 
  <br>. }
  "ELSE"tabela vazia";}
  ?>
<?php
$conn-> close ()
?>
















  
                                  </body>
                                  </html>
