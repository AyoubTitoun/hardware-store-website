<?php
$con = mysqli_connect('localhost', 'root', '','clientsbdd');
$txtName = $_POST['Nom'];
$txtPrenom = $_POST['Prenom'];
$txtMdps = $_POST['Mdps'];
$txtMdps1 = $_POST['Mdps1'];
$txtEmail = $_POST['Email'];
$txtPhone = $_POST['Telph'];
if( $txtName=='' || $txtPrenom=='' ||$txtMdps=='' || $txtEmail=='' || $txtPhone=='' )
{
    echo" un champ ou plus ne sont pas remplir";
}
else 
{
if ($txtMdps!=$txtMdps1)
{
  echo"mot de passe n'est pas identique ";
}
else
{
$sql = "INSERT INTO `users` (`Email`, `Nom`, `Prenom`, `Phone`, `opassword`) VALUES ('$txtEmail','$txtName','$txtPrenom','$txtPhone', '$txtMdps')";
$rs = mysqli_query($con, $sql);
if($rs) 
{
    echo"done!";
}
}
}



    

?>