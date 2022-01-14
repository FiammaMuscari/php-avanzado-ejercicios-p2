<?php
class Usuarios{
    private $nombre;
    private $apellido;
    private $edad;

    function __construct ($nom, $ape, $edad) {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->edad = $edad;
    }
    public function imprime_caracteristicas(){
        echo"<p style=text-transform:capitalize><b>Nombre: </b>".$this->nombre."</p>";
        echo"<p style=text-transform:capitalize><b>Apellido: </b>".$this->apellido."</p>";
        echo"<p style=text-transform:capitalize><b>Edad: </b>".$this->edad."</p>";
    }
}
?>