<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disaster Ready: Map</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/map.css">
  <link rel="icon" href="images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
  

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

    <a href="map.php" class="active">
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
    <a href="weather.php">Weather</a>
    <a href="index.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>


<div class="main2">
  <!-- <div class="division"> -->
    <div id="map"></div>
  </div>

  <div class="main2">
    <div class="barangays-location">

      <!-- Abango -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15651.548354385455!2d124.73085273421333!3d11.269709672567826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3308093206598ed5%3A0x47fd14775bb857ce!2sAbango%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696339080068!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-text">
          View Location at: 
          <a href="https://www.openstreetmap.org/node/8681814194" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.27480/124.73270" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.274797%7E124.732718&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://maps.app.goo.gl/t34CDPnuHvyBvn1t8" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Amahit -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31302.382317193777!2d124.72626730189351!3d11.27626968986819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080ecb85c1f115%3A0x530e432057ab90a5!2sAmahit%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340200735!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2795/124.7548" target="_blank">OpenStreetMap&#x1F517; </a>
          <a href="https://opentopomap.org/#map=15/11.27950/124.75480" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.279511%7E124.754863&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://maps.app.goo.gl/CCttwkbX5rAN4wgV8" target="_blank">Google Maps&#x1F517; </a>
        </div>
      </div>

      <!-- Balire -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15650.781189177285!2d124.72105673421744!3d11.283794272357651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080ed7bfc0f97b%3A0xd76ba742330c6b5!2sBalire%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340281320!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2854/124.7356" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.28540/124.73560" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.285403%7E124.735637&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2854,124.7356,3004m/data=!3m1!1e3?entry=ttu" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Balud -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31295.317573846336!2d124.75918530196917!3d11.340941186009816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080dfbf776647f%3A0xeaebf2ed686be074!2sBalud%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340325145!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3507/124.7696" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.35070/124.76960" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.350713%7E124.769626&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3507,124.7696,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>
      
      <!-- Bukid -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15650.047297551682!2d124.7340687842213!3d11.297251772156878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080ee925547617%3A0x34cb6e0c38bb588d!2sBukid%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340648754!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2946/124.7469" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.29460/124.74690" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.29462%7E124.746923&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2946,124.7469,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Bulod -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31297.94102963832!2d124.75681475194108!3d11.316968337439642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080dd7704f714f%3A0xe174cdfe5ed90c18!2sBulod%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340747869!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3280/124.7555" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.32800/124.75550" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3280~124.7555&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3280,124.7555,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>
      
      <!-- Busay -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31297.17743077295!2d124.76303730194924!3d11.32395118702311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080ddce0f15e2d%3A0x116b6971d852ac2c!2sBusay%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340773564!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3268/124.7673" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.32680/124.76730" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.326812%7E124.767308&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3268,124.7673,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Cabarasan -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15648.02341632694!2d124.75556818423213!3d11.33428232160463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e0e87968051%3A0x8e0acbd1b3c0c2f6!2sCabarasan%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340852434!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3352/124.7651" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.33520/124.76510" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.335186%7E124.76512&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3352,124.7651,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Cabolo-an -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54966.76633211822!2d124.77270485881442!3d11.318589899437544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080d96c5c1b337%3A0x15682895f34b7929!2sCabolo-an%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340898745!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3203/124.7889" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.32030/124.78890" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.32029%7E124.788895&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3203,124.7889,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Calingcaguing -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7824.675277015008!2d124.76112963790837!3d11.310013455491966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e7d84e70bbd%3A0x2b023dbedc3bf00d!2sCalingcaguing%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340942983!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3107/124.7625" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.31070/124.76250" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.310696%7E124.762502&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3107,124.7625,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Can-Isak -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31303.223636856364!2d124.7507683018845!3d11.268543740329394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x330809551de2ed19%3A0x54fa4bc931655d25!2sCan-isak%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696340973297!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2733/124.7643" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.27330/124.76430" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.273282%7E124.764347&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2733,124.7643,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>
      
      <!-- Canomantag -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15649.203985553957!2d124.70979573422586!3d11.312696221926519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080f0637bdff81%3A0x8e3ea402d895e14e!2sCanomantag%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341007470!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3073/124.7154" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.30730/124.71540" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.307287%7E124.715381&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3073,124.7154,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Cuta -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15648.902596825224!2d124.74110323422744!3d11.318210821844264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e5d851df495%3A0x85ca7339b827d9a!2sCuta%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341044005!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3159/124.7555" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.31590/124.75550" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.315914%7E124.755507&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3159,124.7555,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Domogdog -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7824.237684260948!2d124.73954813790927!3d11.326023405432348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e443bfba261%3A0xcab6fb8ab9caa25!2sDomogdog%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341070258!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3302/124.7460" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.33020/124.74600" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.330221%7E124.745979&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3302,124.7460,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Duka -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31294.291824028864!2d124.76605740198016!3d11.350300785451715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33081208cadde12f%3A0xaebcf4930e0be327!2sDuka%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341110284!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3616/124.7819" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.36160/124.78190" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.36161%7E124.781942&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3616,124.7819,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Guindaohan -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15649.960828849713!2d124.71842023422178!3d11.298836322133244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080f1e15bcfbd3%3A0xc77106c90b7a4a7b!2sGuindaohan%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341138375!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2969/124.7278" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.29690/124.72780" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.296892%7E124.727783&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2969,124.7278,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Hiagsam -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15651.081150144473!2d124.7692172342158!3d11.278289272439787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080c03561534dd%3A0xe9a3f1b61b8325b6!2sHiagsam%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341165145!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2781/124.7753" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.27810/124.77530" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.27808%7E124.775333&style=a&lvl=15.0" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2781,124.7753,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Hilaba -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7824.561279884067!2d124.73090268790838!3d11.314186355476458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e560fe60447%3A0x936043a5b5538bad!2sHilaba%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341190297!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3115/124.7396" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3115/124.7396" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3115~124.7396&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3115,124.7396,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Hinugayan -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15649.69944824186!2d124.77631223422323!3d11.303624822061826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080c3242f2323f%3A0x6bf3b877b9ddcae1!2sHinugayan%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341220882!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3013/124.7907" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3013/124.7907" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3013~124.7907&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3013,124.7907,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Ibag -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15649.392595342013!2d124.79398523422478!3d11.309243821978002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080db3d57f6501%3A0x56fc5805850dc955!2sIbag%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341238724!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3221/124.8012" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3221/124.8012" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3221~124.8012&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3221,124.8012,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Minuhang -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15648.222894169565!2d124.7431967342311!3d11.330637821658959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e1535235da7%3A0xbdbd1965bf5727e1!2sMinuhang%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341257363!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3390/124.7577" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3390/124.7577" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3390~124.7577&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3390,124.7577,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Minuswang -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7824.3909253651045!2d124.72085463790908!3d11.320419405453203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080fac6dc6f7cd%3A0x28210a1725a5e248!2sMinuswang%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341279277!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3133/124.7222" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3133/124.7222" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3133~124.7222&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3133,124.7222,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Pikas -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15650.201697802722!2d124.75489773422048!3d11.294421822199096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e999ac030ff%3A0x7aeab653102e72e9!2sPikas%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341300638!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2905/124.7664" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.2905/124.7664" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.2905~124.7664&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2905,124.7664,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Pitogo -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15651.224897637472!2d124.77303968421504!3d11.275650222479163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080c05a738c41b%3A0x9c1e0454f802f150!2sPitogo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341322767!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2649/124.7897" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.2649/124.7897" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.2649~124.7897&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2649,124.7897,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Poblacion Dist. I -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.1542785453016!2d124.73181612415102!3d11.323431938860537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e5209fddcc9%3A0xbe877bb1c6df3753!2sPoblacion%20Dist.%20I%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341348335!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3266/124.7338" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3266/124.7338" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3266~124.7338&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3266,124.7338,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Poblacion Dist. II -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.202308946726!2d124.73442747415103!3d11.319918538863787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e51124d83a7%3A0xeb3cec6aa8c64fd2!2sPoblacion%20Dist.%20II%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341375015!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3204/124.7364" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3204/124.7364" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3204~124.7364&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3204,124.7364,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Poblacion Dist. III -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.1432504202653!2d124.7331649741511!3d11.324238488859775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e4e0bf52361%3A0x53b25b037c910774!2sPoblacion%20Dist.%20III%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341701408!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3256/124.7363" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3256/124.7363" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3256~124.7363&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3256,124.7363,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Poblacion Dist. IV -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.161682151889!2d124.73693412415095!3d11.322890438861076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e4fdfd21421%3A0x100b329b603fdad6!2sPoblacion%20Dist.%20IV%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341725905!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3230/124.7404" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3230/124.7404" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3230~124.7404&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3230,124.7404,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Poblacion Dist. V -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.1304390194177!2d124.73520262415092!3d11.325175388858929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e4e56bd3331%3A0x22ba573864c25de8!2sPoblacion%20Dist.%20V%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341755796!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3258/124.7386" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3258/124.7386" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3258~124.7386&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3258,124.7386,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Poblacion Dist. VI -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.1860637295363!2d124.73875712415096!3d11.321106988862685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e5a993b3b07%3A0x43515b97f7d60a30!2sPoblacion%20Dist.%20VI%20(New%20Road)%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341776474!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3206/124.7448" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3206/124.7448" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3206~124.7448&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3206,124.7448,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Pongso -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15651.010951523713!2d124.7546452342162!3d11.279577822420563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080eaf97033935%3A0x2eefa32f91a6228f!2sPongso%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341805971!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2851/124.7700" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.2851/124.7700" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.2851~124.7700&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2851,124.7700,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Roosevelt -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15650.223624839544!2d124.7727421342204!3d11.2940198722051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080c24f29ef1f3%3A0x9eac6a8dd7d50775!2sRoosevelt%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341838867!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2905/124.7821" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.2905/124.7821" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.2905~124.7821&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2905,124.7821,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- San Isidro -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15649.301613673555!2d124.72256378422531!3d11.310909321953165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080efef762e2c1%3A0x8409e59f223e4497!2sSan%20Isidro%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341860260!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3058/124.7319" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3058/124.7319" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3058~124.7319&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3058,124.7319,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- San Roque -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7824.744399772987!2d124.76975908790806!3d11.307482455501486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080c2abb719c67%3A0x8295c52e007dc79b!2sSan%20Roque%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341924743!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3053/124.7774" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3053/124.7774" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3053~124.7774&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3053,124.7774,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Santa Rosa -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31301.520741765307!2d124.77986425190272!3d11.284176239396288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080c6a3f06b3b9%3A0xc619d9b0ed728b16!2sSanta%20Rosa%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341963154!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.2941/124.8050" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.2941/124.8050" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.2941~124.8050&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.2941,124.8050,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Santarin -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7824.362683658021!2d124.72466108790917!3d11.32145240544926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080facd4dc0887%3A0xdfd514db969f4ef3!2sSantarin%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696341980488!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3232/124.7277" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3232/124.7277" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3232~124.7277&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3232,124.7277,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
      </div>

      <!-- Tutug-an -->
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15649.504423764982!2d124.74138923422424!3d11.307196372008555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080ef4adf7d55f%3A0xa1c4c334552e2bf2!2sTutug-an%2C%20Barugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1696342000660!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="map-text">
          View Location at:
          <a href="https://www.openstreetmap.org/#map=15/11.3074/124.7530" target="_blank">OpenStreetMap&#x1F517;</a>
          <a href="https://opentopomap.org/#map=15/11.3074/124.7530" target="_blank">OpenTopoMap&#x1F517;</a>
          <a href="https://www.bing.com/maps?cp=11.3074~124.7530&style=a&lvl=15" target="_blank">Bing Aerial&#x1F517;</a>
          <a href="https://www.google.com/maps/@11.3074,124.7530,2886m/data=!3m1!1e3" target="_blank">Google Maps&#x1F517;</a>
        </div>
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
  // Initialize the map
const mymap = L.map('map').setView([11.3167, 124.7333], 20);

// Add a tile layer from OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: 'Route for the nearest evacuation center from your location'
}).addTo(mymap);

// Create an SVG icon for the pins
const svgIcon = L.divIcon({
    className: 'custom-svg-icon',
    html: '<svg xmlns="http://www.w3.org/2000/svg" fill="#ff0000" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg>',
    iconSize: [25, 25], // Set the icon size
    iconAnchor: [12, 30], // Set the icon anchor to center bottom
});

// Create a layer for the pins
const pinsLayer = L.layerGroup().addTo(mymap);

// Function to calculate and add routing to the nearest pin
function calculateAndAddRouting(userLat, userLng, data) {
    let nearestPin = null;
    let nearestDistance = Infinity;

    data.forEach((pin) => {
        const pinLat = pin.lat;
        const pinLng = pin.lng;
        const distance = Math.sqrt((pinLat - userLat) ** 2 + (pinLng - userLng) ** 2);

        if (distance < nearestDistance) {
            nearestDistance = distance;
            nearestPin = pin;
        }
    });

    // Add routing control to the nearest pin
    L.Routing.control({
        waypoints: [
            L.latLng(userLat, userLng),
            L.latLng(nearestPin.lat, nearestPin.lng)
        ],
        lineOptions: {
            styles: [{ color: 'blue', opacity: 0.6, weight: 4 }]
        }
    }).addTo(mymap);
}

// Fetch data from the PHP script
fetch('get_evac_centers.php') // Replace with the correct path to your PHP script
    .then(response => response.json())
    .then(data => {
        // Add markers for evacuation centers
        data.forEach((center) => {
            const marker = L.marker([center.lat, center.lng], {
                icon: svgIcon,
                draggable: false,
            }).addTo(pinsLayer).bindPopup(center.name);
        });

        // Automatically calculate and add routing once data is fetched
        navigator.geolocation.getCurrentPosition(function (position) {
            const userLat = position.coords.latitude;
            const userLng = position.coords.longitude;

            calculateAndAddRouting(userLat, userLng, data);
        });
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });

// Fit the map to the pins after adding markers
pinsLayer.on('add', function () {
    const bounds = pinsLayer.getBounds();
    mymap.fitBounds(bounds);
});

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