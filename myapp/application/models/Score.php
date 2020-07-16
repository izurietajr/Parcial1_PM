
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// Tabla notas
// | Campo   | Tipo de dato | Longitud | PK | Descripción              |
// |---------+--------------+----------+----+--------------------------|
// | pk      | int          |          | si | Llave primaria           |
// | user_pk | int          |          |    | Llave foránea de usuario |
// | matter  | varchar      |       50 |    | Materia                  |
// | score   | int          |          |    | Calificación             |


class Score extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function approved(){
        // select count(user_pk) from notes where score >= 51;
        $this->db->select('count(user_pk) as notas');
        $this->db->from('notas');
        $this->db->where('score >=', 51);
        //$this->db->group_by('', 51);
        return $this->db->get()->result();
    }
}
