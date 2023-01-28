<?php
/* QUI PRENDO I DATI DEI DISCHI DA DATABASE, LI ELABORO/ENCODO */

require_once __DIR__ . '/../database/database.php';

header('Content-Type: application/json; charset=utf-8');

$disksFiltered = [];

if (empty($_GET['genre'])) {
    $disksFiltered = $disks;
} else {
    foreach($disks as $key => $value) {
        if ($_GET['genre'] === $value['genre'])
            $disksFiltered[] = $value;
    }

    if (empty($disksFiltered)) http_response_code(400);
}

echo json_encode($disksFiltered);