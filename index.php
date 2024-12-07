<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVALUACIÓN 3</title>
    <!-- Ruta relativa para el CSS -->
    <link rel="stylesheet" href="css/ProblemaStem.css">
    <!-- Fuente Comfortaa desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Stem PHP</h1>
        </header>
        <section id="contenedor">

            <section class="problema">
                <h2>Un colector solar plano tiene una superficie de 4 m². Debe calentar
                    agua para uso doméstico. Sabiendo que el coeficiente de radiación solar K = 0.9cal/min·cm²
                    y que el consumo de agua es constante, a razón de 6 litros/min, determina el aumento de temperatura del agua 
                    si está funcionando durante 2 horas. Se supone que inicialmente el agua está a 18 °C y que no hay pérdidas de calor
                </h2>
            </section>
  
            <section class="formulas">
                <h2>Fórmulas</h2>
                <p>Q = \( K \cdot t \cdot s \cdot r \) en Kcal</p>
                <p>Convertir a Kwh (base 1h): \( Q / 860 \)</p>
            </section>
         
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>Q = Energía generada</li>
                    <li>t = Tiempo en minutos</li>
                    <li>s = Área en cm²</li>
                    <li>r = Rendimiento</li>
                    <li>K = Coeficiente de radiación</li>
                </ul>
            </section>
     
            <section class="calculos">
                <h2>Solución</h2>
               <p>Q = K * t * s = 0.9 cal/min·cm² * 120 min * 4 * 10⁴ cm² = 4.32 * 10⁶ = 4320 Kcal</p>
               <p>Consume agua a razón de 6 L/min. En dos horas, el consumo de agua será:</p>
               <p>2h * (60 min/1h) \* (6 L/1 min) * (1 kg/1 L) = 720 kg</p>
               <p>Q = ( m cdot c cdot T ) = ( 720 cdot 10³ g cdot 1cal g·°C cdot (T₁ - 18) )</p>
               <p>4320 * 10³ cal = ( 720 cdot 10³  g cdot 1 , cal g·°C cdot (T₁ - 18) )</p>
               <p>( T₁ = 4320 cdot 10³ 720 cdot 10³ + 18 = 6 + 18 = 24 °C )</p>
            </section>

            <?php
            function calcular($k, $t, $s) {
            $Q=$k * $t * $s; 
             return $Q; 
            }

            function calcularTemperaturaFinal($Q, $m, $c, $T0) {
                $T1=($Q / ($m * $c)) + $T0; 
                return $T1; 
            }

            $k = 0.9; 
            $t = 120; 
            $s = 4 * pow(10, 4); 
            $m = 720 * pow(10, 3); 
            $c = 1;
            $T0 = 18; 
            $Q = calcular($k, $t, $s); 
            $T1 = calcularTemperaturaFinal($Q, $m, $c, $T0);

            ?>


            <section class="resultado">
                <h2>Resultado</h2>
                <?php
                print "<h1> resultado: El calor transferido es " .calcularTemperaturaFinal($Q, $m, $c, $T0). " °C</h1>"
                ?>
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 4.0 SciSoft 2024 <br>
            Alexis Yamil De la cruz Flores
        </footer>
    </section>
</body>
</html>
