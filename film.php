<?php

require_once  __DIR__."/Cinema.php";

$cinema = new Cinema();

if(isset($_POST["genre"])) {
    $cinema->genre($_POST["genre"]);
} elseif(isset($_POST["actor"])) {
    $cinema->actor($_POST["actor"]);
} elseif (isset($_POST["start"])) {
    $cinema->datePeriod($_POST["start"], $_POST["end"]);
}