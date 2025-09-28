<?php

use NumberToWords\NumberToWords;

if (! function_exists('terbilang')) {
    function terbilang($number) {
        if (!is_numeric($number)) {
            return '';
        }

        $numberToWords = new NumberToWords();
        $numberTransformer = $numberToWords->getNumberTransformer('id');
        $text = $numberTransformer->toWords($number);

        return $text . ' rupiah';
    }
}