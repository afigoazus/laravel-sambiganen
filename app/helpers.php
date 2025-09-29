<?php

if (! function_exists('terbilang')) {

    /**
     * Fungsi pembantu untuk menerjemahkan angka 0-999 menjadi kata.
     */
    function konversiTigaAngka($angka) {
        $angka = intval($angka);
        $kata = [
            '', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas'
        ];
        $terbilang = '';

        if ($angka < 12) {
            $terbilang = ' ' . $kata[$angka];
        } elseif ($angka < 20) {
            $terbilang = konversiTigaAngka($angka - 10) . ' belas';
        } elseif ($angka < 100) {
            $terbilang = konversiTigaAngka($angka / 10) . ' puluh' . konversiTigaAngka($angka % 10);
        } elseif ($angka < 200) {
            $terbilang = ' seratus' . konversiTigaAngka($angka - 100);
        } elseif ($angka < 1000) {
            $terbilang = konversiTigaAngka($angka / 100) . ' ratus' . konversiTigaAngka($angka % 100);
        }
        
        return $terbilang;
    }

    /**
     * Fungsi utama untuk mengubah angka menjadi format terbilang.
     */
    function terbilang($angka) {
        if (!is_numeric($angka)) {
            return '';
        }

        $angka = intval($angka);
        
        if ($angka < 0) {
            $hasil = 'minus ' . trim(terbilang(abs($angka)));
        } else {
            $level_kata = ['', 'ribu', 'juta', 'miliar', 'triliun'];
            $hasil = '';
            $level = 0;
            
            if ($angka == 0) {
                return 'nol';
            }

            while ($angka > 0) {
                $sisa = $angka % 1000;
                if ($sisa > 0) {
                    $terbilang_sisa = ($sisa == 1 && $level == 1) ? ' seribu' : konversiTigaAngka($sisa);
                    $hasil = $terbilang_sisa . ' ' . $level_kata[$level] . ' ' . $hasil;
                }
                $angka = intval($angka / 1000);
                $level++;
            }
            $hasil = trim($hasil);
        }

        return ucwords($hasil) . ' Rupiah';
    }
}