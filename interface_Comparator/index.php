<?php
include_once "cricle.php";
include_once "comparator.php";
include_once "cricleComparator.php";

$cricleOne = new Cricle(5);
$cricleTwo = new Cricle(10);
$cricleComparator = new CricleComparator();

echo $cricleComparator->compare($cricleOne,$cricleTwo);
