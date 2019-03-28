<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1> BATTEERYLESS SMARTPHONE </h1>
<p>
				Any android smartphone can be turned into an IP camera using apps like IP Webcam.
				However, having your smartphone constantly streaming video is going to drain its battery rather quickly.
				An easy solution would be to have the device plugged in at all times, but this can easily harmful to the battery due to constant charge/discharge cycles.
				Here's a picture of a battery that used to be in a smartphone used as an IP camera for a few months:
			</p>
<a href="images/swollen_battery.jpg"><img src="images/swollen_battery.jpg" style="width:500px;"/></a>
<p>
				To avoid this problem, the smartphone can be powered directly from a DC voltage source.
				To do so, the battery must be disconnected and, most likely, removed.
				During the process it is important to take extra care in order not to short or puncture the battery, since those can violently catch fire or release toxic chemicals.
				Smartphones batteries often have three terminals, two of which being the usual positive and negative electrodes.
				The third one is likely the output of a temperature sensor.
				Wires need to be soldered to the phone's PCB at any point electrically connected to where the positive and negative terminals of the battery connector.
				Usually, the PCB features test points in the vincinity of the battery connector which can be used for this purpose.
			</p>
<a href="images/wire_soldering.jpg"><img src="images/wire_soldering.jpg" style="width:500px;"/></a>
<p>
				Power can now be applied to the smartphone using the soldered wires.
				Smartphone batteries usually have an output voltage between 3.6 and 4.2V depending on their charge level.
				To provide such voltage, an AC-DC converter can be used.
				However, AC-DC converters with an output voltage in this range are rather rare.
				Another option is to use an AC-DC converter with a 9V or 12V output and to drop it down to 4V using a DC-DC converter.
				No matter the option, the power supply should provide at least 2 amperes to be sure the phone has enough power to run properly.
			</p>
<a href="images/battery_less_smartphone_photo.jpg"><img src="images/battery_less_smartphone_photo.jpg" style="width:500px;"/></a>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>