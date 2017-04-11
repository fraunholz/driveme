<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Drive me</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="javascript.js"></script>
</head>

<body>
<header>
<h1>Fuel Consumption Model</h1>
</header>

<form action="calculation.php" method="POST">
    <h2>Variables</h2>
    <p>Those variables affect fuel consumption and fuel reduction in platooning</p>
    <div class="form-group">
        <label for="Mass">Vehicle's mass</label>
        <input type="text" name="Mass" placeholder="10000" required>
    </div>

    <div class="form-group">
        <label for="Air-Drag-Coefficient">Vehicle's air-drag coefficient</label>
        <input type="text" name="Air-Drag-Coefficient" placeholder="0.6" required>
    </div>

    <div class="form-group">
        <label for="VehicleVelocity">Vehicle's velocity</label>
        <input type="text" name="VehicleVelocity" placeholder="30" required>
    </div>

    <div class="form-group">
        <label for="VehicleFrontArea">Vehicle's front area</label>
        <input type="text" name="VehicleFrontArea" placeholder="4" required>
    </div>

    <div class="form-group">
        <label for="Distance">Distance between vehicles</label>
        <input type="text" name="Distance" placeholder="20" required>
    </div>

    <div class="form-group">
        <label for="Distance">Wind Strength</label>
        <input type="text" name="WindStrength" placeholder="20" required>
    </div>

    <div class="form-group">
        <label for="Distance">Wind Angle</label>
        <input type="text" name="WindAngle" placeholder="20" required>
    </div>



    <h2 onclick="showAddidtionalVariables()">Additional Variables</h2>
    <div class="form-group additional-variable">
        <label for="VehicleFrontAreaxx">Latitude</label>
        <input type="text" name="AdditionalVariable1" placeholder="4">
    </div>

    <div class="form-group additional-variable">
        <label for="Distancexx">Longitude</label>
        <input type="text" name="AdditionalVariable1" placeholder="20">
    </div>

    <div class="form-group" id="calculate-button">
        <input type="submit" value="Calculate">
    </div>

</form>

</body>
</html>