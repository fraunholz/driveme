<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platooning_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM drag_reduction";
$result = $conn->query($sql);

/** Variables */

$VehicleMass = mysqli_real_escape_string($conn, $_POST["Mass"]);
echo $VehicleMass;
echo "<br>";
$VehicleVelocity = mysqli_real_escape_string($conn, $_POST["VehicleVelocity"]);
echo $VehicleVelocity;
echo "<br>";
$VehicleFrontArea = mysqli_real_escape_string($conn, $_POST["VehicleFrontArea"]);
echo $VehicleFrontArea;
echo "<br>";
$AutomobileDragCoefficient = mysqli_real_escape_string($conn, $_POST["Air-Drag-Coefficient"]);
echo $AutomobileDragCoefficient;
echo "<br>";
$distance = mysqli_real_escape_string($conn, $_POST["Distance"]);
echo $distance;
echo "<br>";
$Accelaration = 0;

$WindStrength = mysqli_real_escape_string($conn, $_POST["WindStrength"]);
$WindAngle = mysqli_real_escape_string($conn, $_POST["WindAngle"]);


/** Constants */

$RollingResistantCoefficient = 0.007;
$StandardGravity = 9.8;
$EnergyDensity = 36;
$EnergyEfficiency = 0.4;
$RoadGrade = 0;
$AirDensity =  1.29;



/** estimate AirDragReduction(from 3.2) */


if ($result->num_rows > 0) {
    // output data of each row
    /**
    while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " -distance: " . $row["distance"]. " reduction: " . $row["reduction"]. "<br>";
    }*/

    //$AirDragReduction = 0.7;
    $AirDragReductionRecord = mysqli_query($conn,  "SELECT reduction FROM drag_reduction WHERE distance = '$distance'");
    $row = mysqli_fetch_assoc($AirDragReductionRecord);
    $AirDragReduction = $row["reduction"];
    echo 'AirDragReduction = ';
    echo $AirDragReduction;
    echo "<br>";

} else {
    echo "0 results";
}
$conn->close();

/** add wind to Vehicle's Velocity */
$VehicleVelocity = $VehicleVelocity + ($AirDragReduction * cos($WindAngle) *$WindStrength);


/** calculate airDragCoefficient */

$AirDragCoefficient = 0.5 * $AirDensity * $VehicleFrontArea * $AutomobileDragCoefficient * (1 - $AirDragReduction) ;

/** calculate fuelConsumption (reduced) */
$cossin = $RollingResistantCoefficient*cos($RoadGrade)+sin($RoadGrade);
$Mgv = $VehicleMass*$StandardGravity*$VehicleVelocity;
$kv3 =  $AirDragCoefficient*$VehicleVelocity*$VehicleVelocity*$VehicleVelocity;
$Mav = $VehicleMass*$Accelaration * $VehicleVelocity;
$Hn = $EnergyDensity * $EnergyEfficiency;

$FuelConsumption = ($cossin*$Mgv+$kv3+$Mav)/$Hn;
echo 'FuelConsumption = ';
echo $FuelConsumption;
echo "<br>";


/** calculate fuelConsumption control (not reduced by platooning) */
$AirDragCoefficientControl = 0.5 * $AirDensity * $VehicleFrontArea * $AutomobileDragCoefficient ;
$kv3Control =  $AirDragCoefficientControl*$VehicleVelocity*$VehicleVelocity*$VehicleVelocity;
$FuelConsumptionControl = ($cossin*$Mgv+$kv3Control+$Mav)/$Hn;
echo 'FuelConsumptionControl = ';
echo $FuelConsumptionControl;
echo "<br>";

$FuelReductionRatio = ($FuelConsumptionControl-$FuelConsumption)/$FuelConsumptionControl;
echo 'FuelReductionRatio = ';
echo $FuelReductionRatio;


?>