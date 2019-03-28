<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>BRIEFCASE</h1>
<h2>Project description</h2>
<p>
	This briefcase is fitted with an electronic lock and a fingerprint reader so as to only open if its owner's finger is presented to the latter.
	Additionally, it is also equipped with a bluetooth module, which enables unlocking using a smartphone or computer.
	It might be better to avoid taking the plane with it though...
</p>
<p>
	The briefcase is powered by three 18650 Lithium Ion batteries whose lifespan I haven't had the opportunity to check.
	Should they start running out of capacity, the red LED at the front of the case will blink.
	Additionally, the battery level can be checked at all time via bluetooth.
	Also, if the battery level isn't sufficient to drive the lock, external 12V can be applied using a DC socket on the side of the case.
</p>

<h2>Video</h2>
<?php video("https://www.youtube.com/embed/XIz2tcNXr8w");?>

<h2>Photos</h2>
<?php gallery("/images/projects/briefcase/gallery/");?>

<h2>Hardware</h2>
<h3>Parts</h3>
<ul>
<li>Arduino pro mini 5V</li>
<li>Lock-style solenoid</li>
<li>ZFM-20 fingerprint reader</li>
<li>HC-05 bluetooth module</li>
<li>DC-DC Buck converter</li>
<li>3x 18650 battery</li>
<li>2x LED + resistor</li>
<li>Power switch</li>
</ul>
<h3>Schematic</h3>
<img onclick="open_image_modal(this)" src="/images/projects/briefcase/fingerprint_briefcase_schem.png"/>

<h2>Software</h2>
<p>
	Code Available on <a href="https://github.com/maximemoreillon/briefcase">GitHub</a>.
</p>
<h3>Dependencies</h3>
<ul>
<li>Adafruit fingerprint reader library</li>
</ul>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
