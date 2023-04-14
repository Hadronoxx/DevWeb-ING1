<?php 
header('Content-Type: application/json; charset=utf-8');

session_start();

$fichier="skittles";

$html = file_get_contents($fichier.".php");
$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
$dom = new DOMDocument();
$dom->loadHTML($html);
$tables = $dom->getElementsByTagName('table');
$data = array();
foreach ($tables as $table) {
    if ($table->getAttribute('class') == 'Tableau') {
        $rows = $table->getElementsByTagName('tr');
        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            $rowData = array();
            foreach ($cols as $col) {
                $rowData[] = $col->nodeValue;
            }
            $data[] = $rowData;
        }
    }
}

print_r($data);

$json=json_encode($data);
file_put_contents($fichier.".json",$json,JSON_PRETTY_PRINT);

?>
