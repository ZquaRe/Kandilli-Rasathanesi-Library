<?php

// Gerekli sınıf dosyasını dahil ediyoruz
require_once 'src/class.earthquake.php';

// Earthquake sınıfından bir nesne oluşturuyoruz
$earthquake = new earthquake();

// getEarthquakeData metodu ile deprem verilerini çekiyor ve JSON formatından PHP array formatına dönüştürüyoruz
$data = json_decode($earthquake->getEarthquakeData());

// Dönen veri üzerinde dönerek her bir deprem kaydını ekrana yazdırıyoruz
foreach ($data as $record) {
    echo 'Date: ' . $record->Date . '<br>';
    echo 'Time: ' . $record->Time . '<br>';
    echo 'Latitude: ' . $record->Latitude . '<br>';
    echo 'Longitude: ' . $record->Longitude . '<br>';
    echo 'Depth: ' . $record->Depth . '<br>';
    echo 'Md: ' . $record->Md . '<br>';
    echo 'Ml: ' . $record->Ml . '<br>';
    echo 'Mw: ' . $record->Mw . '<br>';
    echo 'Location: ' . $record->Location . '<br>';
    echo 'Revize: ' . $record->Revize . '<br>';
    echo '<br/><br/>';
}


// Tüm veriyi bir kere daha ekrana yazdırıyoruz, bu sefer daha düzenli bir format ile

/*

echo '<pre>';
print_r($data);
echo '</pre>';

*/
?>
