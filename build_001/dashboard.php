<?php
session_start();
if(!isset($_SESSION['user'])){header("Location:index.php");exit;}
require_once 'classes/Elastic.php';
require_once 'config.php';
$config=require 'config.php';
$e=new Elastic($config['elastic']);
$info=$e->test();
?>
<!doctype html><html><head><meta charset="utf-8"><title>Dashboard</title></head>
<body>
<h2>Dashboard</h2>
<p>Usuario: <?=htmlspecialchars($_SESSION['user'])?></p>
<p>Estado: <?=htmlspecialchars($info['status'])?></p>
<p>Mensaje: <?=htmlspecialchars($info['message'])?></p>
<a href="logout.php">Salir</a>
</body></html>
