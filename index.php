
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>ParkNet Mülakat</title>
</head>
<body>
    <form action="kayit.php"  method="POST">
    <div style="margin-left: 40%; width: 20%; margin-top: 5%; font-family: sans-serif;  position: absolute;">
        <h1 >Üye Kayıt Formu</h1>
    </div>
    <div class="ad">
        <i class="fas fa-user"></i>
        <input name="ad" type="text"   placeholder="Adınız" required>
       <button class="fas fa-arrow-down"> </button>
    </div>
    <div class="soyad innactive">
        <i class="fas fa-user"></i>
        <input name="soyad" type="text" value="" placeholder="Soyadınız" required>
        <button class="fas fa-arrow-down"> </button>
    </div>
    <div class="dogum innactive">
        <i class="fas fa-calendar-alt"></i>
        <input name="dogum" type="date" value="" width="100px"  max="<?php echo date('Y-m-d');?>" required>
        <button class="fas fa-arrow-down"> </button>
    </div>
    <div class="mail innactive">
        <i class="fas fa-envelope"></i>
        <input name="mail" type="email" placeholder="E-mailiniz" required>
        <button  class="fas fa-arrow-down"> </button>
    </div>
    <div class="tel innactive">
        <i class="fas fa-phone-alt"></i>
        <input name="tel" type="tel" placeholder="Telefonunuz(başında 0 olmadan girin)" required>
        <button class="fas fa-arrow-down"> </button>
          
    </div>
 
    </form>
    
    <script src="app.js"></script>
</body>
</html>