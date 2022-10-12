<?php

class Api extends CI_Controller
{


    function getAllBoletos()
    {
        header('Access-Control-Allow-Origin: *');

        $this->load->model('Modelo');
        $resultado = $this->Modelo->getBoletos();
        $json = json_encode($resultado, JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);

        echo $json;
    }

    function getBoleto($id)
    {
        header('Access-Control-Allow-Origin: *');
        $this->load->model('Modelo');
        $resultado = $this->Modelo->getBoletos();
        $json = json_encode($resultado, JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);

        echo $json;
    }


    function getAllVuelos()
    {
        header('Access-Control-Allow-Origin: *');

        $this->load->model('Modelo');
        $resultado = $this->Modelo->getVuelos();
        $json = json_encode($resultado, JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);

        echo $json;
    }

    function getAllPasajeros()
    {
        header('Access-Control-Allow-Origin: *');

        $this->load->model('Modelo');
        $resultado = $this->Modelo->getPasajeros();
        $json = json_encode($resultado, JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);

        echo $json;
    }

    function getAllPersonalvuelo()
    {
        header('Access-Control-Allow-Origin: *');

        $this->load->model('Modelo');
        $resultado = $this->Modelo->getPersonalvuelo();
        $json = json_encode($resultado, JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);

        echo $json;
    }

    function postBoletos()
    {
        Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
        Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
        Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');



        $_POST = json_decode(file_get_contents('php://input'), true);

        $this->load->model('Modelo');
        $resultado = $this->Modelo->insertBoleto();
        $json = json_encode($resultado, JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);

        echo $json;
    }


    function postVuelos()
    {
        Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
        Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
        Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');



        $_POST = json_decode(file_get_contents('php://input'), true);

        $this->load->model('Modelo');
        $resultado = $this->Modelo->insertVuelos();
        $json = json_encode($resultado, JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);

        echo $json;
    }

}
