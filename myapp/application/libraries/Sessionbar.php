
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessionbar {
    private $username;
    private $userid;

    public function __construct($params){
        $this->username = var_dump($params["username"]);
        $this->userid = var_dump($params["userid"]);
    }

    public function makeNav() {
        $nav = "<nav>";
        $nav .= "<h1>".$this->username."</h1>";
        $nav .= "<button>Cerrar sesión</button>";
        $nav .= "</nav>";

        return $nav;
    }
}

?>
