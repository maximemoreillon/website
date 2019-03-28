<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Barking alarm</h1>
<h2>Project description</h2>
<p>
    			Dogs are great at discouraging burglars to come in.
    			This system brings some of the same advantages, without needing to have an actual dog at home.
    			It comes in two parts: a motion detection module (MDM) and a sond playback module (SPM).
    			When the MDM detects motion, it sends a wireless signal to the SPM, which starts outputting the sound of a large dog barking through its 3.5mm audio jack.
    			If no further signal is received, the barking sound stops in about 30 seconds.
    			The barking sound is stored as an MP3 file on a micro SD card and can thus be exchanged for any audio clip.
    		</p>
<h2>Photos</h2>
<?php gallery("/images/projects/dog/gallery/");?>

<h2>Schematics</h2>
<h3>Sound playback module</h3>
<img onclick="open_image_modal(this)" src="/images/projects/dog/dog_spm_schem.png"/>
<h3>Motion detection module</h3>
<img onclick="open_image_modal(this)" src="/images/projects/dog/dog_mdm_schem.png"/>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
