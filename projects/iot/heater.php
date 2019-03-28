<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Electric heater controller</h1>
<h2>Project description</h2>
<p>
	The thermal insulation of my apartment not being the best, I had to buy an electric heater in order not to freeze during cold winter nights.
	However, the one I got was probably too powerful for my needs and letting it run for too long would heat up my place too much.
	Thus, I added a wifi enabled controller to it so its operations are controlled by my home automation system.
</p>
<p>
  The heater itself is pretty silent. However, the click of an electromechanical relay might get annoying during the night so I chose to use a solid state relay to turn the heater on and off.
</p>
<p>
  The electronics are installed in a 3D printed enclosure attached to the back of the heater.
</p>

<h2> Photos</h2>
<?php gallery("/images/projects/iot/heater/gallery/");?>

<h2> Hardware </h2>
<h3>Parts</h3>
<ul>
    <li>Wemos D1 mini</li>
    <li>SSR-25DA Solid state relay</li>
    <li>AC-DC power fupply</li>
    <li>LED + resistor</li>
    <li>Push button</li>
</ul>

<h3>Schematic</h3>

<img onclick="open_image_modal(this)" src="/images/projects/iot/heater/heater_schematic.png"/>


<h2>Software</h2>
<p>
	Code available on <a href="https://github.com/maximemoreillon/heater"> GitHub </a>
</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
