<?php


class CricleComparator implements Comparator
{
    public function compare($cricleOne, $cricleTwo)
    {
        $radiusOne = $cricleOne->getRadius();
        $radiusTwo = $cricleTwo->getRadius();
        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}