<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>CELING LIGHT CONTROLLER</h1>
<h2>Project description</h2>
<p>
	The objective of this project is to modify off-the-shelf ceiling lights so they can be controlled remotely.
	This is done by adding an ITEAD SONOFF on the power line of the lights.
	The firmware of the SONOFF has been replaced by a custom one so as to allow communication over MQTT.
</p>

<h2>Photos</h2>
<?php gallery("/images/projects/iot/ceiling_light/gallery/");?>

<h2>Software</h2>
<p>
	Code available on <a href="https://github.com/maximemoreillon/sonoff">GitHub</a>.
</p>

<h3>Dependencies</h3>
<ul>
	<li>Arduino IDE with <a href="https://github.com/esp8266/Arduino">support for ESP8266</a></li>
	<li><a href="https://github.com/marvinroger/async-mqtt-client">Marvinroger's Async MQTT client</a></li>
	<li><a href="https://github.com/me-no-dev/ESPAsyncTCP">ESPAsyncTCP</a></li>
</ul>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
