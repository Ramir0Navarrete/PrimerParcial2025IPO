<?php 
include_once "Aerolineas.php";
include_once "Vuelo.php";
include_once "Persona2.php";
include_once "Aeropuerto.php";

// Objetos aerolineas
$aerolinea1 = new Aerolineas("ARG001", "Aerolíneas Argentinas", []);
$aerolinea2 = new Aerolineas("LATAM002", "LATAM", []);

// objetos persona
$comandante1 = new Persona("Ramiro", "Navarrete", "Luis Beltran 251", "rami@mail.com", 299604683);
$comandante2 = new Persona("Laura", "Morales", "Av. Argentina 1350", "lau_rita@mail.com", 299345029);

// objetos vuelo
$vuelo1 = new Vuelo("V001", 55000, "2025-05-01", "Madrid", "15:00", "10:00", 180, 60, $comandante1);
$vuelo2 = new Vuelo("V002", 58000, "2025-05-01", "Barcelona", "17:00", "12:00", 150, 5, $comandante1);
$vuelo3 = new Vuelo("V003", 69000, "2025-05-01", "Londres", "20:00", "14:30", 200, 75, $comandante2);
$vuelo4 = new Vuelo("V004", 70000, "2025-05-02", "París", "18:00", "13:00", 100, 15, $comandante2);

//  arreglo con las aerolíneas
$coleccAerolineas = [$aerolinea1, $aerolinea2];

// Crear aeropuerto
$aeropuerto = new Aeropuerto("Aeropuerto Internacional Buenos Vuelos", "Félix San Martin 2540", $coleccAerolineas);

// Prueba de venta automática de pasajes
$cantAsientos = 3;
$fechaVenta = date("d/m/Y");
$destinoVenta = "Villa La Angostura, Neuquén";

$vueloAsignado = $aeropuerto->ventaAutomatica($cantAsientos, $fechaVenta, $destinoVenta);

if ($vueloAsignado != null) {
    echo "Se concretó la venta automática:\n";
    echo $vueloAsignado;
} else {
    echo "No fue posible concretar la venta automática.\n";
}

// Calcular y mostrar el promedio recaudado por una aerolínea
$idAerolinea = "V001"; 
$promedioRecaudado = $aeropuerto->promedioRecaudadoXAerolinea($idAerolinea);

echo "Promedio recaudado por la aerolínea con ID $idAerolinea: \$$promedioRecaudado\n";


