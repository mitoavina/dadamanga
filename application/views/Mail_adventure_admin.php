<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>request for creating an adventure</title>
</head>

<body>
    <p>Hello admin,<br> <?=$name?> created a new adventure </p>

    <p>Here a quick recap of his request :

        <table>
            <?php if(isset($destination)) { ?>
            <td>
                <fieldset>
                    <legend> Destinations </legend>
                    <ul>
                        <?php foreach($destination as $d){ ?>
                        <li><?= $d ?></li>
                        <?php } ?>
                    </ul>
                </fieldset>
            </td>
            <?php } ?>
            <?php if(isset($park)) { ?>
            <td>
                <fieldset>
                    <legend> Parks </legend>
                    <ul>
                        <?php foreach($park as $d){ ?>
                        <li><?= $d ?></li>
                        <?php } ?>
                    </ul>
                </fieldset>
            </td>
            <?php } ?>
            <?php if(isset($experience)) { ?>
            <td>
                <fieldset>
                    <legend> Experiences </legend>
                    <ul>
                        <?php foreach($experience as $d){ ?>
                        <li><?= $d ?></li>
                        <?php } ?>
                    </ul>
                </fieldset>
            </td>
            <?php } ?>
            <?php if(isset($wildlife)) { ?>
            <td>
                <fieldset>
                    <legend> wildlifes </legend>
                    <ul>
                        <?php foreach($wildlife as $d){ ?>
                        <li><?= $d ?></li>
                        <?php } ?>
                    </ul>
                </fieldset>
            </td>
            <?php } ?>
        </table>
    </p>
    
        arrive : <?= $arrive ?><br>
        depart : <?= $depart ?>

    <section>
        find more information on the attached document
        <p></p>
    </section>
    <h4>email : <?= $email ?></h4>
    <h4>phone : <?= $phone ?></h4>

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