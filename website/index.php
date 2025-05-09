<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Wetterstation</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      width: 100%;
      font-family: Arial, sans-serif;
    }

    .grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: 1fr 1fr;
      width: 100vw;
      height: 100vh;
    }

    .box {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2vw;
      border: 1px solid #ccc;
      background-color: white;
    }

    #humidity { background-color: #d9f2ff; } /* Luftfeuchtigkeit */
    #temp { background-color: #ffe6e6; } /* Temperatur */
    #windspeed { background-color: #e6ffe6; } /* Windgeschwindigkeit */
    #co2 { background-color: #f9f9cc; } /* CO2 */
  </style>
</head>
<body>
  <div class="grid">
    <div class="box" id="humidity">Luftfeuchtigkeit</div>
    <div class="box" id="temp">Temperatur</div>
    <div class="box" id="windspeed">Windgeschwindigkeit</div>
    <div class="box" id="co2">CO₂</div>
  </div>

  <!-- <script>
    // Beispiel: Texte dynamisch ändern
    document.getElementById("feld1").textContent = "Luftfeuchtigkeit: 45%";
    document.getElementById("feld2").textContent = "Temperatur: 22°C";
    document.getElementById("feld3").textContent = "Windgeschwindigkeit: 12 km/h";
    document.getElementById("feld4").textContent = "LuftqualitätCO₂: 410 ppm";
  </script> -->
</body>
</html>
