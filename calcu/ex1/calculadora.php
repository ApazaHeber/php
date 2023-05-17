<?php

class Calculadora {
  private $numero1;
  private $numero2;

  public function __construct($numero1, $numero2) {
    $this->numero1 = $numero1;
    $this->numero2 = $numero2;
  }

  public function sumar() {
    return $this->numero1 + $this->numero2;
  }

  public function restar() {
    return $this->numero1 - $this->numero2;
  }

  public function multiplicar() {
    return $this->numero1 * $this->numero2;
  }

  public function dividir() {
    if ($this->numero2 != 0) {
      return $this->numero1 / $this->numero2;
    } else {
      return "Error: No es posible dividir entre cero.";
    }
  }

  public function raizCuadrada() {
    return sqrt($this->numero1);
  }

  public function potencia() {
    return pow($this->numero1, $this->numero2);
  }
}

// Verificar si se enviaron los datos del formulario
if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])) {
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];
  $operacion = $_POST['operacion'];

  // Crear objeto Calculadora y realizar la operación seleccionada
  $calculadora = new Calculadora($numero1, $numero2);

  $resultado = '';

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
    case 'raiz':
      $resultado = $calculadora->raizCuadrada();
      break;
    case 'potencia':
      $resultado = $calculadora->potencia();
      break;
    default:
      $resultado = "Operación inválida.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Resultado de la Calculadora</title>
</head>
<body>
  <h1>Resultado de la Calculadora</h1>
  <?php if (isset($resultado)): ?>
    <p>Resultado: <?php echo $resultado; ?></p>
  <?php endif; ?>
</body>
</html>

