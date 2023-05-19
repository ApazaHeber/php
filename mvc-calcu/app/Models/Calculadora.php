<?php

namespace App\Models;

class Calculadora
{
    private $numero1;
    private $numero2;

    public function __construct($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function sumar()
    {
        return $this->numero1 + $this->numero2;
    }

    public function restar()
    {
        return $this->numero1 - $this->numero2;
    }

    public function multiplicar()
    {
        return $this->numero1 * $this->numero2;
    }

    public function dividir()
    {
        if ($this->numero2 != 0) {
            return $this->numero1 / $this->numero2;
        } else {
            return "Error: No se puede dividir entre cero.";
        }
    }

    public function raizCuadrada()
    {
        return sqrt($this->numero1);
    }

    public function potencia()
    {
        return pow($this->numero1, $this->numero2);
    }

    public function calcularAreaTriangulo()
    {
        return ($this->numero1 * $this->numero2) / 2;
    }

    public function calcularAreaCuadrado()
    {
        return $this->numero1 * $this->numero1;
    }

    public function calcularAreaRectangulo()
    {
        return $this->numero1 * $this->numero2;
    }

    public function calcularAreaRombo()
    {
        return ($this->numero1 * $this->numero2) / 2;
    }

    public function calcularAreaPoligono()
    {
        return ($this->numero1 * $this->numero2) / 2;
    }

    public function calcularAreaCirculo()
    {
        return pi() * pow($this->numero1, 2);
    }
}

