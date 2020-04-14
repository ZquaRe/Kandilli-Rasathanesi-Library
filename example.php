<?php
require_once 'src/class.earthquake.php';

$Example = new earthquake();

foreach (json_decode($Example->Earth()) as $Earth) {

    echo 'Date: '.$Earth->Date.'<br>';
    echo 'Time: '.$Earth->Time.'<br>';
    echo 'Latitude: '.$Earth->Latitude.'<br>';
    echo 'Longitude: '.$Earth->Longitude.'<br>';
    echo 'Depth: '.$Earth->Depth.'<br>';
    echo 'Md: '.$Earth->Md.'<br>';
    echo 'Ml: '.$Earth->Ml.'<br>';
    echo 'Mw: '.$Earth->Mw.'<br>';
    echo 'Location: '.$Earth->Location.'<br>';
    echo 'Revize: '.$Earth->Revize.'<br>';
    echo '<br/><br/>';
}


//Bütün verileri listeler
echo '<pre>';
print_r($Example->Earth());