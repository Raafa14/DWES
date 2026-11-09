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

    $combinacion[] = $serieFinal; 
    return $combinacion;

};

function imprimeApuesta($numsIntro, $texto) {
    $nSerie = null;
    echo "<table>";
        if (empty($texto)) {
            echo "<tr>";
                echo "Titulo Vacío";
            echo "</tr>";
        }   else {
            echo "<tr>";
                echo "$texto";
            echo "</tr>";
        };
        echo "<tr>";
            foreach (combinacion($numsIntro, $nSerie) as $nums) {
                echo "<td>";
                    echo "$nums";
                echo "</td>";
            }
        echo "</tr>";
    echo "</table>";
}

?>