<?php

include_once("inc/navdefiner.inc.php");

?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/header.inc.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>TackIt</title>
</head>
<body>
<?php include_once("inc/topnav.inc.php"); ?>

<section id="navSection" class="d-inline-block">
    <?php include_once("inc/nav.inc.php"); ?>

</section>



    <form class="new-project-form" action="" method="POST">
        <section class="project-details">
            <p>Project details</p>
            <input class="project-name" type="text" placeholder="project naam">
            <div class="project-dates">
                <div><label for="">startdatum project</label><input class="datepicker" type="date"></div>
                <div><label for="">einddatum project</label><input class="datepicker" type="date"></div>
            </div>
            <div class="new-project-form-field-file">
                <p>Plattegrond</p>
                <label for="form-file">Bestand kiezen <img src="" alt="U"></label>
                <input id="form-file" type="file">
            </div>
            <div class="new-project-form-field">
                <label for="Type">Type</label>
                <input type="text">
            </div>
            <div class="new-project-form-field">
                <label for="budget">Budget</label>
                <input type="text">
            </div>
            <div class="form-vereisten">
                <label for="">Vereisten</label>
                <div>
                    <p>Vereisten toevoegen</p>
                    <img src="" alt="U">
                </div>
            </div>
        </section>
        <section class="communicatie">
            <p>Communicatie</p>
            <div class="comm-form-split">
                <div class="project-dates">
                    <div><label for="">startdatum cocreatie</label><input class="datepicker" type="date"></div>
                    <div><label for="">startdatum cocreatie voting</label><input class="datepicker" type="date"></div>
                    <div><label for="">einddatum cocreatie voting</label><input class="datepicker" type="date"></div>
                </div>
                <div class="criteria">
                    <label for="">criteria participanten</label>
                    <input type="text">
                    <div class="add-criteria">
                        <img src="" alt="P">
                        <p> criteria toevoegen</p>
                    </div>
                </div>
            </div>
            <button class="form-c"><a href="Dashboard.php">annuleren</a></button>
            <button class="form-n" type="submit" action="submit">Volgende</button>
        </section>
    </form>

</body>
</html>