<?php 

class ControladorClientes
{
    public function index()
    {
        $json = array(
            "detalle" => "estas en la vista registro de clientes get "
        );

        echo json_encode($json, JSON_PRETTY_PRINT);
        return;
    }

    public function create()
    {
        $json = array(
            "detalle" => "estas en la vista registro de clientes post"
        );

        echo json_encode($json, JSON_PRETTY_PRINT);
        return;
    }
}
?>