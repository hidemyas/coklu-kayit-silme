<?php 
require_once "connect-db.php";


$secimler   =   $_POST['secim'];
$IDler      =   implode(',',$secimler);
$IDler      =   filtrele($IDler);
//echo $IDler;

$delete =   $db_connect->prepare('DELETE FROM kisiler WHERE id IN(?)');
$delete->execute([$IDler]);
header('Location: index.php');
exit();




