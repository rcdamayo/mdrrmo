<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disaster Ready: Weather & Climate</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/weather.css">
  <link rel="icon" href="images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav" id="myTopnav">
  <img src="images/icon.png">
    <div class="topcont">
      <div class="p1">Republic of the Philippines</div>
      <div class="p2">Municipality of Barugo</div>
      <div class="p3">MDRRMO</div>
    </div>
    <a href="login.php" style="width: 70px; padding-left: 2%;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path>
      </svg>
      <br>Login
    </a>

    <!-- <a href="reports.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M88,112a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H96A8,8,0,0,1,88,112Zm8,40h80a8,8,0,0,0,0-16H96a8,8,0,0,0,0,16ZM232,64V184a24,24,0,0,1-24,24H32A24,24,0,0,1,8,184.11V88a8,8,0,0,1,16,0v96a8,8,0,0,0,16,0V64A16,16,0,0,1,56,48H216A16,16,0,0,1,232,64Zm-16,0H56V184a23.84,23.84,0,0,1-1.37,8H208a8,8,0,0,0,8-8Z"></path>
        </svg>
        <br>Reports
      </div>
    </a> -->

    <a href="map.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M228.92,49.69a8,8,0,0,0-6.86-1.45L160.93,63.52,99.58,32.84a8,8,0,0,0-5.52-.6l-64,16A8,8,0,0,0,24,56V200a8,8,0,0,0,9.94,7.76l61.13-15.28,61.35,30.68A8.15,8.15,0,0,0,160,224a8,8,0,0,0,1.94-.24l64-16A8,8,0,0,0,232,200V56A8,8,0,0,0,228.92,49.69ZM104,52.94l48,24V203.06l-48-24ZM40,62.25l48-12v127.5l-48,12Zm176,131.5-48,12V78.25l48-12Z"></path>
        </svg>
        <br>Map
      </div>
    </a>

    <a href="population.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
        </svg>
        <br>Population
      </div>
    </a>

    <a href="about.php">About</a>
    <a href="typhoon.php">Typhoon</a>
    <a href="flood.php">Flood</a>
    <a href="weather.php" class="active">Weather</a>
    <a href="index.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
  <div class="division">
    <div class="header2">
      Today
    </div>

    <?php
    // Fetch current weather data
    $apiKey = 'ac61a2a4ee180f84e878fa11d084815d';
    $city = 'Barugo, Leyte';
    $currentWeatherUrl = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";
    $currentData = file_get_contents($currentWeatherUrl);
    $currentWeather = json_decode($currentData);

    // Fetch forecast data
    $forecastUrl = "https://api.openweathermap.org/data/2.5/forecast?q=$city&appid=$apiKey";
    $forecastData = file_get_contents($forecastUrl);
    $forecast = json_decode($forecastData);

    $rainChance = isset($currentWeather->weather[0]->main) && $currentWeather->weather[0]->main === 'Rain' ? 100 : 0;
    ?>

    <div class="weather-today">
      <?php
      if ($currentWeather) {
        $temperature = round($currentWeather->main->temp - 273.15);
        $description = $currentWeather->weather[0]->description;

        // Get SVG path based on weather description
        $svgPath = '';
          if (strpos($description, 'thunderstorm') !== false) {
            $svgPath = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64">
            <defs>
              <linearGradient id="a" x1="22.56" y1="21.96" x2="39.2" y2="50.8" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#f3f7fe"/>
                <stop offset="0.45" stop-color="#b8d2ff"/>
                <stop offset="1" stop-color="#535d70"/>
              </linearGradient>
              <linearGradient id="b" x1="22.53" y1="42.95" x2="25.47" y2="48.05" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#4286ee"/>
                <stop offset="0.45" stop-color="#b8d2ff"/>
                <stop offset="1" stop-color="#0950bc"/>
              </linearGradient>
              <linearGradient id="c" x1="29.53" y1="42.95" x2="32.47" y2="48.05" xlink:href="#b"/>
              <linearGradient id="d" x1="36.53" y1="42.95" x2="39.47" y2="48.05" xlink:href="#b"/>
              <linearGradient id="e" x1="26.74" y1="37.88" x2="35.76" y2="53.52" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#f7b23b"/>
                <stop offset="0.45" stop-color="#f7b23b"/>
                <stop offset="1" stop-color="#f59e0b"/>
              </linearGradient>
            </defs>
            <path d="M46.5,31.5l-.32,0a10.49,10.49,0,0,0-19.11-8,7,7,0,0,0-10.57,6,7.21,7.21,0,0,0,.1,1.14A7.5,7.5,0,0,0,18,45.5a4.19,4.19,0,0,0,.5,0v0h28a7,7,0,0,0,0-14Z" stroke="#e6effc" stroke-miterlimit="10" stroke-width="0.5" fill="url(#a)"/>
            <line x1="24.39" y1="43.03" x2="23.61" y2="47.97" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="url(#b)">
              <animateTransform attributeName="transform" type="translate" values="1 -5; -2 10" dur="0.7s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0;1;1;0" dur="0.7s" repeatCount="indefinite"/>
            </line>
            <line x1="31.39" y1="43.03" x2="30.61" y2="47.97" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="url(#c)">
              <animateTransform attributeName="transform" begin="-0.4s" type="translate" values="1 -5; -2 10" dur="0.7s" repeatCount="indefinite"/>
              <animate attributeName="opacity" begin="-0.4s" values="0;1;1;0" dur="0.7s" repeatCount="indefinite"/>
            </line>
            <line x1="38.39" y1="43.03" x2="37.61" y2="47.97" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="url(#d)">
              <animateTransform attributeName="transform" begin="-0.2s" type="translate" values="1 -5; -2 10" dur="0.7s" repeatCount="indefinite"/>
              <animate attributeName="opacity" begin="-0.2s" values="0;1;1;0" dur="0.7s" repeatCount="indefinite"/>
            </line>
            <polygon points="30 36 26 48 30 48 28 58 38 44 32 44 36 36 30 36" stroke="#f6a823" stroke-miterlimit="10" stroke-width="0.5" fill="url(#e)">
              <animate attributeName="opacity" values="1; 1; 1; 1; 1; 1; 0.1; 1; 0.1; 1; 1; 0.1; 1; 0.1; 1" dur="2s" repeatCount="indefinite"/>
            </polygon>
          </svg>
          ';
          } elseif (strpos($description, 'drizzle') !== false) {
            $svgPath = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64">
            <defs>
              <linearGradient id="a" x1="22.56" y1="21.96" x2="39.2" y2="50.8" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#f3f7fe"/>
                <stop offset="0.45" stop-color="#b8d2ff"/>
                <stop offset="1" stop-color="#b8d2ff"/>
              </linearGradient>
              <linearGradient id="b" x1="23.31" y1="44.3" x2="24.69" y2="46.7" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#4286ee"/>
                <stop offset="0.45" stop-color="#4286ee"/>
                <stop offset="1" stop-color="#0950bc"/>
              </linearGradient>
              <linearGradient id="c" x1="30.31" y1="44.3" x2="31.69" y2="46.7" xlink:href="#b"/>
              <linearGradient id="d" x1="37.31" y1="44.3" x2="38.69" y2="46.7" xlink:href="#b"/>
            </defs>
            <path d="M46.5,31.5l-.32,0a10.49,10.49,0,0,0-19.11-8,7,7,0,0,0-10.57,6,7.21,7.21,0,0,0,.1,1.14A7.5,7.5,0,0,0,18,45.5a4.19,4.19,0,0,0,.5,0v0h28a7,7,0,0,0,0-14Z" stroke="#e6effc" stroke-miterlimit="10" stroke-width="0.5" fill="url(#a)"/>
            <line x1="24.08" y1="45.01" x2="23.92" y2="45.99" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="url(#c)">
              <animateTransform attributeName="transform" type="translate" values="1 -5; -2 10" dur="1.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0;1;1;0" dur="1.5s" repeatCount="indefinite"/>
            </line>
            <line x1="31.08" y1="45.01" x2="30.92" y2="45.99" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="url(#d)">
              <animateTransform attributeName="transform" type="translate" begin="-0.5s" values="1 -5; -2 10" dur="1.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" begin="-0.5s" values="0;1;1;0" dur="1.5s" repeatCount="indefinite"/>
            </line>
            <line x1="38.08" y1="45.01" x2="37.92" y2="45.99" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="url(#e)">
              <animateTransform attributeName="transform" type="translate" begin="-1s" values="1 -5; -2 10" dur="1.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" begin="-1s" values="0;1;1;0" dur="1.5s" repeatCount="indefinite"/>
            </line>
          </svg>
          ';
          } elseif (strpos($description, 'rain') !== false) {
            $svgPath = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64">
            <defs>
              <linearGradient id="a" x1="22.56" y1="21.96" x2="39.2" y2="50.8" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#b8d2ff"/>
                <stop offset="0.45" stop-color="#b8d2ff"/>
                <stop offset="1" stop-color="#93a0b8"/>
              </linearGradient>
              <linearGradient id="b" x1="22.53" y1="42.95" x2="25.47" y2="48.05" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#4286ee"/>
                <stop offset="0.45" stop-color="#4286ee"/>
                <stop offset="1" stop-color="#0950bc"/>
              </linearGradient>
              <linearGradient id="c" x1="29.53" y1="42.95" x2="32.47" y2="48.05" xlink:href="#b"/>
              <linearGradient id="d" x1="36.53" y1="42.95" x2="39.47" y2="48.05" xlink:href="#b"/>
            </defs>
            <path d="M46.5,31.5l-.32,0a10.49,10.49,0,0,0-19.11-8,7,7,0,0,0-10.57,6,7.21,7.21,0,0,0,.1,1.14A7.5,7.5,0,0,0,18,45.5a4.19,4.19,0,0,0,.5,0v0h28a7,7,0,0,0,0-14Z" stroke="#e6effc" stroke-miterlimit="10" stroke-width="0.5" fill="url(#a)"/>
            <line x1="24.39" y1="43.03" x2="23.61" y2="47.97" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="url(#b)">
              <animateTransform attributeName="transform" type="translate" values="1 -5; -2 10" dur="0.7s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0;1;1;0" dur="0.7s" repeatCount="indefinite"/>
            </line>
            <line x1="31.39" y1="43.03" x2="30.61" y2="47.97" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="url(#c)">
              <animateTransform attributeName="transform" begin="-0.4s" type="translate" values="1 -5; -2 10" dur="0.7s" repeatCount="indefinite"/>
              <animate attributeName="opacity" begin="-0.4s" values="0;1;1;0" dur="0.7s" repeatCount="indefinite"/>
            </line>
            <line x1="38.39" y1="43.03" x2="37.61" y2="47.97" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="url(#d)">
              <animateTransform attributeName="transform" begin="-0.2s" type="translate" values="1 -5; -2 10" dur="0.7s" repeatCount="indefinite"/>
              <animate attributeName="opacity" begin="-0.2s" values="0;1;1;0" dur="0.7s" repeatCount="indefinite"/>
            </line>
          </svg>
          ';
          } elseif (strpos($description, 'clear sky') !== false) {
            $svgPath = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
            <defs>
              <linearGradient id="a" x1="26.75" y1="22.91" x2="37.25" y2="41.09" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#fbbf24"/>
                <stop offset="0.45" stop-color="#fbbf24"/>
                <stop offset="1" stop-color="#f59e0b"/>
              </linearGradient>
            </defs>
            <circle cx="32" cy="32" r="10.5" stroke="#f8af18" stroke-miterlimit="10" stroke-width="0.5" fill="url(#a)"/>
            <path d="M32,15.71V9.5m0,45V48.29M43.52,20.48l4.39-4.39M16.09,47.91l4.39-4.39m0-23-4.39-4.39M47.91,47.91l-4.39-4.39M15.71,32H9.5m45,0H48.29" fill="none" stroke="#fbbf24" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3">
              <animateTransform attributeName="transform" dur="45s" values="0 32 32; 360 32 32" repeatCount="indefinite" type="rotate"/>
            </path>
          </svg>
          ';
          } elseif (strpos($description, 'broken clouds') !== false) {
            $svgPath = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
            <defs>
              <linearGradient id="a" x1="16.5" y1="19.67" x2="21.5" y2="28.33" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#fbbf24"/>
                <stop offset="0.45" stop-color="#fbbf24"/>
                <stop offset="1" stop-color="#f59e0b"/>
              </linearGradient>
              <linearGradient id="b" x1="22.56" y1="21.96" x2="39.2" y2="50.8" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#f3f7fe"/>
                <stop offset="0.45" stop-color="#b8d2ff"/>
                <stop offset="1" stop-color="#b8d2ff"/>
              </linearGradient>
            </defs>
            <circle cx="19" cy="24" r="5" stroke="#f8af18" stroke-miterlimit="10" stroke-width="0.5" fill="url(#a)"/>
            <path d="M19,15.67V12.5m0,23V32.33m5.89-14.22,2.24-2.24M10.87,32.13l2.24-2.24m0-11.78-2.24-2.24M27.13,32.13l-2.24-2.24M7.5,24h3.17M30.5,24H27.33" fill="none" stroke="#fbbf24" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2">
              <animateTransform attributeName="transform" type="rotate" values="0 19 24; 360 19 24" dur="45s" repeatCount="indefinite"/>
            </path>
            <path d="M46.5,31.5l-.32,0a10.49,10.49,0,0,0-19.11-8,7,7,0,0,0-10.57,6,7.21,7.21,0,0,0,.1,1.14A7.5,7.5,0,0,0,18,45.5a4.19,4.19,0,0,0,.5,0v0h28a7,7,0,0,0,0-14Z" stroke="#e6effc" stroke-miterlimit="10" stroke-width="0.5" fill="url(#b)"/>
          </svg>
          ';
        } elseif (strpos($description, 'scattered clouds') !== false || strpos($description, 'few clouds') !== false) {
            $svgPath = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
            <defs>
              <linearGradient id="a" x1="16.5" y1="19.67" x2="21.5" y2="28.33" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#fbbf24"/>
                <stop offset="0.45" stop-color="#fbbf24"/>
                <stop offset="1" stop-color="#f59e0b"/>
              </linearGradient>
              <linearGradient id="b" x1="22.56" y1="21.96" x2="39.2" y2="50.8" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#f3f7fe"/>
                <stop offset="0.45" stop-color="#f3f7fe"/>
                <stop offset="1" stop-color="#b8d2ff"/>
              </linearGradient>
            </defs>
            <circle cx="19" cy="24" r="5" stroke="#f8af18" stroke-miterlimit="10" stroke-width="0.5" fill="url(#a)"/>
            <path d="M19,15.67V12.5m0,23V32.33m5.89-14.22,2.24-2.24M10.87,32.13l2.24-2.24m0-11.78-2.24-2.24M27.13,32.13l-2.24-2.24M7.5,24h3.17M30.5,24H27.33" fill="none" stroke="#fbbf24" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2">
              <animateTransform attributeName="transform" type="rotate" values="0 19 24; 360 19 24" dur="45s" repeatCount="indefinite"/>
            </path>
            <path d="M46.5,31.5l-.32,0a10.49,10.49,0,0,0-19.11-8,7,7,0,0,0-10.57,6,7.21,7.21,0,0,0,.1,1.14A7.5,7.5,0,0,0,18,45.5a4.19,4.19,0,0,0,.5,0v0h28a7,7,0,0,0,0-14Z" stroke="#e6effc" stroke-miterlimit="10" stroke-width="0.5" fill="url(#b)"/>
          </svg>
          ';
          } elseif (strpos($description, 'overcast clouds') !== false) {
            $svgPath = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
            <defs>
              <linearGradient id="a" x1="40.76" y1="23" x2="50.83" y2="40.46" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#9ca3af"/>
                <stop offset="0.45" stop-color="#9ca3af"/>
                <stop offset="1" stop-color="#6b7280"/>
              </linearGradient>
              <linearGradient id="b" x1="22.56" y1="21.96" x2="39.2" y2="50.8" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#f3f7fe"/>
                <stop offset="0.45" stop-color="#b8d2ff"/>
                <stop offset="1" stop-color="#b8d2ff"/>
              </linearGradient>
            </defs>
            <path d="M34.23,33.45a4.05,4.05,0,0,0,4.05,4H54.79a4.34,4.34,0,0,0,.81-8.61,3.52,3.52,0,0,0,.06-.66,4.06,4.06,0,0,0-6.13-3.48,6.08,6.08,0,0,0-11.25,3.19,6.34,6.34,0,0,0,.18,1.46h-.18A4.05,4.05,0,0,0,34.23,33.45Z" stroke="#848b98" stroke-miterlimit="10" stroke-width="0.5" fill="url(#a)">
              <animateTransform attributeName="transform" type="translate" values="-2.1 0; 2.1 0; -2.1 0" dur="7s" repeatCount="indefinite"/>
            </path>
            <path d="M46.5,31.5l-.32,0a10.49,10.49,0,0,0-19.11-8,7,7,0,0,0-10.57,6,7.21,7.21,0,0,0,.1,1.14A7.5,7.5,0,0,0,18,45.5a4.19,4.19,0,0,0,.5,0v0h28a7,7,0,0,0,0-14Z" stroke="#e6effc" stroke-miterlimit="10" stroke-width="0.5" fill="url(#b)">
              <animateTransform attributeName="transform" type="translate" values="-3 0; 3 0; -3 0" dur="7s" repeatCount="indefinite"/>
            </path>
          </svg>
          ';
          } elseif (strpos($description, 'cloudy') !== false) {
            $svgPath = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
            <defs>
              <linearGradient id="a" x1="22.56" y1="21.96" x2="39.2" y2="50.8" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#f3f7fe"/>
                <stop offset="0.45" stop-color="#b8d2ff"/>
                <stop offset="1" stop-color="#b8d2ff"/>
              </linearGradient>
            </defs>
            <path d="M46.5,31.5l-.32,0a10.49,10.49,0,0,0-19.11-8,7,7,0,0,0-10.57,6,7.21,7.21,0,0,0,.1,1.14A7.5,7.5,0,0,0,18,45.5a4.19,4.19,0,0,0,.5,0v0h28a7,7,0,0,0,0-14Z" stroke="#e6effc" stroke-miterlimit="10" stroke-width="0.5" fill="url(#a)">
              <animateTransform attributeName="transform" type="translate" values="-3 0; 3 0; -3 0" dur="7s" repeatCount="indefinite"/>
            </path>
          </svg>
          ';
          } else {
            $svgPath = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
            <path d="M26.1,24.08a.83.83,0,0,1,.16.56V38.12a.59.59,0,0,1-.72.71h-1.2a.75.75,0,0,1-.69-.35l-5.14-7.6a11.62,11.62,0,0,1-.85-1.5c-.28-.57-.49-1.05-.64-1.43s-.23-.59-.23-.6h-.13s0,.23.12.66.15,1,.23,1.64a18,18,0,0,1,.11,1.88v6.59a.77.77,0,0,1-.16.56.79.79,0,0,1-.55.15H15.3a.85.85,0,0,1-.57-.15.76.76,0,0,1-.17-.56V24.64a.78.78,0,0,1,.17-.56.85.85,0,0,1,.57-.15h1.19a.81.81,0,0,1,.7.33l5.1,7.56a13,13,0,0,1,.89,1.56c.27.55.48,1,.63,1.41s.23.59.24.6h.13s0-.25-.12-.67-.15-1-.23-1.63a16.11,16.11,0,0,1-.11-1.94V24.64a.83.83,0,0,1,.15-.56.82.82,0,0,1,.56-.15h1.11A.82.82,0,0,1,26.1,24.08Z" fill="#374151"/>
            <path d="M30.47,40a1,1,0,0,1-.54.12H28.76c-.24,0-.4-.05-.46-.14a.43.43,0,0,1,0-.44l5.58-15a1.16,1.16,0,0,1,.33-.46.94.94,0,0,1,.53-.12H36c.24,0,.39.05.45.14a.5.5,0,0,1,0,.44l-5.59,15A1.06,1.06,0,0,1,30.47,40Z" fill="#374151"/>
            <path d="M48.89,38.83H47.8a2.4,2.4,0,0,1-.91-.12.78.78,0,0,1-.39-.51l-1-2.7H39.74l-1,2.7a.78.78,0,0,1-.39.51,2.4,2.4,0,0,1-.91.12h-1q-.73,0-.48-.69l5.25-13.65a1.07,1.07,0,0,1,.33-.47,1,1,0,0,1,.55-.11h1.11a1.06,1.06,0,0,1,.57.11.9.9,0,0,1,.32.45l5.24,13.67Q49.63,38.83,48.89,38.83Zm-6-11.13c-.09-.43-.14-.76-.17-1l0-.36h-.15a7.73,7.73,0,0,1-.46,2.54l-1.62,4.45H44.8L43.2,28.9A10,10,0,0,1,42.89,27.7Z" fill="#374151"/>
          </svg>
          ';
          } 
          ?>
      <div class="weather-image">
        <?php echo $svgPath; ?>
      </div>
      
      <div class="w-today-cont">
        <p class="weather-temp"><?php echo $temperature; ?> °C</p>
        <p class="weather-desc"><?php echo $description; ?></p>
        <p id="current-day"></p><p class="current-dt">,</p> <p id="current-time"></p>
        <p class="weather-city"><?php echo $city; ?></p>
      </div>
      <?php
      } else {
        echo "<p>Weather data not available</p>";
      }
      ?>
    </div>

  </div>

  <div class="division">
    <div class="wc-h">
      <p>Week</p>
    </div>

    <div class="weather-forecast">
    <?php
    if ($forecast) {
      $dailyForecasts = $forecast->list;

      // Get the current date
      $currentDate = null;
      $skipCurrentDay = true; // Skip the current day's forecast
      $daysCount = 0; // Counter for the number of displayed forecast days
    
      // Display forecast for the next 7 days
      foreach ($dailyForecasts as $forecast) {
        $forecastDateTime = new DateTime($forecast->dt_txt);
        $date = $forecastDateTime->format('Y-m-d');

        // Check if the forecast date is the current day
        if ($skipCurrentDay) {
          if ($date !== date('Y-m-d')) {
            $skipCurrentDay = false;
          } else {
            continue; // Skip the current day's forecast
          }
        }

        // Filter and display one forecast per day
        if ($date !== $currentDate && $daysCount < 6) {
          $dayOfWeek = $forecastDateTime->format('D'); // Get the first 3 letters of the day
          $forecastTemperature = round($forecast->main->temp - 273.15);
          $forecastDescription = $forecast->weather[0]->description;
          $forecastIcon = $forecast->weather[0]->icon;
        

          $svgPath2 = '';
            if (strpos($forecastDescription, 'thunderstorm') !== false) {
              $svgPath2 = '<?xml version="1.0" encoding="utf-8"?>
              <!-- (c) ammap.com | SVG weather icons -->
              <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="64"
                  height="64"
                  viewbox="0 0 64 64">
                  <defs>
                      <filter id="blur" width="200%" height="200%">
                          <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                          <feOffset dx="0" dy="4" result="offsetblur"/>
                          <feComponentTransfer>
                              <feFuncA type="linear" slope="0.05"/>
                          </feComponentTransfer>
                          <feMerge> 
                              <feMergeNode/>
                              <feMergeNode in="SourceGraphic"/> 
                          </feMerge>
                      </filter>
                      <style type="text/css"><![CDATA[
              /*
              ** CLOUDS
              */
              @keyframes am-weather-cloud-1 {
                0% {
                  -webkit-transform: translate(-5px,0px);
                    -moz-transform: translate(-5px,0px);
                      -ms-transform: translate(-5px,0px);
                          transform: translate(-5px,0px);
                }
              
                50% {
                  -webkit-transform: translate(10px,0px);
                    -moz-transform: translate(10px,0px);
                      -ms-transform: translate(10px,0px);
                          transform: translate(10px,0px);
                }
              
                100% {
                  -webkit-transform: translate(-5px,0px);
                    -moz-transform: translate(-5px,0px);
                      -ms-transform: translate(-5px,0px);
                          transform: translate(-5px,0px);
                }
              }
              
              .am-weather-cloud-1 {
                -webkit-animation-name: am-weather-cloud-1;
                  -moz-animation-name: am-weather-cloud-1;
                        animation-name: am-weather-cloud-1;
                -webkit-animation-duration: 7s;
                  -moz-animation-duration: 7s;
                        animation-duration: 7s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              @keyframes am-weather-cloud-2 {
                0% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              
                50% {
                  -webkit-transform: translate(2px,0px);
                    -moz-transform: translate(2px,0px);
                      -ms-transform: translate(2px,0px);
                          transform: translate(2px,0px);
                }
              
                100% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              }
              
              .am-weather-cloud-2 {
                -webkit-animation-name: am-weather-cloud-2;
                  -moz-animation-name: am-weather-cloud-2;
                        animation-name: am-weather-cloud-2;
                -webkit-animation-duration: 3s;
                  -moz-animation-duration: 3s;
                        animation-duration: 3s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              /*
              ** STROKE
              */
              @keyframes am-weather-stroke {
                0% {
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              
                2% {
                  -webkit-transform: translate(0.3px,0.0px);
                    -moz-transform: translate(0.3px,0.0px);
                      -ms-transform: translate(0.3px,0.0px);
                          transform: translate(0.3px,0.0px);
                }
              
                4% {
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              
                6% {
                  -webkit-transform: translate(0.5px,0.4px);
                    -moz-transform: translate(0.5px,0.4px);
                      -ms-transform: translate(0.5px,0.4px);
                          transform: translate(0.5px,0.4px);
                }
              
                8% {
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              
                10% {
                  -webkit-transform: translate(0.3px,0.0px);
                    -moz-transform: translate(0.3px,0.0px);
                      -ms-transform: translate(0.3px,0.0px);
                          transform: translate(0.3px,0.0px);
                }
              
                12% {
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              
                14% {
                  -webkit-transform: translate(0.3px,0.0px);
                    -moz-transform: translate(0.3px,0.0px);
                      -ms-transform: translate(0.3px,0.0px);
                          transform: translate(0.3px,0.0px);
                }
              
                16% {
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              
                18% {
                  -webkit-transform: translate(0.3px,0.0px);
                    -moz-transform: translate(0.3px,0.0px);
                      -ms-transform: translate(0.3px,0.0px);
                          transform: translate(0.3px,0.0px);
                }
              
                20% {
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              
                22% {
                  -webkit-transform: translate(1px,0.0px);
                    -moz-transform: translate(1px,0.0px);
                      -ms-transform: translate(1px,0.0px);
                          transform: translate(1px,0.0px);
                }
              
                24% {
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              
                26% {
                  -webkit-transform: translate(-1px,0.0px);
                    -moz-transform: translate(-1px,0.0px);
                      -ms-transform: translate(-1px,0.0px);
                          transform: translate(-1px,0.0px);
              
                }
              
                28% {
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              
                40% {
                  fill: orange;
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              
                65% {
                  fill: white;
                  -webkit-transform: translate(-1px,5.0px);
                    -moz-transform: translate(-1px,5.0px);
                      -ms-transform: translate(-1px,5.0px);
                          transform: translate(-1px,5.0px);
                }
                61% {
                  fill: orange;
                }
              
                100% {
                  -webkit-transform: translate(0.0px,0.0px);
                    -moz-transform: translate(0.0px,0.0px);
                      -ms-transform: translate(0.0px,0.0px);
                          transform: translate(0.0px,0.0px);
                }
              }
              
              .am-weather-stroke {
                -webkit-animation-name: am-weather-stroke;
                  -moz-animation-name: am-weather-stroke;
                        animation-name: am-weather-stroke;
                -webkit-animation-duration: 1.11s;
                  -moz-animation-duration: 1.11s;
                        animation-duration: 1.11s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
                      ]]></style>
                  </defs>
                  <g filter="url(#blur)" id="thunder">
                      <g transform="translate(20,10)">
                          <g class="am-weather-cloud-1">
                              <path d="M47.7,35.4     c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3     c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#91C0F8" stroke="white" stroke-linejoin="round" stroke-width="1.2" transform="translate(-10,-6), scale(0.6)" />
                          </g>
                          <g>
                              <path d="M47.7,35.4     c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3     c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#57A0EE" stroke="white" stroke-linejoin="round" stroke-width="1.2" transform="translate(-20,-11)" />
                          </g>
                          <g transform="translate(-9,28), scale(1.2)">
                              <polygon class="am-weather-stroke" fill="orange" stroke="white" stroke-width="1" points="14.3,-2.9 20.5,-2.9 16.4,4.3 20.3,4.3 11.5,14.6 14.9,6.9 11.1,6.9" />
                          </g>
                      </g>
                  </g>
              </svg>';
            } elseif (strpos($forecastDescription, 'drizzle') !== false) {
              $svgPath2 = '<?xml version="1.0" encoding="utf-8"?>
              <!-- (c) ammap.com | SVG weather icons -->
              <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="64"
                  height="64"
                  viewbox="0 0 64 64">
                  <defs>
                      <filter id="blur" width="200%" height="200%">
                          <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                          <feOffset dx="0" dy="4" result="offsetblur"/>
                          <feComponentTransfer>
                              <feFuncA type="linear" slope="0.05"/>
                          </feComponentTransfer>
                          <feMerge> 
                              <feMergeNode/>
                              <feMergeNode in="SourceGraphic"/> 
                          </feMerge>
                      </filter>
                      <style type="text/css"><![CDATA[
              /*
              ** SUN
              */
              @keyframes am-weather-sun {
                0% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              
                100% {
                  -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                      -ms-transform: rotate(360deg);
                          transform: rotate(360deg);
                }
              }
              
              .am-weather-sun {
                -webkit-animation-name: am-weather-sun;
                  -moz-animation-name: am-weather-sun;
                    -ms-animation-name: am-weather-sun;
                        animation-name: am-weather-sun;
                -webkit-animation-duration: 9s;
                  -moz-animation-duration: 9s;
                    -ms-animation-duration: 9s;
                        animation-duration: 9s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              /*
              ** RAIN
              */
              @keyframes am-weather-rain {
                0% {
                  stroke-dashoffset: 0;
                }
              
                100% {
                  stroke-dashoffset: -100;
                }
              }
              
              .am-weather-rain-1 {
                -webkit-animation-name: am-weather-rain;
                  -moz-animation-name: am-weather-rain;
                    -ms-animation-name: am-weather-rain;
                        animation-name: am-weather-rain;
                -webkit-animation-duration: 8s;
                  -moz-animation-duration: 8s;
                    -ms-animation-duration: 8s;
                        animation-duration: 8s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              .am-weather-rain-2 {
                -webkit-animation-name: am-weather-rain;
                  -moz-animation-name: am-weather-rain;
                    -ms-animation-name: am-weather-rain;
                        animation-name: am-weather-rain;
                -webkit-animation-delay: 0.25s;
                  -moz-animation-delay: 0.25s;
                    -ms-animation-delay: 0.25s;
                        animation-delay: 0.25s;
                -webkit-animation-duration: 8s;
                  -moz-animation-duration: 8s;
                    -ms-animation-duration: 8s;
                        animation-duration: 8s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
                      ]]></style>
                  </defs>
                  <g filter="url(#blur)" id="rainy-1">
                      <g transform="translate(20,10)">
                          <g transform="translate(0,16), scale(1.2)">
                              <g class="am-weather-sun">
                                  <g>
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(45)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(90)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(135)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(180)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(225)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(270)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(315)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                              </g>
                              <circle cx="0" cy="0" fill="orange" r="5" stroke="orange" stroke-width="2"/>
                          </g>
                          <g>
                              <path d="M47.7,35.4c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3    c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#57A0EE" stroke="white" stroke-linejoin="round" stroke-width="1.5" transform="translate(-15,-5), scale(0.85)"/>
                          </g>
                      </g>
                      <g transform="translate(34,46), rotate(10)">
                          <line class="am-weather-rain-1" fill="none" stroke="#91C0F8" stroke-dasharray="4,7" stroke-linecap="round" stroke-width="2" transform="translate(-6,1)" x1="0" x2="0" y1="0" y2="8" />
                          <line class="am-weather-rain-2" fill="none" stroke="#91C0F8" stroke-dasharray="4,7" stroke-linecap="round" stroke-width="2" transform="translate(0,-1)" x1="0" x2="0" y1="0" y2="8" />
                      </g>
                  </g>
              </svg>.svg';
            } elseif (strpos($forecastDescription, 'rain') !== false) {
              $svgPath2 = '<?xml version="1.0" encoding="utf-8"?>
              <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="64"
                  height="64"
                  viewbox="0 0 64 64">
                  <defs>
                      <filter id="blur" width="200%" height="200%">
                          <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                          <feOffset dx="0" dy="4" result="offsetblur"/>
                          <feComponentTransfer>
                              <feFuncA type="linear" slope="0.05"/>
                          </feComponentTransfer>
                          <feMerge> 
                              <feMergeNode/>
                              <feMergeNode in="SourceGraphic"/> 
                          </feMerge>
                      </filter>
                      <style type="text/css"><![CDATA[
              /*
              ** RAIN
              */
              @keyframes am-weather-rain {
                0% {
                  stroke-dashoffset: 0;
                }
              
                100% {
                  stroke-dashoffset: -100;
                }
              }
              
              .am-weather-rain-1 {
                -webkit-animation-name: am-weather-rain;
                  -moz-animation-name: am-weather-rain;
                    -ms-animation-name: am-weather-rain;
                        animation-name: am-weather-rain;
                -webkit-animation-duration: 8s;
                  -moz-animation-duration: 8s;
                    -ms-animation-duration: 8s;
                        animation-duration: 8s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              .am-weather-rain-2 {
                -webkit-animation-name: am-weather-rain;
                  -moz-animation-name: am-weather-rain;
                    -ms-animation-name: am-weather-rain;
                        animation-name: am-weather-rain;
                -webkit-animation-delay: 0.25s;
                  -moz-animation-delay: 0.25s;
                    -ms-animation-delay: 0.25s;
                        animation-delay: 0.25s;
                -webkit-animation-duration: 8s;
                  -moz-animation-duration: 8s;
                    -ms-animation-duration: 8s;
                        animation-duration: 8s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
                      ]]></style>
                  </defs>
                  <g filter="url(#blur)" id="rainy-6">
                      <g transform="translate(20,10)">
                          <g>
                              <path d="M47.7,35.4c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3    c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#57A0EE" stroke="white" stroke-linejoin="round" stroke-width="1.2" transform="translate(-20,-11)"/>
                          </g>
                      </g>
                      <g transform="translate(31,46), rotate(10)">
                          <line class="am-weather-rain-1" fill="none" stroke="#91C0F8" stroke-dasharray="4,4" stroke-linecap="round" stroke-width="2" transform="translate(-4,1)" x1="0" x2="0" y1="0" y2="8" />
                          <line class="am-weather-rain-2" fill="none" stroke="#91C0F8" stroke-dasharray="4,4" stroke-linecap="round" stroke-width="2" transform="translate(0,-1)" x1="0" x2="0" y1="0" y2="8" />
                          <line class="am-weather-rain-1" fill="none" stroke="#91C0F8" stroke-dasharray="4,4" stroke-linecap="round" stroke-width="2" transform="translate(4,0)" x1="0" x2="0" y1="0" y2="8" />
                      </g>
                  </g>
              </svg>';
            } elseif (strpos($forecastDescription, 'scattered clouds') !== false) {
              $svgPath2 = '<?xml version="1.0" encoding="utf-8"?>
              <!-- (c) ammap.com | SVG weather icons -->
              <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="64"
                  height="64"
                  viewbox="0 0 64 64">
                  <defs>
                      <filter id="blur" width="200%" height="200%">
                          <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                          <feOffset dx="0" dy="4" result="offsetblur"/>
                          <feComponentTransfer>
                              <feFuncA type="linear" slope="0.05"/>
                          </feComponentTransfer>
                          <feMerge> 
                              <feMergeNode/>
                              <feMergeNode in="SourceGraphic"/> 
                          </feMerge>
                      </filter>
                      <style type="text/css"><![CDATA[
              /*
              ** CLOUDS
              */
              @keyframes am-weather-cloud-2 {
                0% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              
                50% {
                  -webkit-transform: translate(2px,0px);
                    -moz-transform: translate(2px,0px);
                      -ms-transform: translate(2px,0px);
                          transform: translate(2px,0px);
                }
              
                100% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              }
              
              .am-weather-cloud-2 {
                -webkit-animation-name: am-weather-cloud-2;
                  -moz-animation-name: am-weather-cloud-2;
                        animation-name: am-weather-cloud-2;
                -webkit-animation-duration: 3s;
                  -moz-animation-duration: 3s;
                        animation-duration: 3s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              /*
              ** SUN
              */
              @keyframes am-weather-sun {
                0% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              
                100% {
                  -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                      -ms-transform: rotate(360deg);
                          transform: rotate(360deg);
                }
              }
              
              .am-weather-sun {
                -webkit-animation-name: am-weather-sun;
                  -moz-animation-name: am-weather-sun;
                    -ms-animation-name: am-weather-sun;
                        animation-name: am-weather-sun;
                -webkit-animation-duration: 9s;
                  -moz-animation-duration: 9s;
                    -ms-animation-duration: 9s;
                        animation-duration: 9s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              @keyframes am-weather-sun-shiny {
                0% {
                  stroke-dasharray: 3px 10px;
                  stroke-dashoffset: 0px;
                }
              
                50% {
                  stroke-dasharray: 0.1px 10px;
                  stroke-dashoffset: -1px;
                }
              
                100% {
                  stroke-dasharray: 3px 10px;
                  stroke-dashoffset: 0px;
                }
              }
              
              .am-weather-sun-shiny line {
                -webkit-animation-name: am-weather-sun-shiny;
                  -moz-animation-name: am-weather-sun-shiny;
                    -ms-animation-name: am-weather-sun-shiny;
                        animation-name: am-weather-sun-shiny;
                -webkit-animation-duration: 2s;
                  -moz-animation-duration: 2s;
                    -ms-animation-duration: 2s;
                        animation-duration: 2s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
                      ]]></style>
                  </defs>
                  <g filter="url(#blur)" id="cloudy-day-3">
                      <g transform="translate(20,10)">
                          <g transform="translate(0,16)">
                              <g class="am-weather-sun">
                                  <g>
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(45)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(90)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(135)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(180)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(225)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(270)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                                  <g transform="rotate(315)">
                                      <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3"/>
                                  </g>
                              </g>
                              <circle cx="0" cy="0" fill="orange" r="5" stroke="orange" stroke-width="2"/>
                          </g>
                          <g class="am-weather-cloud-2">
                              <path d="M47.7,35.4c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3    c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#57A0EE" stroke="white" stroke-linejoin="round" stroke-width="1.2" transform="translate(-20,-11)"/>
                          </g>
                      </g>
                  </g>
              </svg>';
            } elseif (strpos($forecastDescription, 'clear sky') !== false) {
              $svgPath2 = '<?xml version="1.0" encoding="utf-8"?>
              <!-- (c) ammap.com | SVG weather icons -->
              <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="64"
                  height="64"
                  viewbox="0 0 64 64">
                  <defs>
                      <filter id="blur" width="200%" height="200%">
                          <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                          <feOffset dx="0" dy="4" result="offsetblur"/>
                          <feComponentTransfer>
                              <feFuncA type="linear" slope="0.05"/>
                          </feComponentTransfer>
                          <feMerge> 
                              <feMergeNode/>
                              <feMergeNode in="SourceGraphic"/> 
                          </feMerge>
                      </filter>
                      <style type="text/css"><![CDATA[
              /*
              ** CLOUDS
              */
              @keyframes am-weather-cloud-1 {
                0% {
                  -webkit-transform: translate(-5px,0px);
                    -moz-transform: translate(-5px,0px);
                      -ms-transform: translate(-5px,0px);
                          transform: translate(-5px,0px);
                }
              
                50% {
                  -webkit-transform: translate(10px,0px);
                    -moz-transform: translate(10px,0px);
                      -ms-transform: translate(10px,0px);
                          transform: translate(10px,0px);
                }
              
                100% {
                  -webkit-transform: translate(-5px,0px);
                    -moz-transform: translate(-5px,0px);
                      -ms-transform: translate(-5px,0px);
                          transform: translate(-5px,0px);
                }
              }
              
              .am-weather-cloud-1 {
                -webkit-animation-name: am-weather-cloud-1;
                  -moz-animation-name: am-weather-cloud-1;
                        animation-name: am-weather-cloud-1;
                -webkit-animation-duration: 7s;
                  -moz-animation-duration: 7s;
                        animation-duration: 7s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              @keyframes am-weather-cloud-2 {
                0% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              
                50% {
                  -webkit-transform: translate(2px,0px);
                    -moz-transform: translate(2px,0px);
                      -ms-transform: translate(2px,0px);
                          transform: translate(2px,0px);
                }
              
                100% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              }
              
              .am-weather-cloud-2 {
                -webkit-animation-name: am-weather-cloud-2;
                  -moz-animation-name: am-weather-cloud-2;
                        animation-name: am-weather-cloud-2;
                -webkit-animation-duration: 3s;
                  -moz-animation-duration: 3s;
                        animation-duration: 3s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              /*
              ** SUN
              */
              @keyframes am-weather-sun {
                0% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              
                100% {
                  -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                      -ms-transform: rotate(360deg);
                          transform: rotate(360deg);
                }
              }
              
              .am-weather-sun {
                -webkit-animation-name: am-weather-sun;
                  -moz-animation-name: am-weather-sun;
                    -ms-animation-name: am-weather-sun;
                        animation-name: am-weather-sun;
                -webkit-animation-duration: 9s;
                  -moz-animation-duration: 9s;
                    -ms-animation-duration: 9s;
                        animation-duration: 9s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              @keyframes am-weather-sun-shiny {
                0% {
                  stroke-dasharray: 3px 10px;
                  stroke-dashoffset: 0px;
                }
              
                50% {
                  stroke-dasharray: 0.1px 10px;
                  stroke-dashoffset: -1px;
                }
              
                100% {
                  stroke-dasharray: 3px 10px;
                  stroke-dashoffset: 0px;
                }
              }
              
              .am-weather-sun-shiny line {
                -webkit-animation-name: am-weather-sun-shiny;
                  -moz-animation-name: am-weather-sun-shiny;
                    -ms-animation-name: am-weather-sun-shiny;
                        animation-name: am-weather-sun-shiny;
                -webkit-animation-duration: 2s;
                  -moz-animation-duration: 2s;
                    -ms-animation-duration: 2s;
                        animation-duration: 2s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              
              
              
              /*
              ** MOON
              */
              @keyframes am-weather-moon {
                0% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              
                50% {
                  -webkit-transform: rotate(15deg);
                    -moz-transform: rotate(15deg);
                      -ms-transform: rotate(15deg);
                          transform: rotate(15deg);
                }
              
                100% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              }
              
              .am-weather-moon {
                -webkit-animation-name: am-weather-moon;
                  -moz-animation-name: am-weather-moon;
                    -ms-animation-name: am-weather-moon;
                        animation-name: am-weather-moon;
                -webkit-animation-duration: 6s;
                  -moz-animation-duration: 6s;
                    -ms-animation-duration: 6s;
                        animation-duration: 6s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
                -webkit-transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
                  -moz-transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
                    -ms-transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
                        transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
              }
              
              @keyframes am-weather-moon-star-1 {
                0% {
                  opacity: 0;
                }
              
                100% {
                  opacity: 1;
                }
              }
              
              .am-weather-moon-star-1 {
                -webkit-animation-name: am-weather-moon-star-1;
                  -moz-animation-name: am-weather-moon-star-1;
                    -ms-animation-name: am-weather-moon-star-1;
                        animation-name: am-weather-moon-star-1;
                -webkit-animation-delay: 3s;
                  -moz-animation-delay: 3s;
                    -ms-animation-delay: 3s;
                        animation-delay: 3s;
                -webkit-animation-duration: 5s;
                  -moz-animation-duration: 5s;
                    -ms-animation-duration: 5s;
                        animation-duration: 5s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: 1;
                  -moz-animation-iteration-count: 1;
                    -ms-animation-iteration-count: 1;
                        animation-iteration-count: 1;
              }
              
              @keyframes am-weather-moon-star-2 {
                0% {
                  opacity: 0;
                }
              
                100% {
                  opacity: 1;
                }
              }
              
              .am-weather-moon-star-2 {
                -webkit-animation-name: am-weather-moon-star-2;
                  -moz-animation-name: am-weather-moon-star-2;
                    -ms-animation-name: am-weather-moon-star-2;
                        animation-name: am-weather-moon-star-2;
                -webkit-animation-delay: 5s;
                  -moz-animation-delay: 5s;
                    -ms-animation-delay: 5s;
                        animation-delay: 5s;
                -webkit-animation-duration: 4s;
                  -moz-animation-duration: 4s;
                    -ms-animation-duration: 4s;
                        animation-duration: 4s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: 1;
                  -moz-animation-iteration-count: 1;
                    -ms-animation-iteration-count: 1;
                        animation-iteration-count: 1;
              }
              
              /*
              ** RAIN
              */
              @keyframes am-weather-rain {
                0% {
                  stroke-dashoffset: 0;
                }
              
                100% {
                  stroke-dashoffset: -100;
                }
              }
              
              .am-weather-rain-1 {
                -webkit-animation-name: am-weather-rain;
                  -moz-animation-name: am-weather-rain;
                    -ms-animation-name: am-weather-rain;
                        animation-name: am-weather-rain;
                -webkit-animation-duration: 8s;
                  -moz-animation-duration: 8s;
                    -ms-animation-duration: 8s;
                        animation-duration: 8s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              .am-weather-rain-2 {
                -webkit-animation-name: am-weather-rain;
                  -moz-animation-name: am-weather-rain;
                    -ms-animation-name: am-weather-rain;
                        animation-name: am-weather-rain;
                -webkit-animation-delay: 0.25s;
                  -moz-animation-delay: 0.25s;
                    -ms-animation-delay: 0.25s;
                        animation-delay: 0.25s;
                -webkit-animation-duration: 8s;
                  -moz-animation-duration: 8s;
                    -ms-animation-duration: 8s;
                        animation-duration: 8s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              
              /*
              ** SNOW
              */
              @keyframes am-weather-snow {
                0% {
                  -webkit-transform: translateX(0) translateY(0);
                    -moz-transform: translateX(0) translateY(0);
                      -ms-transform: translateX(0) translateY(0);
                          transform: translateX(0) translateY(0);
                }
              
                33.33% {
                  -webkit-transform: translateX(-1.2px) translateY(2px);
                    -moz-transform: translateX(-1.2px) translateY(2px);
                      -ms-transform: translateX(-1.2px) translateY(2px);
                          transform: translateX(-1.2px) translateY(2px);
                }
              
                66.66% {
                  -webkit-transform: translateX(1.4px) translateY(4px);
                    -moz-transform: translateX(1.4px) translateY(4px);
                      -ms-transform: translateX(1.4px) translateY(4px);
                          transform: translateX(1.4px) translateY(4px);
                  opacity: 1;
                }
              
                100% {
                  -webkit-transform: translateX(-1.6px) translateY(6px);
                    -moz-transform: translateX(-1.6px) translateY(6px);
                      -ms-transform: translateX(-1.6px) translateY(6px);
                          transform: translateX(-1.6px) translateY(6px);
                  opacity: 0;
                }
              }
              
              @keyframes am-weather-snow-reverse {
                0% {
                  -webkit-transform: translateX(0) translateY(0);
                    -moz-transform: translateX(0) translateY(0);
                      -ms-transform: translateX(0) translateY(0);
                          transform: translateX(0) translateY(0);
                }
              
                33.33% {
                  -webkit-transform: translateX(1.2px) translateY(2px);
                    -moz-transform: translateX(1.2px) translateY(2px);
                      -ms-transform: translateX(1.2px) translateY(2px);
                          transform: translateX(1.2px) translateY(2px);
                }
              
                66.66% {
                  -webkit-transform: translateX(-1.4px) translateY(4px);
                    -moz-transform: translateX(-1.4px) translateY(4px);
                      -ms-transform: translateX(-1.4px) translateY(4px);
                          transform: translateX(-1.4px) translateY(4px);
                  opacity: 1;
                }
              
                100% {
                  -webkit-transform: translateX(1.6px) translateY(6px);
                    -moz-transform: translateX(1.6px) translateY(6px);
                      -ms-transform: translateX(1.6px) translateY(6px);
                          transform: translateX(1.6px) translateY(6px);
                  opacity: 0;
                }
              }
              
              .am-weather-snow-1 {
                -webkit-animation-name: am-weather-snow;
                  -moz-animation-name: am-weather-snow;
                    -ms-animation-name: am-weather-snow;
                        animation-name: am-weather-snow;
                -webkit-animation-duration: 2s;
                  -moz-animation-duration: 2s;
                    -ms-animation-duration: 2s;
                        animation-duration: 2s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              .am-weather-snow-2 {
                -webkit-animation-name: am-weather-snow;
                  -moz-animation-name: am-weather-snow;
                    -ms-animation-name: am-weather-snow;
                        animation-name: am-weather-snow;
                -webkit-animation-delay: 1.2s;
                  -moz-animation-delay: 1.2s;
                    -ms-animation-delay: 1.2s;
                        animation-delay: 1.2s;
                -webkit-animation-duration: 2s;
                  -moz-animation-duration: 2s;
                    -ms-animation-duration: 2s;
                        animation-duration: 2s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              .am-weather-snow-3 {
                -webkit-animation-name: am-weather-snow-reverse;
                  -moz-animation-name: am-weather-snow-reverse;
                    -ms-animation-name: am-weather-snow-reverse;
                        animation-name: am-weather-snow-reverse;
                -webkit-animation-duration: 2s;
                  -moz-animation-duration: 2s;
                    -ms-animation-duration: 2s;
                        animation-duration: 2s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              /*
              ** EASING
              */
              .am-weather-easing-ease-in-out {
                -webkit-animation-timing-function: ease-in-out;
                  -moz-animation-timing-function: ease-in-out;
                    -ms-animation-timing-function: ease-in-out;
                        animation-timing-function: ease-in-out;
              }
              
                      ]]></style>
                  </defs>
                  <g filter="url(#blur)" id="day">
                      <g transform="translate(32,32)">
                          <g class="am-weather-sun am-weather-sun-shiny am-weather-easing-ease-in-out">
                              <g>
                                  <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                              </g>
                              <g transform="rotate(45)">
                                  <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                              </g>
                              <g transform="rotate(90)">
                                  <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                              </g>
                              <g transform="rotate(135)">
                                  <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                              </g>
                              <g transform="rotate(180)">
                                  <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                              </g>
                              <g transform="rotate(225)">
                                  <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                              </g>
                              <g transform="rotate(270)">
                                  <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                              </g>
                              <g transform="rotate(315)">
                                  <line fill="none" stroke="orange" stroke-linecap="round" stroke-width="2" transform="translate(0,9)" x1="0" x2="0" y1="0" y2="3" />
                              </g>
                          </g>
                          <circle cx="0" cy="0" fill="orange" r="5" stroke="orange" stroke-width="2"/>
                      </g>
                  </g>
              </svg>';
            } elseif (strpos($forecastDescription, 'clouds') !== false) {
              $svgPath2 = '<?xml version="1.0" encoding="utf-8"?>
              <!-- (c) ammap.com | SVG weather icons -->
              <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="64"
                  height="64"
                  viewbox="0 0 64 64">
                  <defs>
                      <filter id="blur" width="200%" height="200%">
                          <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                          <feOffset dx="0" dy="4" result="offsetblur"/>
                          <feComponentTransfer>
                              <feFuncA type="linear" slope="0.05"/>
                          </feComponentTransfer>
                      <feMerge> 
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic"/> 
                      </feMerge>
                      </filter>
                      <style type="text/css"><![CDATA[
              /*
              ** CLOUDS
              */
              @keyframes am-weather-cloud-1 {
                0% {
                  -webkit-transform: translate(-5px,0px);
                    -moz-transform: translate(-5px,0px);
                      -ms-transform: translate(-5px,0px);
                          transform: translate(-5px,0px);
                }
              
                50% {
                  -webkit-transform: translate(10px,0px);
                    -moz-transform: translate(10px,0px);
                      -ms-transform: translate(10px,0px);
                          transform: translate(10px,0px);
                }
              
                100% {
                  -webkit-transform: translate(-5px,0px);
                    -moz-transform: translate(-5px,0px);
                      -ms-transform: translate(-5px,0px);
                          transform: translate(-5px,0px);
                }
              }
              
              .am-weather-cloud-1 {
                -webkit-animation-name: am-weather-cloud-1;
                  -moz-animation-name: am-weather-cloud-1;
                        animation-name: am-weather-cloud-1;
                -webkit-animation-duration: 7s;
                  -moz-animation-duration: 7s;
                        animation-duration: 7s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              @keyframes am-weather-cloud-2 {
                0% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              
                50% {
                  -webkit-transform: translate(2px,0px);
                    -moz-transform: translate(2px,0px);
                      -ms-transform: translate(2px,0px);
                          transform: translate(2px,0px);
                }
              
                100% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              }
              
              .am-weather-cloud-2 {
                -webkit-animation-name: am-weather-cloud-2;
                  -moz-animation-name: am-weather-cloud-2;
                        animation-name: am-weather-cloud-2;
                -webkit-animation-duration: 3s;
                  -moz-animation-duration: 3s;
                        animation-duration: 3s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              /*
              ** SUN
              */
              @keyframes am-weather-sun {
                0% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              
                100% {
                  -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                      -ms-transform: rotate(360deg);
                          transform: rotate(360deg);
                }
              }
              
              .am-weather-sun {
                -webkit-animation-name: am-weather-sun;
                  -moz-animation-name: am-weather-sun;
                    -ms-animation-name: am-weather-sun;
                        animation-name: am-weather-sun;
                -webkit-animation-duration: 9s;
                  -moz-animation-duration: 9s;
                    -ms-animation-duration: 9s;
                        animation-duration: 9s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              @keyframes am-weather-sun-shiny {
                0% {
                  stroke-dasharray: 3px 10px;
                  stroke-dashoffset: 0px;
                }
              
                50% {
                  stroke-dasharray: 0.1px 10px;
                  stroke-dashoffset: -1px;
                }
              
                100% {
                  stroke-dasharray: 3px 10px;
                  stroke-dashoffset: 0px;
                }
              }
              
              .am-weather-sun-shiny line {
                -webkit-animation-name: am-weather-sun-shiny;
                  -moz-animation-name: am-weather-sun-shiny;
                    -ms-animation-name: am-weather-sun-shiny;
                        animation-name: am-weather-sun-shiny;
                -webkit-animation-duration: 2s;
                  -moz-animation-duration: 2s;
                    -ms-animation-duration: 2s;
                        animation-duration: 2s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              
              
              
              /*
              ** MOON
              */
              @keyframes am-weather-moon {
                0% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              
                50% {
                  -webkit-transform: rotate(15deg);
                    -moz-transform: rotate(15deg);
                      -ms-transform: rotate(15deg);
                          transform: rotate(15deg);
                }
              
                100% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              }
              
              .am-weather-moon {
                -webkit-animation-name: am-weather-moon;
                  -moz-animation-name: am-weather-moon;
                    -ms-animation-name: am-weather-moon;
                        animation-name: am-weather-moon;
                -webkit-animation-duration: 6s;
                  -moz-animation-duration: 6s;
                    -ms-animation-duration: 6s;
                        animation-duration: 6s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
                -webkit-transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
                  -moz-transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
                    -ms-transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
                        transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
              }
              
              @keyframes am-weather-moon-star-1 {
                0% {
                  opacity: 0;
                }
              
                100% {
                  opacity: 1;
                }
              }
              
              .am-weather-moon-star-1 {
                -webkit-animation-name: am-weather-moon-star-1;
                  -moz-animation-name: am-weather-moon-star-1;
                    -ms-animation-name: am-weather-moon-star-1;
                        animation-name: am-weather-moon-star-1;
                -webkit-animation-delay: 3s;
                  -moz-animation-delay: 3s;
                    -ms-animation-delay: 3s;
                        animation-delay: 3s;
                -webkit-animation-duration: 5s;
                  -moz-animation-duration: 5s;
                    -ms-animation-duration: 5s;
                        animation-duration: 5s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: 1;
                  -moz-animation-iteration-count: 1;
                    -ms-animation-iteration-count: 1;
                        animation-iteration-count: 1;
              }
              
              @keyframes am-weather-moon-star-2 {
                0% {
                  opacity: 0;
                }
              
                100% {
                  opacity: 1;
                }
              }
              
              .am-weather-moon-star-2 {
                -webkit-animation-name: am-weather-moon-star-2;
                  -moz-animation-name: am-weather-moon-star-2;
                    -ms-animation-name: am-weather-moon-star-2;
                        animation-name: am-weather-moon-star-2;
                -webkit-animation-delay: 5s;
                  -moz-animation-delay: 5s;
                    -ms-animation-delay: 5s;
                        animation-delay: 5s;
                -webkit-animation-duration: 4s;
                  -moz-animation-duration: 4s;
                    -ms-animation-duration: 4s;
                        animation-duration: 4s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: 1;
                  -moz-animation-iteration-count: 1;
                    -ms-animation-iteration-count: 1;
                        animation-iteration-count: 1;
              }
              
              /*
              ** RAIN
              */
              @keyframes am-weather-rain {
                0% {
                  stroke-dashoffset: 0;
                }
              
                100% {
                  stroke-dashoffset: -100;
                }
              }
              
              .am-weather-rain-1 {
                -webkit-animation-name: am-weather-rain;
                  -moz-animation-name: am-weather-rain;
                    -ms-animation-name: am-weather-rain;
                        animation-name: am-weather-rain;
                -webkit-animation-duration: 8s;
                  -moz-animation-duration: 8s;
                    -ms-animation-duration: 8s;
                        animation-duration: 8s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              .am-weather-rain-2 {
                -webkit-animation-name: am-weather-rain;
                  -moz-animation-name: am-weather-rain;
                    -ms-animation-name: am-weather-rain;
                        animation-name: am-weather-rain;
                -webkit-animation-delay: 0.25s;
                  -moz-animation-delay: 0.25s;
                    -ms-animation-delay: 0.25s;
                        animation-delay: 0.25s;
                -webkit-animation-duration: 8s;
                  -moz-animation-duration: 8s;
                    -ms-animation-duration: 8s;
                        animation-duration: 8s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              
              /*
              ** SNOW
              */
              @keyframes am-weather-snow {
                0% {
                  -webkit-transform: translateX(0) translateY(0);
                    -moz-transform: translateX(0) translateY(0);
                      -ms-transform: translateX(0) translateY(0);
                          transform: translateX(0) translateY(0);
                }
              
                33.33% {
                  -webkit-transform: translateX(-1.2px) translateY(2px);
                    -moz-transform: translateX(-1.2px) translateY(2px);
                      -ms-transform: translateX(-1.2px) translateY(2px);
                          transform: translateX(-1.2px) translateY(2px);
                }
              
                66.66% {
                  -webkit-transform: translateX(1.4px) translateY(4px);
                    -moz-transform: translateX(1.4px) translateY(4px);
                      -ms-transform: translateX(1.4px) translateY(4px);
                          transform: translateX(1.4px) translateY(4px);
                  opacity: 1;
                }
              
                100% {
                  -webkit-transform: translateX(-1.6px) translateY(6px);
                    -moz-transform: translateX(-1.6px) translateY(6px);
                      -ms-transform: translateX(-1.6px) translateY(6px);
                          transform: translateX(-1.6px) translateY(6px);
                  opacity: 0;
                }
              }
              
              @keyframes am-weather-snow-reverse {
                0% {
                  -webkit-transform: translateX(0) translateY(0);
                    -moz-transform: translateX(0) translateY(0);
                      -ms-transform: translateX(0) translateY(0);
                          transform: translateX(0) translateY(0);
                }
              
                33.33% {
                  -webkit-transform: translateX(1.2px) translateY(2px);
                    -moz-transform: translateX(1.2px) translateY(2px);
                      -ms-transform: translateX(1.2px) translateY(2px);
                          transform: translateX(1.2px) translateY(2px);
                }
              
                66.66% {
                  -webkit-transform: translateX(-1.4px) translateY(4px);
                    -moz-transform: translateX(-1.4px) translateY(4px);
                      -ms-transform: translateX(-1.4px) translateY(4px);
                          transform: translateX(-1.4px) translateY(4px);
                  opacity: 1;
                }
              
                100% {
                  -webkit-transform: translateX(1.6px) translateY(6px);
                    -moz-transform: translateX(1.6px) translateY(6px);
                      -ms-transform: translateX(1.6px) translateY(6px);
                          transform: translateX(1.6px) translateY(6px);
                  opacity: 0;
                }
              }
              
              .am-weather-snow-1 {
                -webkit-animation-name: am-weather-snow;
                  -moz-animation-name: am-weather-snow;
                    -ms-animation-name: am-weather-snow;
                        animation-name: am-weather-snow;
                -webkit-animation-duration: 2s;
                  -moz-animation-duration: 2s;
                    -ms-animation-duration: 2s;
                        animation-duration: 2s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              .am-weather-snow-2 {
                -webkit-animation-name: am-weather-snow;
                  -moz-animation-name: am-weather-snow;
                    -ms-animation-name: am-weather-snow;
                        animation-name: am-weather-snow;
                -webkit-animation-delay: 1.2s;
                  -moz-animation-delay: 1.2s;
                    -ms-animation-delay: 1.2s;
                        animation-delay: 1.2s;
                -webkit-animation-duration: 2s;
                  -moz-animation-duration: 2s;
                    -ms-animation-duration: 2s;
                        animation-duration: 2s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              .am-weather-snow-3 {
                -webkit-animation-name: am-weather-snow-reverse;
                  -moz-animation-name: am-weather-snow-reverse;
                    -ms-animation-name: am-weather-snow-reverse;
                        animation-name: am-weather-snow-reverse;
                -webkit-animation-duration: 2s;
                  -moz-animation-duration: 2s;
                    -ms-animation-duration: 2s;
                        animation-duration: 2s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              /*
              ** EASING
              */
              .am-weather-easing-ease-in-out {
                -webkit-animation-timing-function: ease-in-out;
                  -moz-animation-timing-function: ease-in-out;
                    -ms-animation-timing-function: ease-in-out;
                        animation-timing-function: ease-in-out;
              }
              
                      ]]></style>
                  </defs>
                  <g filter="url(#blur)" id="cloudy">
                      <g transform="translate(20,10)">
                          <g class="am-weather-cloud-1">
                              <path d="M47.7,35.4     c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3     c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#91C0F8" stroke="white" stroke-linejoin="round" stroke-width="1.2" transform="translate(-10,-8), scale(0.6)"/>
                          </g>
                          <g class="am-weather-cloud-2">
                              <path d="M47.7,35.4     c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3     c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#57A0EE" stroke="white" stroke-linejoin="round" stroke-width="1.2" transform="translate(-20,-11)"/>
                          </g>
                      </g>
                  </g>
              </svg>';
            } else {
              $svgPath2 = '<?xml version="1.0" encoding="utf-8"?>
              <!-- (c) ammap.com | SVG weather icons -->
              <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="64"
                  height="64"
                  viewbox="0 0 64 64">
                  <defs>
                      <filter id="blur" width="200%" height="200%">
                          <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                          <feOffset dx="0" dy="4" result="offsetblur"/>
                          <feComponentTransfer>
                              <feFuncA type="linear" slope="0.05"/>
                          </feComponentTransfer>
                          <feMerge> 
                              <feMergeNode/>
                              <feMergeNode in="SourceGraphic"/> 
                          </feMerge>
                      </filter>
                      <style type="text/css"><![CDATA[
              /*
              ** CLOUDS
              */
              @keyframes am-weather-cloud-2 {
                0% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              
                50% {
                  -webkit-transform: translate(2px,0px);
                    -moz-transform: translate(2px,0px);
                      -ms-transform: translate(2px,0px);
                          transform: translate(2px,0px);
                }
              
                100% {
                  -webkit-transform: translate(0px,0px);
                    -moz-transform: translate(0px,0px);
                      -ms-transform: translate(0px,0px);
                          transform: translate(0px,0px);
                }
              }
              
              .am-weather-cloud-2 {
                -webkit-animation-name: am-weather-cloud-2;
                  -moz-animation-name: am-weather-cloud-2;
                        animation-name: am-weather-cloud-2;
                -webkit-animation-duration: 3s;
                  -moz-animation-duration: 3s;
                        animation-duration: 3s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
              }
              
              /*
              ** MOON
              */
              @keyframes am-weather-moon {
                0% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              
                50% {
                  -webkit-transform: rotate(15deg);
                    -moz-transform: rotate(15deg);
                      -ms-transform: rotate(15deg);
                          transform: rotate(15deg);
                }
              
                100% {
                  -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                      -ms-transform: rotate(0deg);
                          transform: rotate(0deg);
                }
              }
              
              .am-weather-moon {
                -webkit-animation-name: am-weather-moon;
                  -moz-animation-name: am-weather-moon;
                    -ms-animation-name: am-weather-moon;
                        animation-name: am-weather-moon;
                -webkit-animation-duration: 6s;
                  -moz-animation-duration: 6s;
                    -ms-animation-duration: 6s;
                        animation-duration: 6s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                  -moz-animation-iteration-count: infinite;
                    -ms-animation-iteration-count: infinite;
                        animation-iteration-count: infinite;
                -webkit-transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
                  -moz-transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
                    -ms-transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
                        transform-origin: 12.5px 15.15px 0; /* TODO FF CENTER ISSUE */
              }
              
              @keyframes am-weather-moon-star-1 {
                0% {
                  opacity: 0;
                }
              
                100% {
                  opacity: 1;
                }
              }
              
              .am-weather-moon-star-1 {
                -webkit-animation-name: am-weather-moon-star-1;
                  -moz-animation-name: am-weather-moon-star-1;
                    -ms-animation-name: am-weather-moon-star-1;
                        animation-name: am-weather-moon-star-1;
                -webkit-animation-delay: 3s;
                  -moz-animation-delay: 3s;
                    -ms-animation-delay: 3s;
                        animation-delay: 3s;
                -webkit-animation-duration: 5s;
                  -moz-animation-duration: 5s;
                    -ms-animation-duration: 5s;
                        animation-duration: 5s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: 1;
                  -moz-animation-iteration-count: 1;
                    -ms-animation-iteration-count: 1;
                        animation-iteration-count: 1;
              }
              
              @keyframes am-weather-moon-star-2 {
                0% {
                  opacity: 0;
                }
              
                100% {
                  opacity: 1;
                }
              }
              
              .am-weather-moon-star-2 {
                -webkit-animation-name: am-weather-moon-star-2;
                  -moz-animation-name: am-weather-moon-star-2;
                    -ms-animation-name: am-weather-moon-star-2;
                        animation-name: am-weather-moon-star-2;
                -webkit-animation-delay: 5s;
                  -moz-animation-delay: 5s;
                    -ms-animation-delay: 5s;
                        animation-delay: 5s;
                -webkit-animation-duration: 4s;
                  -moz-animation-duration: 4s;
                    -ms-animation-duration: 4s;
                        animation-duration: 4s;
                -webkit-animation-timing-function: linear;
                  -moz-animation-timing-function: linear;
                    -ms-animation-timing-function: linear;
                        animation-timing-function: linear;
                -webkit-animation-iteration-count: 1;
                  -moz-animation-iteration-count: 1;
                    -ms-animation-iteration-count: 1;
                        animation-iteration-count: 1;
              }
                      ]]></style>
                  </defs>
                  <g filter="url(#blur)" id="cloudy-night-3">
                      <g transform="translate(20,10)">
                          <g transform="translate(16,4), scale(0.8)">
                              <g class="am-weather-moon-star-1">
                                  <polygon fill="orange" points="3.3,1.5 4,2.7 5.2,3.3 4,4 3.3,5.2 2.7,4 1.5,3.3 2.7,2.7" stroke="none" stroke-miterlimit="10"/>
                              </g>
                              <g class="am-weather-moon-star-2">
                                  <polygon fill="orange" points="3.3,1.5 4,2.7 5.2,3.3 4,4 3.3,5.2 2.7,4 1.5,3.3 2.7,2.7" stroke="none" stroke-miterlimit="10" transform="translate(20,10)"/>
                              </g>
                              <g class="am-weather-moon">
                                  <path d="M14.5,13.2c0-3.7,2-6.9,5-8.7   c-1.5-0.9-3.2-1.3-5-1.3c-5.5,0-10,4.5-10,10s4.5,10,10,10c1.8,0,3.5-0.5,5-1.3C16.5,20.2,14.5,16.9,14.5,13.2z" fill="orange" stroke="orange" stroke-linejoin="round" stroke-width="2"/>
                              </g>
                          </g>
                          <g class="am-weather-cloud-2">
                              <path d="M47.7,35.4    c0-4.6-3.7-8.2-8.2-8.2c-1,0-1.9,0.2-2.8,0.5c-0.3-3.4-3.1-6.2-6.6-6.2c-3.7,0-6.7,3-6.7,6.7c0,0.8,0.2,1.6,0.4,2.3    c-0.3-0.1-0.7-0.1-1-0.1c-3.7,0-6.7,3-6.7,6.7c0,3.6,2.9,6.6,6.5,6.7l17.2,0C44.2,43.3,47.7,39.8,47.7,35.4z" fill="#57A0EE" stroke="white" stroke-linejoin="round" stroke-width="1.2" transform="translate(-20,-11)"/>
                          </g>
                      </g>
                  </g>
              </svg>';
            }
            ?>

          <div class="forecast-day">
            <div class="forecast-details">
              <p class="forecast-temp"><?php echo $forecastTemperature; ?> °C</p>
              <p class="forecast-icon"><?php echo $svgPath2; ?></p>
              <p class="forecast-day-of-week"><?php echo $dayOfWeek; ?></p>
            </div>
          </div>

          <?php
          $currentDate = $date;
          $daysCount++;
        }
      }
    }
  
    // Check if only 5 days were displayed and display an additional day if available
    if ($daysCount == 5 && $dailyForecasts && $daysCount < 6) {
      $nextForecast = reset($dailyForecasts); // Get the next available forecast
      $nextForecastDateTime = new DateTime($nextForecast->dt_txt);
      $nextDate = $nextForecastDateTime->format('Y-m-d');
      $nextDayOfWeek = $nextForecastDateTime->format('D');
      $nextForecastTemperature = round($nextForecast->main->temp - 273.15);
      $nextForecastIcon = $nextForecast->weather[0]->icon;
      ?>

      <div class="forecast-day">
        <div class="forecast-details">
          <p class="forecast-temp"><?php echo $nextForecastTemperature; ?> °C</p>
          <p class="forecast-icon"><?php echo $svgPath2; ?></p>
          <p class="forecast-day-of-week"><?php echo $nextDayOfWeek; ?></p>
        </div>
      </div>

    <?php
    }
    ?>
  </div>

<div class="wc-h">
  <p>Highlights</p>
</div>

<div class="h-container">
  <div class="h-container-items">
    <div class="h-txt"> 
      Humidity 
    </div>
    
    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="40" fill="#000000" viewBox="0 0 256 256" style="position: relative; top: 35%;">
      <path d="M174,47.75a254.19,254.19,0,0,0-41.45-38.3,8,8,0,0,0-9.18,0A254.19,254.19,0,0,0,82,47.75C54.51,79.32,40,112.6,40,144a88,88,0,0,0,176,0C216,112.6,201.49,79.32,174,47.75ZM187.83,184H68.17a72,72,0,0,1-8-16H195.87A72,72,0,0,1,187.83,184ZM200,144a70.57,70.57,0,0,1-.46,8H56.46a70.57,70.57,0,0,1-.46-8q0-4,.36-8H199.64Q200,140,200,144ZM128,26c14.16,11.1,56.86,47.74,68.84,94H59.16C71.14,73.76,113.84,37.12,128,26ZM82.81,200h90.38a71.82,71.82,0,0,1-90.38,0Z"></path>
    </svg>
    <span class="detail-value"><?php echo $currentWeather->main->humidity; ?>%</span>
  </div>

  <div class="h-container-items">
    <div class="h-txt"> 
      Rain Chance (1h)
    </div>
  <svg xmlns="http://www.w3.org/2000/svg" width="64" height="40" fill="#000000" viewBox="0 0 256 256" style="position: relative; top: 35%;">
    <path d="M158.66,196.44l-32,48a8,8,0,1,1-13.32-8.88l32-48a8,8,0,0,1,13.32,8.88ZM232,92a76.08,76.08,0,0,1-76,76H132.28l-29.62,44.44a8,8,0,1,1-13.32-8.88L113.05,168H76A52,52,0,0,1,76,64a53.26,53.26,0,0,1,8.92.76A76.08,76.08,0,0,1,232,92Zm-16,0A60.06,60.06,0,0,0,96,88.46a8,8,0,0,1-16-.92q.21-3.66.77-7.23A38.11,38.11,0,0,0,76,80a36,36,0,0,0,0,72h80A60.07,60.07,0,0,0,216,92Z"></path>
  </svg>

  <span class="detail-value"><?php echo $rainChance; ?>%</span>
  <!-- <span class="detail-value"><?php echo isset($currentWeather->pop) ? $currentWeather->pop . '%' : '0%'; ?></span> -->
  <!-- <span class="detail-value"><?php echo isset($currentWeather->rain) ? $currentWeather->rain->{'1h'} . '%' : '0%'; ?></span> -->
  </div>

  <div class="h-container-items">
    <div class="h-txt"> 
      Sunrise 
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="40" fill="#f9b314" viewBox="0 0 256 256" style="position: relative; top: 35%;">
      <path d="M240,152H199.55a73.54,73.54,0,0,0,.45-8,72,72,0,0,0-144,0,73.54,73.54,0,0,0,.45,8H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM72,144a56,56,0,1,1,111.41,8H72.59A56.13,56.13,0,0,1,72,144Zm144,56a8,8,0,0,1-8,8H48a8,8,0,0,1,0-16H208A8,8,0,0,1,216,200ZM72.84,43.58a8,8,0,0,1,14.32-7.16l8,16a8,8,0,0,1-14.32,7.16Zm-56,48.84a8,8,0,0,1,10.74-3.57l16,8a8,8,0,0,1-7.16,14.31l-16-8A8,8,0,0,1,16.84,92.42Zm192,15.16a8,8,0,0,1,3.58-10.73l16-8a8,8,0,1,1,7.16,14.31l-16,8a8,8,0,0,1-10.74-3.58Zm-48-55.16,8-16a8,8,0,0,1,14.32,7.16l-8,16a8,8,0,1,1-14.32-7.16Z"></path>
  </svg>

  <?php
    date_default_timezone_set('Asia/Manila');
    $sunriseTime = date('h:i A', $currentWeather->sys->sunrise);
    ?>
    <span class="detail-value"><?php echo $sunriseTime; ?></span>
  </div>

  <div class="h-container-items">
    <div class="h-txt"> 
      Wind Speed
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="40" fill="#000000" viewBox="0 0 256 256" style="position: relative; top: 35%;">
      <path d="M184,184a32,32,0,0,1-32,32c-13.7,0-26.95-8.93-31.5-21.22a8,8,0,0,1,15-5.56C137.74,195.27,145,200,152,200a16,16,0,0,0,0-32H40a8,8,0,0,1,0-16H152A32,32,0,0,1,184,184Zm-64-80a32,32,0,0,0,0-64c-13.7,0-26.95,8.93-31.5,21.22a8,8,0,0,0,15,5.56C105.74,60.73,113,56,120,56a16,16,0,0,1,0,32H24a8,8,0,0,0,0,16Zm88-32c-13.7,0-26.95,8.93-31.5,21.22a8,8,0,0,0,15,5.56C193.74,92.73,201,88,208,88a16,16,0,0,1,0,32H32a8,8,0,0,0,0,16H208a32,32,0,0,0,0-64Z"></path>
    </svg>

    <span class="detail-value"><?php echo $currentWeather->wind->speed; ?> m/s</span>

  </div>

  <div class="h-container-items" style="padding-right: 20px;">
  <div class="h-txt"> 
    Wind Direction
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" width="64" height="40" fill="#030303" viewBox="0 0 256 256" style="position: relative; top: 35%;">
    <path d="M229.33,98.21,53.41,33l-.16-.05A16,16,0,0,0,32.9,53.25a1,1,0,0,0,.05.16L98.21,229.33A15.77,15.77,0,0,0,113.28,240h.3a15.77,15.77,0,0,0,15-11.29l23.56-76.56,76.56-23.56a16,16,0,0,0,.62-30.38ZM224,113.3l-76.56,23.56a16,16,0,0,0-10.58,10.58L113.3,224h0l-.06-.17L48,48l175.82,65.22.16.06Z"></path>
  </svg>
  <span class="detail-value" style="font-size: 16px; top: 35%; float: right;"><?php echo $currentWeather->wind->deg; ?>&deg;</span>
  <br>
  <span class="detail-value" style="font-size: 16px; top: 15%; float: right;"><?php echo getWindDirection($currentWeather->wind->deg); ?></span> 
</div>

<?php
function getWindDirection($degrees) {
  $directions = [
    'North' => [0, 22.4],
    'North-NorthEast' => [22.5, 44.9],
    'NorthEast' => [45, 67.4],
    'East-NorthEast' => [67.5, 89.9],
    'East' => [90, 112.4],
    'East-SouthEast' => [112.5, 134.9],
    'SouthEast' => [135, 157.4],
    'South-SouthEast' => [157.5, 179.9],
    'South' => [180, 202.4],
    'South-SouthWest' => [202.5, 224.9],
    'SouthWest' => [225, 247.4],
    'West-SouthWest' => [247.5, 269.9],
    'West' => [270, 292.4],
    'West-NorthWest' => [292.5, 314.9],
    'NorthWest' => [315, 337.4],
    'North-NorthWest' => [337.5, 359.9]
  ];

   if ($degrees >= 0 && $degrees <= 22.4) {
        return 'North';
    }

    foreach ($directions as $direction => $range) {
        $lowerLimit = $range[0];
        $upperLimit = $range[1];
        
        if ($degrees >= $lowerLimit && $degrees <= $upperLimit) {
            return $direction;
        }
    }

  return 'Unknown';
}
?>

  <div class="h-container-items">
    <div class="h-txt"> 
      Sunset 
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="40" fill="#f9b314" viewBox="0 0 256 256" style="position: relative; top: 35%;">
      <path d="M248,160a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H56.45a73.54,73.54,0,0,1-.45-8,72,72,0,0,1,144,0,73.54,73.54,0,0,1-.45,8H240A8,8,0,0,1,248,160Zm-40,32H48a8,8,0,0,0,0,16H208a8,8,0,0,0,0-16ZM80.84,59.58a8,8,0,0,0,14.32-7.16l-8-16a8,8,0,0,0-14.32,7.16ZM20.42,103.16l16,8a8,8,0,1,0,7.16-14.31l-16-8a8,8,0,1,0-7.16,14.31ZM216,112a8,8,0,0,0,3.57-.84l16-8a8,8,0,1,0-7.16-14.31l-16,8A8,8,0,0,0,216,112ZM164.42,63.16a8,8,0,0,0,10.74-3.58l8-16a8,8,0,0,0-14.32-7.16l-8,16A8,8,0,0,0,164.42,63.16Z"></path>
  </svg>

    <?php
    $sunsetTime = date('h:i A', $currentWeather->sys->sunset);
    ?>
    <span class="detail-value"><?php echo $sunsetTime; ?></span>
  </div>

</div>
</div>
</div>

<div class="footer">
  <div class="foot-txt">
  <img src="images/footer.png" style="height: 100%; width: 80%;">
  </div>

  <div class="foot-txt">
      <font style="font-weight: 700;">REPUBLIC OF THE PHILIPPINES</font>
      All content is in the public domain unless otherwise stated.
  </div>

  <div class="foot-txt">
    <font style="font-weight: 700;">ABOUT GOVPH</font>
    Learn more about the Philippine government, its structure, how government works and the people behind it.
  </div>
</div>

<script>
function updateCurrentTime() {
  // Get the current date and time
  var currentDateTime = new Date();

  // Get the day of the week
  var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  var dayOfWeek = daysOfWeek[currentDateTime.getDay()];

  // Format the time as HH:MM AM/PM
  var hours = currentDateTime.getHours();
  var minutes = currentDateTime.getMinutes();
  var ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; // Handle midnight (0 o'clock)
  minutes = minutes < 10 ? '0' + minutes : minutes;
  var formattedTime = hours + ':' + minutes + ' ' + ampm;

  // Update the current day and time elements
  var currentDayElement = document.getElementById('current-day');
  currentDayElement.innerText = dayOfWeek;

  var currentTimeElement = document.getElementById('current-time');
  currentTimeElement.innerText = formattedTime;
}

// Call the updateCurrentTime function initially to display the current time
updateCurrentTime();


// TOPNAV
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>