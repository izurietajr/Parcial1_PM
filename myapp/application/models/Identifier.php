
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// Tabla identificador
// | Campo      | Tipo de dato | Longitud | PK | Descripción                    |
// |------------+--------------+----------+----+--------------------------------|
// | pk         | int          |          | si | Llave primaria                 |
// | user_pk    | int          |          |    | Llave foránea de usuario       |
// | dni        | int          |       20 |    | CI del usuario                 |
// | first_name | varchar      |      100 |    | Nombres                        |
// | last_name  | varchar      |      100 |    | Apellidos                      |
// | birth_date | date         |          |    | Fecha de nacimiento            |
// | residence  | varchar      |       10 |    | Código del lugar de residencia |


class Identifier extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function get_user_data($userid){
        $query = $this->db->get_where('identificador', array('user_pk' => $userid));
        return $query;
    }

}
