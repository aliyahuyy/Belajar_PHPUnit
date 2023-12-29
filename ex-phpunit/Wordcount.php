<?php
// function menghitung jumlah kata
class Wordcount
{
    public function countWords($sentence)
    {
        return count(explode(" ",$sentence));
    }
}
?>