
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// Tabla usuario
// | Campo    | Tipo de dato | Longitud | PK | Descripción          |
// |----------+--------------+----------+----+----------------------|
// | pk       | int          |          | si | Llave primaria       |
// | dni      | int          |          |    | CI del usuario       |
// | password | varchar      |       40 |    | Clave para ingresar  |
// | photo    | varchar      |      200 |    | Url de la fotografía |


class User extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function validate_password(){
        $query = $this->db->get('usuario');
        return $query;
    }


}
