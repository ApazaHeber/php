<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculadora;

class CalculadoraController extends Controller
{
    public function index()
    {
        return view('calculadora');
    }

    public function calcular(Request $request)
    {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $operacion = $request->input('operacion');

        $calculadora = new Calculadora($numero1, $numero2);

        switch ($operacion) {
            case 'sumar':
                $resultado = $calculadora->sumar();
                break;
            case 'restar':
                $resultado = $calculadora->restar();
                break;
            case 'multiplicar':
                $resultado = $calculadora->multiplicar();
                break;
            case 'dividir':
                $resultado = $calculadora->dividir();
                break;
            case 'raizCuadrada':
                $resultado = $calculadora->raizCuadrada();
                break;
            case 'potencia':
                $resultado = $calculadora->potencia();
                break;
            case 'calcularAreaTriangulo':
                $resultado = $calculadora->calcularAreaTriangulo($numero1, $numero2);
                break;
            case 'calcularAreaCuadrado':
                $resultado = $calculadora->calcularAreaCuadrado($numero1);
                break;
            case 'calcularAreaRectangulo':
                $resultado = $calculadora->calcularAreaRectangulo($numero1, $numero2);
                break;
            case 'calcularAreaRombo':
                $resultado = $calculadora->calcularAreaRombo($numero1, $numero2);
                break;
            case 'calcularAreaPoligono':
                $resultado = $calculadora->calcularAreaPoligono($numero1, $numero2);
                break;
            case 'calcularAreaCirculo':
                $resultado = $calculadora->calcularAreaCirculo($numero1);
                break;
            default:
                $resultado = "Operación inválida";
                break;
        }

        return view('resultado', compact('resultado'));
    }
}

