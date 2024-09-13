<?php

$call = $_GET['call'];

$anumber = $_GET['anumber'];
$bnumber = $_GET['bnumber'];

$call();

function add()
{
    $anumber = $_GET['anumber'];
    $bnumber = $_GET['bnumber'];
    echo $anumber + $bnumber;
}
function sub()
{
    $anumber = $_GET['anumber'];
    $bnumber = $_GET['bnumber'];
    echo $anumber - $bnumber;
}
function mul()
{
    $anumber = $_GET['anumber'];
    $bnumber = $_GET['bnumber'];
    echo $anumber * $bnumber;
}
function div()
{
    $anumber = $_GET['anumber'];
    $bnumber = $_GET['bnumber'];
    echo $anumber / $bnumber;
}
