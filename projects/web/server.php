<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1> HOME SERVER </h1>
<h2>Project description</h2>
<p>
	Thes server has been built from scratch with an Odroid XU4 at its core.
	The XU4 has been chosen for its low power consumption, decent processing power and USB 3.0 connectors for high transfer rates.
	Two hard drives are connected to the board using SATA to USB 3.0 adapters.
	As a frame, a modular shelf from Daiso (Japanese dollar store) has been used so hardware can easily added or removed. Parts are secured using 3D printed brackets that clamp onto the mesh.
</p>
<p>
	Currently, the server is running the following software:
</p>
<ul>
	<li>LAMP server with NextCloud instance</li>
	<li>Mosquitto MQTT broker</li>
	<li>Home assistant</li>
	<li>Samba server</li>
	<li>NodeJS</li>
</ul>
<br/>

<h2>Photos</h2>
<?php gallery("/images/projects/server/gallery/");?>

<h2>Hardware</h2>
<h3>Parts</h3>
<ul>
	<li><a href="http://www.hardkernel.com/main/products/prdt_info.php?g_code=G143452239825">Odroid XU4Q</a></li>
	<li>2x Seagate BarraCuda 1TB HDD</li>
	<li>2x Inateck USB 3.0 to SATA adapter</li>
	<li>20A 12V AC-DC Power supply</li>
	<li>10A DC-DC converter</li>
	<li>2x 60mm brushless fan</li>
	<li>2x fan speed controller</li>
</ul>

<h3>Wiring diagram</h3>
<img onclick="open_image_modal(this)" src="/images/projects/server/server_wiring.png" style="width:400px;"/>
<h2>Software</h2>
<p>
	Setup scripts are available on <a href="https://github.com/maximemoreillon/odroid_xu4_server_setup">GitHub</a>.
</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
