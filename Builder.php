<?php
// Clase principal que representa el objeto a construir
class Auto {
    private $marca;
    private $modelo;
    private $año;
    private $color;

// Constructor que recibe los valores y los asigna a los atributos
    public function __construct($marca, $modelo, $año, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->color = $color;
    }

// Metodo magico que permite convertir el objeto en una cadena de texto
    public function __toString() {
        return "Auto: $this->marca $this->modelo ($this->año), Color: $this->color";
    }
}

// Clase Builder que ayuda a construir objetos Auto
class AutoBuilder {
    private $marca;
    private $modelo;
    private $año;
    private $color;

// Metodo para establecer la marca del auto
    public function setMarca($marca) {
        $this->marca = $marca;
        return $this;
    }

// Metodo para establecer el modelo del auto
    public function setModelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }

// Metodo para establecer el año del auto
    public function setAño($año) {
        $this->año = $año;
        return $this;
    }

// Metodo para establecer el color del auto  
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }
// Metodo que construye y devuelve un objeto Auto
    public function build() {
        return new Auto($this->marca, $this->modelo, $this->año, $this->color);
    }
}
// Uso del Builder para construir un auto
$auto1 = (new AutoBuilder())
    ->setMarca('Toyota')
    ->setModelo('TXL')
    ->setAño(2022)
    ->setColor('Rojo')
    ->build();

// Creacion de otro auto con valores diferentes
$auto2 = (new AutoBuilder())
    ->setMarca('Ford')
    ->setModelo('Ranger')
    ->setAño(2023)
    ->setColor('Beige')
    ->build();


//resultados
echo $auto1 . "<br>";
echo $auto2 . "<br>"
?>

