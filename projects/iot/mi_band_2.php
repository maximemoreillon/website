<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>HOME AUTOMATION WITH XIAOMI MI BAND 2</h1>
<h2>Project description</h2>
<p>
	Smartwatches can be rather expensive and tend to be known for their poor battery life.
	On the other hand, Xiaomi's Mi band 2 is cheap and its battery lasts for up to 20 days.
	However, the Mi band 2 is mainly limited to fitness tracking funtioncs, at least without the appropriate apps.
  The objective of this project was to take advantage o fthe Mi Band 2's connection with a smartphone to control IoT devices.
</p>

<h2>Video</h2>
<?php video("https://www.youtube.com/embed/i9QoAukmoGs"); ?>


<h2>Implementation</h2>
<h3>Required apps</h3>
<ul>
<li><a href="https://play.google.com/store/apps/details?id=net.dinglisch.android.taskerm">Tasker</a></li>
<li><a href="https://play.google.com/store/apps/details?id=net.nosybore.mqttpublishplugin">MQTT Publisher</a></li>
<li><a href="https://play.google.com/store/apps/details?id=cz.zdenekhorak.mibandtools">Mi Band tools</a></li>
<li><a href="https://play.google.com/store/apps/details?id=xtracer.miband2funcbutton">Mi Band 2 func button</a></li>
</ul>
<h3>Using the Mi band 2 button to trigger actions</h3>
<p>
	Using Mi band 2 func button, taps on the Mi band 2 buttons can trigger tasker tasks on a smartphone.
	Thus, using Tasker's MQTT client plugin, the Mi band 2 can control IoT devices.
</p>
<h3>Using the Mi band 2 display for visual feedback</h3>
<p>
	The app called Tools & Mi band 2 provides tasker with the ability to send custom notifications to the band.
	Thus, visual and haptic feedback can be provided to the band when tapping its button.
	For example, a notification saying "OK" can be displayed when the lights are turned on by tapping the button.
</p>
<h3>Tasker setup</h3>
<p>
	I setup tasker so that a triple tap on the Mi band 2 enables a menu by showing the user the menu item currently selected.
	Triple tapping again triggers the selected item.
	Single taps cycle through menu items in ascending order while double taps cycles in descending order.
</p>
<p>
  The Tasker profiles are available on my <a href="https://github.com/maximemoreillon/mi_band_2_iot">Github</a>
</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
