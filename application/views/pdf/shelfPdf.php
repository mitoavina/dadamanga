<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Off The Shelf Form</title>
</head>

<body>

    <p id="logo"><img width="150" src="<?= base_url("assets/img/svg/logo.svg") ?>" alt="dadamanga"></p>
    <h1 class="light">Off The Shelf Trip Form</h1>
    <h3 class="light"><?= $email ?> / <?= $phone ?></h3>
    <h3 class="light">(<?= $current ?>)</h3>
    <hr />
    <h3>General informations</h3>
    <p>Number of adults: <?= $nbAdults ?></p>
    <p>Number of children: <?= $nbChildren ?></p>
    <?php if (isset($nationality)) { ?>
        <p>Nationality : <?= $nationality ?> </p>
    <?php } else { ?>
        <p>Nationality : not communicated </p>
    <?php } ?>
    <p>Date of travel: <br />
        Arrival: <?= $arrival ?><br />
        Departure: <?= $departure ?>
        </Arrive:>
    <p>Food requirements:<br /> <?= $food ?> </p>
    <br />
    <h3>Travelers</h3>
    <table border=1>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Adult or Child</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($travelers as $traveler) { ?>
                <tr>
                    <td><?= $traveler->getFirstName() ?></td>
                    <td><?= $traveler->getLastName() ?></td>
                    <td><?= $traveler->getType() ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br />
    <h3>Travel Style </h3>
    <p>Partly-guided / Fully guided : <br />
        <?php if (isset($guided)) { ?>
    <p><?= $guided ?></p>
<?php } else { ?>
    <p>not communicated</p>
<?php } ?> </p>
<p>Can you manage long journey by road? : <br />
    <?= $journey ?>
</p>
<p>Any disability / accessibility requirement? : <br />
    <?= $access ?>
</p>
<p>Can you explain you level of fitness? : <br />
    <?= $fitness ?>
</p>
<br />
<h3>Comments</h3>
<p><?= $other ?></p>

</body>
<style>
    body {
        font-family: Helvetica, sans-serif;
        position: relative;
    }

    #logo {
        /* float:left; */
        position: absolute;
        right: 30;
        top: 20px;
        /* right: 53px; */
    }

    h3 {
        color: rgb(99, 99, 99);
    }

    h1 {
        color: rgb(22, 193, 236);
    }

    .light {
        font-weight: 300;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td {
        text-align: left;
        padding: 5px 5px;
    }

    .case {
        text-transform: uppercase;
    }
</style>

</html>