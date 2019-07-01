<?php
$db = new PDO("mysql:host=localhost;dbname=uyeler;charset=utf8", "root", "");

    $ad=$_REQUEST['ad'];
    $soyad=$_REQUEST['soyad'];
    $dogum=$_REQUEST['dogum'];
    $mail=$_REQUEST['mail'];
    $tel=$_REQUEST['tel'];


    $ekle = $db->prepare("INSERT INTO kayit SET ad=?,soyad=?,dogum=?,mail=?,tel=?");
    $ekle->execute([$ad,$soyad,$dogum,$mail,$tel]);

    if ($ekle) 
    {
    echo "<script type='text/javascript'>alert('Kayıt işlemi başarılı ! ');</script>";
    }
    else 
    {
    echo "<script type='text/javascript'>alert('Hata oluştu.');</script>";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Refresh" content="3; URL=index.php">

    <link rel="stylesheet" href="style.css"/>
    <title>ParkNet Mülakat</title>
</head>
<body>
    
</body>
</html>




