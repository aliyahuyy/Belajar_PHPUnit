<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Aritmatika.php";

// Class untuk run Testing.
class testAritmatika extends TestCase
{
    public function testAritmatika()
    {
        // pakai class yang mau kita test.
        $hasil = new Aritmatika();

        // masukan parameter angka serta operator, yang harusnya dapat output 33.
        $angka1 = 99; 
        $angka2 = 3;
        $Aritmatika = $hasil->hitung($angka1, $angka2, '/');

        // Kita assert equal, ekspektasi nya harus 33, jika benar berarti Aritmatika berfungsi dengan baik.
        // $this->assertEquals(3, $Aritmatika); //contoh test salah
        $this->assertEquals(33, $Aritmatika); //contoh test benar
    }
}

?>