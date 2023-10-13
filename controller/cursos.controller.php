<?php

class ControladorCursos
{

    public function index()
    {
        $json = array(
            "detalle" => "estas en la vista cursos get "
        );

        if (isset($json)) {
            echo json_encode($json, JSON_PRETTY_PRINT);
        }
        return ;

    }

    public function create()
    {
        $json = array(
            "detalle" => "estas en la vista cursos post"
        );

        if (isset($json)) {
            echo json_encode($json, JSON_PRETTY_PRINT);
        }
        return ;

    }

    public function show($id)
    {
        $json = array(
            "detalle" => "estas en la vista cursos show " . $id
        );

        if (isset($json)) {
            echo json_encode($json, JSON_PRETTY_PRINT);
        }

        return ;
    }

    public function update($id )
    {
        $json = array(
            "detalle" => "estas en la vista cursos update ".$id 
        );

        if (isset($json)) {
            echo json_encode($json, JSON_PRETTY_PRINT);
        }

        return ;
    }

    public function delete($id )
    {
        $json = array(
            "detalle" => "estas en la vista cursos delete ".$id 
        );

        if (isset($json)) {
            echo json_encode($json, JSON_PRETTY_PRINT);
        }

        return ;
    }

}

?>