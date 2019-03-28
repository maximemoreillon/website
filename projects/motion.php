<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Wireless motion sensor</h1>
<h2>Description</h2>
<p>
	This is a wireless motion sensor that runs on rechargeable batteries. It can be deployed anywhere and sends a signal using a NRF24L01 wirless module whenever it detects motion.
</p>


<h2>Photos</h2>
<?php gallery("/images/projects/motion_sensor/gallery/");?>

<h2>Hardware</h2>

<h3>Parts</h3>
<ul>
  <li>Arduino pro mini</li>
  <li>NRF24L01+ wireless transciever</li>
  <li>HC-SR501 PIR motion sensor</li>
  <li>14500 Lithium-ion battery</li>
  <li>LED + resistor</li>
  <li>Power switch</li>
  <li>5.5mm x 2.1mm DC socket</li>
  <li>2P JST connector for charge</li>
</ul>

<h3>Schematic</h3>
<img onclick="open_image_modal(this)" src="/images/projects/motion_sensor/wireless_motion_sensor_schema.png"/>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
