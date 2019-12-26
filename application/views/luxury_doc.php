<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>reservation</title>
</head>
<body>
    
        <h1>Reservation Luxury</h1>
        <h3>place : <?= $type ?></h3>
        <p>reservation date : <?= $current ?> </p>
        <hr>
        <p class="phone"><?= $phone ?></p>
        <h2>Client infos</h2>
        <p><?= $name ?></p>
        <p><?= $email ?></p>
        <p class="n">Nationality:<?= $nationality ?></p>
        <br>
        <h2>travel infos</h2>
        <p>arrive : <?= $begin ?></p>
        <p>depart : <?= $end ?></p>
        <p>disability/accessibility requirement  : <?= $disability ?></p>
        <p >special food requirement  : <?= $food ?> </p>
        <p>anything else  : <?= $else ?></p>
        <div id="body">
            
        </div>
</body>
</html>
<style>
    body{
        font-family:'Arial'
    }
.n{
    position:absolute;
    top:230px;
    right:53px;
}
.phone{
    position:absolute;
    top:260px;
    right:53px; 
}
</style>