<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Drone</h1>
<h2>Description</h2>
<p>
	Homemade quadcopter. This was an interative project which went through two versions.
</p>

<h2>Version 1</h2>
<p>
	The first version of the quadcopter was equipped with homemade electronics centered around an Arduino nano and MPU-6050 accelerometer + gryo.
	The frame was built out of carbon fiber.
	Communication with the drone was achieved using an Xbee module and either a custom made handheld controller or a processing application running on a computer.
	However, due to difficulties in communicating with the drone such way, version 1 was scrapped.
</p>

<?php gallery("/images/projects/drone/v1/gallery/");?>


<h2>Version 2</h2>
<p>
	For the second iteration of this project, the frame was rebuilt with arms made out of aluminium. This provided a less brittle structure.
	The electronics was replaced with a KK2.0 quadcopter board from hobbyking and a RC trasnceiver + remote controller which would provide a more reliable way to pilot the drone.
</p>

<?php gallery("/images/projects/drone/v2/gallery/");?>


 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
