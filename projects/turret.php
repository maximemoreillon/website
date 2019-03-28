<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>Turret</h1>
<h2>Project description</h2>
<p>
				I wanted a pan-tilt platform to mount a camera and ended up with this overkill design.
				The turret can be controlled either via the embedded Arduino Nano's USB port or wirelessly with an on board NRF24L01 module.
				When used with a wireless camera, the video stream can be sent to the <a href="arg.php">ARGs</a> and the turret can move according to the latter's head motion.
			</p>
<iframe allowfullscreen="" frameborder="0" height="500" src="https://www.youtube.com/embed/-2XWoE9WY0A" width="300"></iframe>
<h2>Hardware</h2>
<h3>Parts</h3>
<ul>
<li>Arduino Nano</li>
<li>NRF24L01+</li>
<li>2x High torque servo</li>
<li>2x DC-DC converter</li>
<li>2x 18650 battery</li>
</ul>
<h3>Schematic</h3>
<a href="images/turret_schematic.png"><img src="images/turret_schematic.png" style="width:700px;"/></a>
<p>
				Note: the resistor values are wrong
			</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>