<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

# ch = curl handle
$ch = curl_init(API_URL);

# Evita que PHP imprima los datos proporcionados
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

# Guarda los datos en un array
$data = json_decode($result, true);
curl_close($ch);
