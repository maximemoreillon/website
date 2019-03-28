<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>DHT PIR COMBO</h1>
<h2>Project description</h2>
<p>
	Temperature, humidity and motion sensor in a single package
</p>

<h2>Photos</h2>
<?php gallery("/images/projects/iot/dht_pir/gallery/");?>

<h2>Hardware</h2>
<h3>Parts</h3>
<ul>
<li>Wemos D1 mini</li>
<li>HC-SR501 PIR motion sensor</li>
<li>DHT22 temperature and humidity sensor</li>
</ul>
<h3>Schematic</h3>
<img onclick="open_image_modal(this)" src="/images/projects/iot/dht_pir/dht_pir_schema.png"/>

<h2>Software</h2>
<p>
	Code available on <a href="https://github.com/maximemoreillon/dht_pir_combo">GitHub</a>.
</p>
<h3>Dependencies</h3>
<ul>
<li>Arduino IDE with <a href="https://github.com/esp8266/Arduino">support for ESP8266</a></li>
<li><a href="https://github.com/marvinroger/async-mqtt-client">Marvinroger's Async MQTT client</a></li>
<li><a href="https://github.com/me-no-dev/ESPAsyncTCP">ESPAsyncTCP</a></li>
</ul>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
