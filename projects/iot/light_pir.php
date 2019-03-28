<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1> Light and PIR combo </h1>
<p>
	This project is similar to the wifi light controller except that this one also integrates a PIR motion sensor.
</p>
<p>
	Lights triggered by a motion sensor can be bought for cheap. However, their motion sensor is entirely deidcated to turning the light on and off. Thus, they cannot be used for other applications such as intrusion detctors. With this project, the motion sensor output can not only be used to turn the light on or off but also trigger any action available in my home automation system.
</p>
<p>
	To control the light, a homemade TRIAC breakout board is used. I used a TRIAC instead of an electromechanical relay because of noise concerns.
</p>

<h1>Photos</h1>
<?php gallery("/images/projects/iot/light_pir/gallery/");?>

<h2>Hardware</h2>
<h3>Parts</h3>
<ul>
<li>Wemos D1 mini</li>
<li>HC-SR501 PIR motion sensor</li>
<li>TRIAC breakout board</li>
<li>AC-DC converter</li>
</ul>
<h3> Schematic </h3>
<h4> Main board </h4>
<img onclick="open_image_modal(this)" src="/images/projects/iot/light_pir/light_pir_combo_schem.png"/>
<h4> TRIAC breakout board </h4>
<img onclick="open_image_modal(this)" src="/images/projects/iot/light_pir/triac_breakout_schem.png"/>
<h2>Software</h2>
<p>
	Code available on <a href="https://github.com/maximemoreillon/light_pir_combo">GitHub</a>.
</p>
<h3>Dependencies</h3>
<ul>
<li>Arduino IDE with <a href="https://github.com/esp8266/Arduino">support for ESP8266</a></li>
<li><a href="https://github.com/marvinroger/async-mqtt-client">Marvinroger's Async MQTT client</a></li>
<li><a href="https://github.com/me-no-dev/ESPAsyncTCP">ESPAsyncTCP</a></li>
</ul>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
