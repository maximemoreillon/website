<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>SONOFF</h1>
<p>
  ITEAD's SONOFF are cheap ESP8266 controlled relays that can be used to switch devices ON and OFF via Wifi.
  They come preinstalled with ITEAD's firmware, which can be replaced by one that would fit different needs.
</p>
<h2> Pinout </h2>
<img onclick="open_image_modal(this)" src="/images/tutorials/iot/sonoff/sonoff_pinout.jpg"/>

<h2> Flashing settings </h2>
<p>
	The firmware can be flashed with the Arduino IDE, just like any ESP8266. Here are the Flashing settings:
</p>
<ul>
  <li>Type of board: Generic ESP8266</li>
  <li>Flash Mode: DIO</li>
  <li>Flash Frequency: 40MHz</li>
  <li>CPU Frequency: 80MHz</li>
  <li><b>Flash Size: 1M (64K SPIFFS)</b></li>
  <li>Debug Port: Disabled</li>
  <li>Debug Level: None</li>
  <li>Reset Method: ck</li>
  <li>Upload Speed: 115200</li>
</ul>
<p>
	Basically, only the flash size has to be edited from the default parameters of the generic ESP8266 board type
</p>
<p>
	Note: on newer SONOFFs, the flash mode must be changed to DOUT.
</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
