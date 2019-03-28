<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1> LOCK </h1>

<h2>Description</h2>
<p>
	The system presented here allows me to lock and unlock my front door remotely.
	It consists of an actuator connected to the door's original locking mechanism and controlled by an Wemos D1 mini ESP8266 WiFi module.
	The ESP8266 receives commands through either its self-hosted web server or MQTT and controls the actuator to lock or unlock the door.
</p>
<p>
    I chose an MG996R as an actuator for its sufficient torque, built in angle controller and input voltage which matches that of the Wemos D1 mini.
    Most of the parts for this project have been 3D printed and designed using Fusion 360.
</p>
<p>
    The servo's shaft and the door's locking mechanism are connected with a specially designed part that allows indepedant rotation of both up to 90 degrees.
    This allows the lock to be operated normally without having the servo interfering.
</p>
<p>
    Feedback is provided using two limits switches.
</p>

<h2>Video</h2>
<?php video("https://www.youtube.com/embed/oReezruJR1E");?>

<h2>Photos</h2>
<?php gallery("/images/projects/iot/lock/gallery/");?>

<h2>Hardware</h2>
<h3>Parts</h3>
<ul>
<li>Wemos D1 Mini</li>
<li>MG996R servo</li>
<li>2x Limit switch</li>
<li>2x LED + resistor</li>
</ul>

<h3>Schematic</h3>
<img onclick="open_image_modal(this)" src="/images/projects/iot/lock/lock_schematic.png"/>
<h3>CAD</h3>
<p>
	Here's a picture of the mechanical assembly of the 3D printed parts on Fusion 360:
</p>
<img onclick="open_image_modal(this)" src="/images/projects/iot/lock/cad.png"/>
<p>
	STL files available on <a href="https://www.thingiverse.com/thing:2462482">Thingiverse</a>
</p>

<h2>Software</h2>
<p>
	Code Available on <a href="https://github.com/maximemoreillon/iot_lock">GitHub</a>.
</p>
<h3>Dependencies</h3>
<ul>
	<li>Arduino IDE with <a href="https://github.com/esp8266/Arduino">support for ESP8266</a></li>
	<li><a href="https://github.com/marvinroger/async-mqtt-client">Marvinroger's Async MQTT client</a></li>
	<li><a href="https://github.com/me-no-dev/ESPAsyncTCP">ESPAsyncTCP</a></li>
</ul>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
