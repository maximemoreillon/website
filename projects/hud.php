<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1> HUD Goggles </h1>
<h2>Project description</h2>
<p>
	This headset enables the overlay of information on top of its user's field of view.
	The field of view of the user is captured by a camera and then fed to video goggles, while a MAX7456 OSD chip overlays text on the video feed.
	The front camera has been chosen to be sensitive to near infrared light, which allows the device to be used as night vision goggles when paired with IR projectors
	Additionally, the video input source can be changed to any composite signal, which allows for example the user to see from a drone's camera or to use have a head mounted display for a raspberry pi.
</p>

<h2>Video</h2>
<?php video("https://www.youtube.com/embed/jYXiF9gdmnc");?>

<h2>Photos</h2>
<?php gallery("/images/projects/hud/gallery/");?>

<h2>Hardware</h2>
<h3>Parts</h3>
<ul>
	<li>Video glasses</li>
	<li>Mini camera with night vision capabilities</li>
	<li>Arduino pro mini 5V</li>
	<li>MPU-6050 Accelerometer and gryo combo</li>
	<li>HMC5883L Magnetometer</li>
	<li>NRF24L01+ wireless transciever</li>
	<li>MAX7456 OSD generator</li>
	<li>2x DC-DC buck converter</li>
	<li>2x 14500 Lithium-ion batteries</li>
</ul>
<h3>Schematic</h3>
<img onclick="open_image_modal(this)" src="/images/projects/hud/arg_schem.png"/>
<p>
	Note: Resistors are missing around the MAX7456.
</p>

<h2>Software</h2>
<p>
	Code available on <a href="https://github.com/maximemoreillon/hud_goggles">GitHub</a>.
</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
