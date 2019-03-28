<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>Ammo counter</h1>
<h2>Project description</h2>
<p>
				This device, when attached to a firearm, informs its user of the remaining ammunition.
			</p>
<p>
				It works using an ADXL335 accelerometer whose output is read by a Texas Instrument MSP430 microcontroller.
				When the firearm is discharged, a peak in acceleration due to the recoil is registered and the ammunicationcount stored in the memory of the MSP430 is decreased by one.
				The ammunition count is shown to the user using a 4 digit 7 segment display.
				Because the MSP430 didn't have enough I/O pins to drive the display, a shift registered has been used as an intermediator.
				If a shot has been misdetected, the user can manually adjust the counter with the up and down buttons.
				When the counter reaches zero, it can be reset to its default value using the reset button.
				Long pressing the reset button enters the default value editing mode.
				In this mode, the default value of the counter can be set using the up and down buttons.
			</p>
<a href="images/ammo_counter_photo.jpg"><img src="images/ammo_counter_photo.jpg" style="width:500px;"/></a>
<h2>Schematic</h2>
<a href="images/ammo_counter_schem.png"><img src="images/ammo_counter_schem.png" style="width:800px;"/></a>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>