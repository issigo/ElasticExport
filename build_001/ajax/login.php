<?php
session_start();
if(($_POST['user']??'')==='admin' && ($_POST['pass']??'')==='admin123'){
 $_SESSION['user']='admin';
 header('Location: ../dashboard.php');
}else{
 echo 'Credenciales incorrectas. <a href="../index.php">Regresar</a>';
}
