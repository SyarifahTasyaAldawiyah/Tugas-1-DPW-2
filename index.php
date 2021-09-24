<?php


class animal {
    public $jumlah_kaki, $bisa_terbang;
}

class kambing extends animal 
{
    function bersuara ()
    {
        return "mmbeeeek";
    }
}

class bebek extends animal 
{
    function bersuara ()
    {
        return "kwekk kwekk kwekk";
    }
}

class kucing extends animal 
{
    function bersuara ()
    {
        return "mmiiiaawww";
    }
}

class srigala extends animal 
{
    function bersuara ()
    {
        return "auuuuuuuuuugg";
    }
}

// kambing
$Cika = new kambing;
$Cika->jumlah_kaki = 4;
$Cika->bisa_terbang = "Tidak Bisa Terbang";

echo "Cika Adalah kambing <br>";
echo "Punya Kaki Sebanyak: " . $Cika->jumlah_kaki . "<br>";
echo $Cika->bisa_terbang . "<br>";
echo "Suaranya: " . $Cika->bersuara() . "<br>";


echo "<hr>";

// bebek
$Ara = new bebek;
$Ara->jumlah_kaki = 2;
$Ara->bisa_terbang = "bisa terbang";

echo "Ara Adalah bebek <br>";
echo "Punya Kaki Sebanyak: " . $Ara->jumlah_kaki . "<br>";
echo $Ara->bisa_terbang . "<br>";
echo "Suaranya: " . $Ara->bersuara() . "<br>";

echo "<hr>";

// kucing
$Kiki = new kucing;
$Kiki->jumlah_kaki = 4;
$Kiki->bisa_terbang = "Tidak Bisa Terbang";

echo "Kiki Adalah kucing <br>";
echo "Punya Kaki Sebanyak: " . $Kiki->jumlah_kaki . "<br>";
echo $Kiki->bisa_terbang . "<br>";
echo "Suaranya: " . $Kiki->bersuara() . "<br>";

echo "<hr>";

// srigala
$Teguh = new srigala;
$Teguh->jumlah_kaki = 4;
$Teguh->bisa_terbang = "tidak bisa terbang";

echo "Teguh Adalah srigala <br>";
echo "Punya Kaki Sebanyak:4 " . $Teguh->jumlah_kaki . "<br>";
echo $Teguh->bisa_terbang . "<br>";
echo "Suaranya: " . $Teguh->bersuara() . "<br>";

echo "<hr>";

 

