<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>reservation</title>
</head>

<body>

<p id="logo" ><img width="150" src="<?= base_url("assets/img/svg/logo.svg") ?>" alt="dadamanga"></p>
<h1 class="light" >Luxury Booking</h1>
<h3 class="light case"><?= $name ?></h3>
<h3 class="light">(<?= $current ?>)</h3>
<hr>
<h3>General informations</h3>
<p>Full name : <?= $name ?></p>
<p>Nationality: <?= $nationality ?></p>
<p>Date of travel: <br>
<p>arrive : <?= $begin ?></p>
<p>depart : <?= $end ?></p>
</p>
<p>Food requirements: <br>
<?= $food ?>
</p>
<p>Any disability / accessibility requirement? <br>
<?= $disability ?>
</p>
<h3>Property</h3>
<p><?= $type ?></p>
<h3>Comments</h3>
<p><?= $else ?></p>
</body>



</html>
<style>
body {
font-family: Helvetica, sans-serif;
position:relative;
}

#logo{
position: absolute;
right:30;
top:20px;
}
h3 {
color: rgb(99, 99, 99);
}

h1 {
color: rgb(22, 193, 236);
}
.light{
font-weight: 300;
}
.case{
text-transform: uppercase;
}

</style>