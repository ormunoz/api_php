<?php
$arrayRutas = array_filter(explode("/", $_SERVER['REQUEST_URI']));

if (count($arrayRutas) == 2) {
    $json = array(
        "detalle" => "no encontrado"
    );
} elseif (count($arrayRutas) == 3) {
    $vista = $arrayRutas[3];

    if ($vista == "cursos") {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $cursos = new ControladorCursos();
            $cursos->create();
        } elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
            $cursos = new ControladorCursos();
            $json = $cursos->index();
        }
    } elseif ($vista == "registros") {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $clientes = new ControladorClientes();
            $clientes->create();
        } elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
            $cursos = new ControladorClientes();
            $cursos->index();
        }
    }
} else {
    if (array_filter($arrayRutas)[3] == "cursos" && is_numeric(array_filter($arrayRutas)[4])) {
        // peticion get
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $arrayRutas[4];
            $cursos = new ControladorCursos();
            $cursos->show($id);
        }
        // peticion put
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "PUT") {
            $id = $arrayRutas[4];
            $editarCursos = new ControladorCursos();
            $editarCursos->update($id );
        }
        // peticion delete
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "DELETE") {
            $id = $arrayRutas[4];
            $editarCursos = new ControladorCursos();
            $editarCursos->delete($id );
        }
    }
}

if (isset($json)) {
    echo json_encode($json, JSON_PRETTY_PRINT);
}
?>