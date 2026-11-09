<?php 
require_once __DIR__ . "/index.php";

function combinacion($numsIntro, $nSerie) {

    $combinacion = [];

    foreach ($numsIntro as $nums) {
        if (!empty($nums) && !in_array((int)$nums, $combinacion)) {
            $combinacion[] = (int)$nums;
        }
    };

    while (count($combinacion) < 6) {
        $numRandom = rand(1, 49);
        if (!in_array($numRandom, $combinacion)) {
            $combinacion[] = (int)$numRandom; 
        }
    };

    sort($combinacion);

    if (empty($nSerie)) {
        $serieFinal = (int)rand(1, 999);
    } else {
        $serieFinal = (int)$nSerie;
    };

    $combinacion[] = $serieFinal; // Añadimos la serie como la posición 7
    return $combinacion;

};

?>