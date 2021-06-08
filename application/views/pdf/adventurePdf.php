<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>reservation</title>
</head>

<body>

    <p id="logo"><img width="150" src="<?= base_url("assets/img/svg/logo.svg") ?>" alt="dadamanga"></p>
    <h1 class="light">Registration Form</h1>
    <h3 class="light case"><?= $name ?></h3>
    <h3 class="light">(<?= $current ?>)</h3>
    <hr/>
    <h3>General informations</h3>
    <p>Full name: <?= $name ?></p>
    <p>Number of Adults: <?= $noAdult ?></p>
    <p>Number of Children / ages: <?= $noChildAges ?></p>
    <?php if(isset($room)){ ?>
    <p>Room configuration : <?= $room ?></p>
    <?php } else{?>
    <p>Room configuration : none</p>  
    <?php }?>
    <?php if(isset($nationality)){ ?>
    <p>Nationality : <?= $nationality ?> </p>
    <?php } else{?>
    <p>Nationality : not communicated </p> 
    <?php }?>
    <p>Date of travel: <br/>
        Arrive: <?= $arrive ?><br/>
        Depart: <?= $depart ?>
    </Arrive:>
    <p>Food requirements:<br/> <?= $food ?> </p>
    <br/>
    <h3>Must-see</h3>
    <table border=1>
        <tr>
            <td>Destinations</td>
            <td>Parks</td>
            <td>Experiences</td>
            <td>Wildlife</td>
        </tr>
        <tr>
            <td>
                <?php if(isset($destination)) { ?>
               
                    <ul>
                        <?php foreach($destination as $d){ ?>
                        <li><?= $d ?></li>
                        <?php } ?>
                    </ul>
            
                    <?php } ?>
            </td>
            <td>
                <?php if(isset($park)) { ?>
                
                    <ul>
                        <?php foreach($park as $d){ ?>
                        <li><?= $d ?></li>
                        <?php } ?>
                    </ul>
                
                    <?php } ?>
            </td>
            <td>
                <?php if(isset($experience)) { ?>
                
                    <ul>
                        <?php foreach($experience as $d){ ?>
                        <li><?= $d ?></li>
                        <?php } ?>
                    </ul>
                
                <?php } ?>
            </td>
            <td>
                <?php if(isset($wildlife)) { ?>
                
                    <ul>
                        <?php foreach($wildlife as $d){ ?>
                        <li><?= $d ?></li>
                        <?php } ?>
                    </ul>
                
                <?php } ?>
            </td>
        </tr>
    </table>
    <br/>
    <h3>Travel Style </h3>
    <p>Partly-guided / Fully guided : <br/>  
    <?php if(isset($guided)){ ?>
        <p><?= $guided ?></p>                
        <?php } else{?>
        <p>not communicated</p>     
    <?php }?> </p>
    <p>Can you manage long journey by road? : <br/>
    <?= $journey ?>
    </p>
    <p>Any disability / accessibility requirement? : <br/>
    <?= $access ?>
    </p>
    <p>Can you explain you level of fitness? <br/>
    <?= $fitness ?>
    </p>
    <br/>
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
    .case{
        text-transform: uppercase;
    }
</style>
</html>