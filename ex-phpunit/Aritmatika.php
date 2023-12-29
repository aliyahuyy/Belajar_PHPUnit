<?php
class Aritmatika
{
    function hitung($angka1, $angka2, $operator) {
        switch ($operator) {
            case '+':
                return $angka1 + $angka2;
            case '-':
                return $angka1 - $angka2;
            case '*':
                return $angka1 * $angka2;
            case '/':
                // Memastikan tidak terjadi pembagian oleh nol
                if ($angka2 != 0) {
                    return $angka1 / $angka2;
                } else {
                    return "Error: Pembagian oleh nol tidak dapat dilakukan.";
                }
            default:
                return "Error: Operator tidak valid.";
        };
    }
}
?>