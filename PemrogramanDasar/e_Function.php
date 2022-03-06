<?php
    // Built-In, dan User-Defined

    $day = time() + (60*60*24*7);
    echo "Minggu depan yaitu hari ";
    echo date("l, d F Y  H:i:s", $day); echo "\n";

    // mktime(0,0,0,0,0,0); -> jam, menit, detik, bulan, tanggal, tahun
    echo "Lahir pada hari: ";
    echo date("l", mktime(0,0,0, 12, 14, 2001));

    echo "\n";

    // strtotime(DD MMM YYYY);
    echo "Lahir pada hari: ";
    echo date("l", strtotime("14 Dec 2001"));

    echo "\n\n";
    
    function volumeKubus($r) {
        return ($r * $r * $r);
    }
    function luasKubus($r) {
        return ($r * $r * 6);
    }

    $r = 5;
    echo "Volume kubus: " . volumeKubus($r) . " cm3\n";
    echo "Luas kubus: " . luasKubus($r) . " cm2\n\n";

    function salam($jam, $nama = "Admin") {

        if($jam >= 0 && $jam < 12) {
            $waktu = "Pagi";

        } else if($jam >= 12 && $jam < 15) {
            $waktu = "Siang";

        } else if($jam >= 15 && $jam < 18) {
            $waktu = "Sore";

        }else if($jam >= 18 && $jam < 24) {
            $waktu = "Malam";
        }

        return "Selamat " . $waktu . ", " . $nama;
    }

    echo salam(date("H"), "Asep");
?>