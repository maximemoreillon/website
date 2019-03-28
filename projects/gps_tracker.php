<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>GPS tracker</h1>
<h2>Description</h2>
<p>
	This project consists of a GPS beacon that can be tracked remotely.
  The beacon is built around a GPS module and a wireless transciever.
  Here, two versions have been designed and differ from each other by the transciever used:
  One uses an Xbee pro and the other an NRF24L01.
  For the NRF24L01 version, a handheld tracker has been built to display the location of the beacon.
</p>


<h2>Xbee pro beacon</h2>
<p>
	This GPS beacon used an Xbee pro, providing the device with a range of up to 20km according to the specification sheets.
  Its tracking is performed using by retrieving the data sent via the Xbee transciever using a TTL to USB adapter for instance.
</p>

<h3>Photos</h3>
<?php gallery("/images/projects/gps_tracker/xbee/gallery/");?>

<h3>Hardware</h3>
<h4>Parts</h4>
<ul>
  <li>Arduino pro mini 3.3V</li>
  <li>U-blox NEO-6M GPS module</li>
  <li>Xbeee pro wireless transciever</li>
  <li>14500 Lithium-ion battery</li>
  <li>LED + resistor</li>
  <li>Power switch</li>
</ul>

<h4>Schematics</h4>
<img onclick="open_image_modal(this)" src="/images/projects/gps_tracker/xbee/gps_beacon_xbee_schema.png"/>


<h3>Software</h3>
<p>
	Code available on <a href="https://github.com/maximemoreillon/gps_beacon">GitHub</a>.
</p>




<h2>NRF24L01 + PA + LNA beacon + tracker</h2>
<p>
	This GPS beacon used an NRF24L01 + PA + LNA instead of the Xbee, providing the device with a range of about 1km.
  Tracking the NRF24L01 beacon is achieved using a dedicated handheld tracker.
	The GPS tracker displays the heading and distance to the target on a nokia 5510 LCD display.
	It can also be used in combination to the HUD goggles to display the position of the beacon in its user field of view.
	Additionally, the GPS tracker has a mode to allow it to receive signals from wireless motion sensors.
</p>

<?php gallery("/images/projects/gps_tracker/nrf/gallery/");?>


<h3>Hardware</h3>
<h4>Parts</h4>
<h5>Beacon</h5>
<ul>
  <li>Arduino pro mini 3.3V</li>
  <li>U-blox NEO-6M GPS module</li>
  <li>Xbeee pro wireless transciever</li>
  <li>14500 Lithium-ion battery</li>
  <li>LED + resistor</li>
  <li>Power switch</li>
</ul>

<h5>Tracker</h5>
<ul>
  <li>Arduino pro mini 3.3V</li>
  <li>U-blox NEO-6M GPS module</li>
  <li>Xbeee pro wireless transciever</li>
  <li>14500 Lithium-ion battery</li>
  <li>LED + resistor</li>
  <li>Power switch</li>
</ul>

<h4>Schematics</h4>
<h5>Beacon</h5>
<img onclick="open_image_modal(this)" src="/images/projects/gps_tracker/nrf/gps_beacon_schem.png"/>
<p>
	Note: the resistor values are wrong
</p>

<h5>Tracker</h5>
<img onclick="open_image_modal(this)" src="/images/projects/gps_tracker/nrf/gps_tracker_schem.png"/>

<p>
	Note: the resistor values are wrong
</p>

<h3>Software</h3>
<h4>Beacon</h4>
<p>
	Code available on <a href="https://github.com/maximemoreillon/gps_beacon_nrf">GitHub</a>.
</p>
<h4>Tracker</h4>
<p>
	Code available on <a href="https://github.com/maximemoreillon/gps_tracker">GitHub</a>.
</p>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
