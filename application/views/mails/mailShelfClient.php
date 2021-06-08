<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Off The Shelf</title>
</head>

<body>
    <p>Hello,<br> Thank you for your enquiry and we would love to plan your holiday. </p>

    <p>Here is a quick recap of the trip you have chosen on our website</p>

    <div>Trip: <?= $tripName ?></div>
    <div>
        Beginning : <?= $arrival ?>
        <br>
        End : <?= $departure ?>
    </div>
    <div>Adults: <?= $nbAdults ?></div>
    <div>Children: <?= $nbChildren ?></div>
    <div>email: <?= $email ?></div>
    <div>phone: <?= $phone ?></div>

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