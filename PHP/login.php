<?php
$con = mysqli_connect('localhost', 'root', '','clientsbdd');
$txtEmail = $_POST['email'];
$txtMdps = $_POST['mdps'];

if($txtEmail!='' &&  $txtMdps!='')
{
$sql = "SELECT count(*) FROM `users` where 
`Email` = '".$txtEmail."' and `opassword` = '".$txtMdps."' ";
$rs = mysqli_query($con, $sql);
$reponse= mysqli_fetch_array($rs);
$count = $reponse['count(*)'];

if($count!=0)
{
    $_SESSION['Email'] = $txtEmail;
    header('Location: ../html/produit.html');
}
else {
    echo"erreur dans les coordonees";
}
}
else {
    echo"vous devez remplir les champs";
}

