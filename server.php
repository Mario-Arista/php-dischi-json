<?php

// Includo il file JSON e decodifico il contenuto
$albums = json_decode(file_get_contents("./disks.json"));

// dichiaro che è un json
header("Content-Type: application/json");

// gestione 


// stampo in pagina
echo json_encode($albums);