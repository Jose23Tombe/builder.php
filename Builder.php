<?php

class Auto {
    private $marca;
    private $modelo;
    private $año;
    private $color;

    public function __construct($marca, $modelo, $año, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->color = $color;
    }

    public function __toString() {
        return "Auto: $this->marca $this->modelo ($this->año), Color: $this->color";
    }
}

class AutoBuilder {
    private $marca;
    private $modelo;
    private $año;
    private $color;

    public function setMarca($marca) {
        $this->marca = $marca;
        return $this;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }

    public function setAño($año) {
        $this->año = $año;
        return $this;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    public function build() {
        return new Auto($this->marca, $this->modelo, $this->año, $this->color);
    }
}

$auto1 = (new AutoBuilder())
    ->setMarca('Toyota')
    ->setModelo('TXL')
    ->setAño(2022)
    ->setColor('Rojo')
    ->build();

$auto2 = (new AutoBuilder())
    ->setMarca('Ford')
    ->setModelo('Ranger')
    ->setAño(2023)
    ->setColor('Negro')
    ->build();

echo $auto1 . "<br>";
echo $auto2 . "<br>"
?>
