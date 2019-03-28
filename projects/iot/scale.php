<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Scale</h1>

<h2>Project description</h2>
<p>
	Until recently, I was keeping track of my body weight with an excel sheet, manually writing down the reading of my scale on a new cell each time.
	Those terrible times are now over since I modified to scale to do the job for me.
	This was done by replacing the electronics of a cheap digital scale by an ESP8266 wifi module which sends the measurements to <a href="https://thingspeak.com/">ThingSpeak</a>.
	Only the original load cells have been kept and used with an HX711 to get the weight measurement.
</p>

<h2>Video</h2>
<?php video("https://www.youtube.com/embed/msVoXorvrb0");?>

<h2>Photos</h2>
<?php gallery("/images/projects/iot/scale/gallery/");?>

<h2>Hardware</h2>
<h3>Parts</h3>
<ul>
<li>Wemos D1 Mini</li>
<li>HX711 load cell amplifier</li>
<li>SSD1306 OLED display</li>
</ul>
<h3>Schematic</h3>
<img onclick="open_image_modal(this)" src="/images/projects/iot/scale/scale_schematic.png"/>
<h2>Software</h2>
<p>
	Code available on <a href="https://github.com/maximemoreillon/scale">GitHub</a>.
</p>
<h3>Dependencies</h3>
<ul>
	<li>Arduino IDE with <a href="https://github.com/esp8266/Arduino">support for ESP8266</a></li>
	<li><a href="https://github.com/marvinroger/async-mqtt-client">Marvinroger's Async MQTT client</a></li>
	<li><a href="https://github.com/me-no-dev/ESPAsyncTCP">ESPAsyncTCP</a></li>
	<li><a href="https://github.com/queuetue/Q2-HX711-Arduino-Library">Q2-HX711-Arduino-Library</a></li>
	<li><a href="https://github.com/squix78/esp8266-oled-ssd1306">esp8266-oled-ssd1306</a></li>
</ul>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
