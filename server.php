<?php

// Includo il file JSON e decodifico il contenuto
$albums = json_decode(file_get_contents("../php-dischi-json/disks.json"));

// dichiaro che è un json
header("Content_Type: application/json");

// stampo
echo json_encode($albums);