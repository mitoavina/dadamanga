<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>reservation</title>
</head>

<body>
    <p>Hello <?= $name ?>,<br> Thank you for your enquiry and we would love to plan your holiday. </p>

    <p>you reserved for : <?= $type ?></p>

    <p>
        Beginning : <?= $begin ?>
        <br>
        End : <?= $end ?>
    </p>

    <section>We would like in an attempt to manage expectations to let you know that at present, after receiving your form, it may take us up to 72 hours (three working days - so not including weekends) to respond, or a little longer in times of peak demand, so
        the sooner you register with us, the sooner we will be able to respond.
        <p>Best wishes and looking forward to being of assistance.</p>
    </section>
    <h4>Dadamanga Team</h4>

</body>

</html>
<style>
    body {
        margin-left: 100px;
        margin-right: 100px;
        font-family: 'Arial'
    }
    
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    td {
        text-align: left;
        padding: 5px 5px;
    }
</style>