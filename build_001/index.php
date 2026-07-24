<?php
session_start();
if(isset($_SESSION['user'])){header("Location: dashboard.php");exit;}
?>
<!doctype html>
<html><head><meta charset="utf-8"><title>Elastic Export</title></head>
<body>
<h2>Elastic Export - Build 001</h2>
<form method="post" action="ajax/login.php">
Usuario: <input name="user"><br>
Contraseña: <input type="password" name="pass"><br>
<button>Entrar</button>
</form>
</body></html>
