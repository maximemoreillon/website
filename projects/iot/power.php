<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Power monitor</h1>
<h2>Project description</h2>
<p>
    				Ignorance is a bliss: When you don't know how much power your air conditioner draws, it's easy to leave it running without too much guilt. And then the electricity bill comes...
    				The objective of this project is to get an approximate measurement of how much electric power is being used in my apartment. For this purpose, I followed
    				<a href="https://openenergymonitor.org/forum-archive/node/58.html">OpenEnergyMonitor's guide</a>.
    			</p>
<h2> Photos </h2>
<?php gallery("/images/projects/iot/power/gallery/");?>

<h2> Hardware </h2>
<h3>Parts</h3>
<ul>
<li>Wemos D1 mini</li>
<li>YHDC SCT-013-000 current transformer</li>
<li>DHT22 temperature and humidity sensor</li>
</ul>
<h3>Schematic</h3>
<img onclick="open_image_modal(this)" src="/images/projects/iot/power/power_schematic.png"/>
<p>
	The breakout board for the CT sensor is detailed hereunder:
</p>
<img onclick="open_image_modal(this)" src="/images/projects/iot/power/power_breakout_schematic.png"/>

<h2>Software</h2>
<p>Code available on <a href="https://github.com/maximemoreillon/power_monitor">GitHub</a>.</p>
<h3>Dependencies</h3>
<ul>
  <li>Arduino IDE with <a href="https://github.com/esp8266/Arduino">support for ESP8266</a></li>
  <li><a href="https://github.com/marvinroger/async-mqtt-client">Marvinroger's Async MQTT client</a></li>
  <li><a href="https://github.com/me-no-dev/ESPAsyncTCP">ESPAsyncTCP</a></li>
  <li><a href="https://github.com/openenergymonitor/EmonLib">EmonLib</a></li>
</ul>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
