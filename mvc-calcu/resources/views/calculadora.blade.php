<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="POST" action="/calculadora/calcular">
        @csrf
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required><br><br>

        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
            <option value="raizCuadrada">Raíz Cuadrada</option>
            <option value="potencia">Potencia</option>
            <option value="calcularAreaTriangulo">Calcular Área Triángulo</option>
            <option value="calcularAreaCuadrado">Calcular Área Cuadrado</option>
            <option value="calcularAreaRectangulo">Calcular Área Rectángulo</option>
            <option value="calcularAreaRombo">Calcular Área Rombo</option>
            <option value="calcularAreaPoligono">Calcular Área Polígono</option>
            <option value="calcularAreaCirculo">Calcular Área Círculo</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>

