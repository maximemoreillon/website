<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1> OFF-GRID SOLAR SETUP </h1>
<h2>Project description</h2>
<p>
	While dumpster diving, I found an inverter and some UPS batteries. So, I bought a solar panel and solar charge controller to create an off-grid solar setup.
</p>

<h2>Photos</h2>
<?php gallery("/images/projects/solar/gallery/");?>

<h2>Hardware</h2>
<h3>Parts list</h3>
<p>Here are the parts of the setup:</p>
<ul>
<li>30W solar panel</li>
<li><a href="http://www.epsolarpv.com/en/index.php/Product/pro_content/id/422/am_id/136">EPRC10-EC solar charge controller</a></li>
<li><a href="http://www.csb-battery.com/english/01_product/02_detail.php?fid=6&amp;pid=21"> 4x CBS GPL1272 12V 7.2Ah UPS batteries</a></li>
<li><a href="http://www.powertite.co.jp/?page=products&amp;cat=1&amp;itm=134">PowerTite FI-S603A-12VDC 600W power inverter</a></li>
</ul>
<h3>Wiring</h3>
<p>
  My inverter can deliver up to 600W, which is 50A at 12V. I have wires coming from each battery to a junction box, where a larger wire provides the concentrated current to the inverter. The 50A are delivered by the four batteries in parallel. Thus, each battery provides around 12.5A.
</p>
<p>
  With those values in mind, tables show that a 1m wire should be of at least AWG 14 for 50A and AWG 18 for 15A. Thus, I used AWG 12 and AWG 14 wires, respectively, that I had laying around.
</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
