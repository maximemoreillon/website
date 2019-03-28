<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>SONOFF B1</h1>
<p>
	The SONOFF B1 is an RGBW light bulb controlled by an ESP8285 wifi chip, which can be programmed using the Arduino IDE.
</p>
<p>
	Flashing the SONOFF B1 with a custom firmware can be done easily as the appropriate signals are available through pads on the main board.
	Just like any ESP8266, flash mode is enabled by having GPIO 0 tied to ground at boot.
</p>
<h2> Flash settings </h2>
<p>
	Even though the SONOFF B1 is equipped with an ESP8285, OTA updates won't work if this chip is selected in the Arduino IDE.
	Instead, the following settings happen to work just fine:
</p>
<ul>
<li>Board type: Generic ESP8266</li>
<li>Flash mode: DOUT</li>
<li>Flash size: 1M (64K SPIFFS)</li>
</ul>
<p>
	The other options are to be left as they are by default.
</p>
<h2> Driving the LEDS </h2>
<p>
	The SONOFF B1 is equipped with an MY9231 LED driver. To figure out how the interface between the ESP8285 and the MY9231 works, I borrowed code from the <a href="https://github.com/arendst/Sonoff-Tasmota">Tasmota project</a>.
</p>
<h2>Example firmware</h2>
<p>
	A simple firmwarwe that enables MQTT communication on the SONOFF B1 is available on <a href="https://github.com/maximemoreillon/sonoff_b1">my GitHub profile</a>
</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>