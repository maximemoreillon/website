<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1> AC CONTROLLER </h1>
<h2>Project description</h2>
<p>
	Operating an air conditioner isn't exactly cheap. So, if you forget yours on when leaving for a few days, you might put a dent in your wallet. That's why I wanted a system that allows me to monitor and control mine remotely.
</p>
<p>
	Similarly to other projects, an ESP8266 is used to provide wirless communication to the system.
	I went for a Wemos D1 mini because it provides enough memory and GPIOs for this application as well an on-board USB port for power and serial debugging.
	The ESP8266 is setup so as to communicate to the home automation hub via MQTT, implemented using <a href="https://github.com/marvinroger/async-mqtt-client">Marvinroger's Async MQTT client</a>.
	Additionaly, its firmware can be updated over the air (OTA) so it doesn't have to be connected to a PC each time.
</p>
<p>
	Since my air conditioner is rented with the apartment, permanent modifications were not an option.
	Moreover, the only apparent way to control the unit is by infrared, using the provided remote controller.
	Thus, I decided to attach an IR emitter (IR LED) close to the air conditioner's IR receiver and get the ESP8266 to drive it so it sends commands in the same way as the original remote.
</p>
<p>
	I recorded a few of the signals of the original remote controller with an IR receiver connected to an arduino running a sketch provided by <a href="https://www.analysir.com/blog/2014/03/19/air-conditioners-problems-recording-long-infrared-remote-control-signals-arduino/">AnalasIR</a>.
	The IR signals consist of pulses and pauses of varying lengths and I followed <a href="https://perhof.wordpress.com/2015/03/29/reverse-engineering-hitachi-air-conditioner-infrared-remote-commands/">perhof's guide</a> to decode them. The first pulse and pause are used to initate the communication.
	Then, the length of the pulses is kept constant at about 400us. The pauses however are either about 1180 us or 380us long, which translate to a binary HIGH and LOW respectively.
	Converting an IR signal this way yields a sequence of 264 bits or 33 bytes.
</p>
<p>
	By analyzing those 33 bytes for various button presses of the remote, the following can be identified:
</p>
<ul>
	<li>starting from byte 3 (indexing starting at 0), every even byte is the bitwise NOT of the previous one. </li>
	<li>Temperature is stored in reverse order on 5 bits starting at bit 106.</li>
	<li>The operation mode (colling, heating) is stored on 3 bit starting at bit 204.</li>
	<li>The fan speed is defined by bits 200 to 202</li>
	<li>Bit 220 defines wether the air conditioner should be turned on or off.</li>
</ul>
<p>
	Using this information, any desired settings can be encoded into a binary sequence and sent to the air conditioner with the IR emitter using the ESP8266.
</p>
<h2>Video</h2>
<?php video("https://www.youtube.com/embed/c-dv-OPsKKY");?>


<h2>Photos</h2>
<?php gallery("/images/projects/iot/ac/gallery/");?>

<h2>Hardware</h2>
<h3>Parts</h3>
<ul>
	<li>Wemos D1 Mini</li>
	<li>HC-SR501 PIR sensor</li>
	<li>DHT22 temperature and humidity sensor</li>
	<li>Infrared LED</li>
	<li>NPN transistor</li>
</ul>
<h3>Schematic</h3>
<img onclick="open_image_modal(this)" src="/images/projects/iot/ac/ac_schematic.png"/>
<h2>Software</h2>
<p>Code Available on <a href="https://github.com/maximemoreillon/ac_controller">GitHub</a>.</p>
<h3>Dependencies</h3>
<ul>
<li>Arduino IDE with <a href="https://github.com/esp8266/Arduino">support for ESP8266</a></li>
<li><a href="https://github.com/marvinroger/async-mqtt-client">Marvinroger's Async MQTT client</a></li>
<li><a href="https://github.com/me-no-dev/ESPAsyncTCP">ESPAsyncTCP</a></li>
</ul>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
