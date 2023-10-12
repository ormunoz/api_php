<?php
$arrayRutas = array_filter(explode("/", $_SERVER['REQUEST_URI']));
if (count($arrayRutas) == 2) {
    $json = array(
        "detalle" => "no encontrado"
    );
} elseif (count($arrayRutas) == 3) {
    $vista = $arrayRutas[3];

    if ($vista == "cursos") {
        $json = array(
            "detalle" => "estas en la vista cursos"
        );
    } elseif ($vista == "registro") {
        $json = array(
            "detalle" => "estas en la vista registro"
        );
    }
}

if (isset($json)) {
    echo json_encode($json, JSON_PRETTY_PRINT);
}
?>