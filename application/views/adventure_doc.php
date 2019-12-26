<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>reservation</title>
</head>

<body>
    <h1>dadamanga</h1>
    <table width="100%" border="1">
        <tr>
            <td>Full Name: <?= $name ?></td>
            <td>
                <p>N° of Adults in party: <?= $noAdult ?></p> <br>
                <p>N° of Children in party / ages: <?= $noChildAges ?></p>
                <?php if(isset($room)){ ?>
                <p>Room configuration required: <?= $room ?></p>
                <?php } else{?>
                    <p>Room configuration required: none</p>  
                <?php }?>
            </td>
        </tr>
        <tr class="blue">
        <?php if(isset($nationality)){ ?>
            <td>Nationality / Country of Residence: <?= $nationality ?> </td>
        <?php } else{?>
            <td>Nationality / Country of Residence: not communicated </td> 
        <?php }?>
        <td>Verifiable Phone Number: <?= $phone ?></td>
        </tr>
        <tr class="blue">
            <td>Approximate (or better still actual) dates of travel: Please provide flight numbers if you have them already. Actual arrival and departure dates can affect final price and itinerary.</td>
            <td>

                <p>Arrive: <?= $arrive ?></p>
                <p>Depart: <?= $depart ?></p>
            </td>
        </tr>
        <tr>
            <td><br></td>
            <td><br></td>
        </tr>
        <tr>
            <td>Style of travel in terms of comfort: Please choose as many as are appropriate</td>
            <td>Adventure / physical / budget / mid-range / luxury / beach / wildlife / culture history / nightlife</td>
        </tr>
        <tr class="blue">
            <td>Any comment on travel style?</td>
            <td></td>
        </tr>
        <tr class="blue">
            <td>Partly-guided (only using guides where essential or obligatory) or fully guided (a guide with you for the entire trip)?</td>
            <?php if(isset($guided)){ ?>
                <td><?= $guided ?></td>                
                <?php } else{?>
                <td>not communicated</td>     
            <?php }?>
        </tr>
        <tr class="blue">
            <td>Any special food requirements:</td>
            <td><?= $food ?></td>
        </tr>
        <tr>
            <td>Can you manage long journeys (+4 hours) by road? Please note that travelling by road in Madagascar can mean driving for more than 10 hours between some locations.</td>
            <td><?= $journey ?></td>
        </tr>
        
        <tr class="blue">
            <td> Some tours and in particular park visits may require good levels of
            fitness such as hiking up hills or walking for 2 to 3 hours. Can you please explain your level of fitness in your own words?</td>
            <td><?= $fitness ?></td>
        </tr>
        <tr>
            <td> Do you have any disability or accessibility requirements that we should know of when planning your itinerary?</td>
            <td><?= $access ?></td>
        </tr>
        <tr>
            <td> Anything else you
want to tell us? <br><br>If you have a strict budget limit, it can really help us to have an idea of your maximum budget and any other information that might enable us to get your itinerary as close to perfect as early in the process as possible. It saves time
for all of us.</td>
            <td><?= $other ?></td>
        </tr>
    </table>
</body>
<style>
    body{
        font-size: 8px !important;
        font-family: Arial, Helvetica, sans-serif;
    }

    table {
    border-collapse: collapse;
      width: 100% ;
    }
    td {
      padding : 5px 5px;
      width:50%;
    }
    .blue{
        background-color:Lavender ;
    }
</style>

</html>



