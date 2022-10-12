<?php

/**
 * 
 */
class Modelo extends CI_Model
{

    public function getBoletos()
    {

        $query = $this->db->get('boletos2');
        return $query->result();
        //$this->db->li
        //$query = $this->db->get('vista_producto', 10, 1);
        //return $query->result_array();
    }


    function getBoletosById($Id)
    {
        $this->db->where('asiento_id', $Id);
        $query = $this->db->get('boletos2');

        return $query->result();
    }
    //Vuelos            ----------------------
    function getVuelos()
    {
        $query = $this->db->get('vuelos1');
        return $query->result();
    }
    //Pasajeros --------    ----------
    function getPasajeros()
    {
        $query = $this->db->get('pasajeros1');
        return $query->result();
    }
    //Personal              --- ------
    function getPersonalvuelo()
    {
        $query = $this->db->get('personalvuelo');
        return $query->result();
    }



    /*        Cambio de nombre           */
    function insertBoleto()
    {
        $fecha = date("Y-m-d", strtotime($_POST['fecha_compra']));

        $data = array(
            'aereolinea' => $_POST['aereolinea'],
            'fecha_compra' => $fecha,
            'asiento_id' => $_POST['asiento_id'],
            'registro' => $_POST['registro'],
            'fecha_salida' => $fecha,
            'precio' => $_POST['precio'],
            'origen' => $_POST['origen'],
            'destino' => $_POST['destino'],
            'fecha_llegada' => $fecha

        );

        $this->db->insert('ticket', $data);

        return TRUE;
    }


    function insertVuelos()
    {
        $fecha = date("Y-m-d", strtotime($_POST['fecha_compra']));

        $data = array(
            'piloto' => $_POST['piloto'],
            'ruta' => $_POST['ruta'],
            'origen' => $_POST['origen'],
            'destino' => $_POST['destino'],
            'fecha_salida' => $fecha,
            'fecha_llegada' => $fecha,
            'hora_salida' => $fecha,
            'hora_llegada' => $fecha,

            'avion_id' => $_POST['avion_id'],
            'vuelo_id' => $_POST['vuelo_id']
    
        );

        $this->db->insert('ticket', $data);

        return TRUE;
    }


}
/* consulta 1 */
 /* SELECT ticket.ticket_id, ticket.fecha_compra, ticket.fecha_salida, ticket.fecha_llegada 
FROM ticket
INNER JOIN ticket
ON ticket.ticket_id = aereolinea.id_ticket;  */
