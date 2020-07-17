
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

        // $this->db->select('count(user_pk) as notas');
        // $this->db->from('notas');
        // $this->db->where('score >=', 51);

        $this->db->select('i.residence, count(i.residence) as aprobados');
        $this->db->from('notas n');
        $this->db->join('identificador i', 'i.user_pk = n.user_pk');
        $this->db->where('n.score >=', 51);
        $this->db->group_by('i.residence');

        return $this->db->get()->result();
    }
}
