<?php

// Includo il file JSON e decodifico il contenuto
$albums = json_decode(file_get_contents("./disks.json"));

// gestione 
if (isset($_GET['discIndex']) && $_GET['discIndex'] != "") {

    // Mi salvo il parametro del API se richiesto
    $disc_index = $_GET['discIndex'];

    // prendo solo l'album dall'array che corrisponde all'indice ricevuto
    $selected_album = $albums[$disc_index];

    // converto album in json
    $album_json = json_encode($selected_album);

    // // dichiaro che è un json
    header("Content-Type: application/json");

    echo $album_json;

} else {
    
    // dichiaro che è un json
    header("Content-Type: application/json");

    // stampo in pagina
    echo json_encode($albums);
}

